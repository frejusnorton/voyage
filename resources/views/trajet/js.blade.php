<script>
    $(document).ready(function () {
        // Initialisation des animations
        const cards = document.querySelectorAll('.animate-on-scroll');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        cards.forEach(card => {
            observer.observe(card);
        });

        // Gestion du formulaire de filtrage
        $('#filter_trajet').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            var currentPage = $('#trajet_datapart').data('current-page') || 1;
            formData += '&page=' + currentPage;

            $("#trajet_datapart").html('<div class="col-xs-12 text-center" style="padding-top: 3em;">' +
                '<i class="fa fa-spin fa-spinner" style="color: lightgrey; font-size: 4em;"></i>' +
                '</div>');

            closeFilterModal();

            $.ajax({
                url: '{{ route('trajet') }}',
                method: 'GET',
                data: formData,
                success: function (response) {
                    $("#trajet_datapart").html(response);
                    // Réinitialiser les animations après le chargement du contenu
                    const newCards = document.querySelectorAll('.animate-on-scroll');
                    newCards.forEach(card => {
                        observer.observe(card);
                    });
                },
                error: function (xhr, status, error) {
                    $("#trajet_datapart").html(
                        '<p class="text-muted fs-5">Une erreur est survenue, veuillez réessayer</p>'
                    );
                }
            });
        });

        // Gestion de la pagination
        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#trajet_datapart').data('current-page', page);
            $('#filter_trajet').submit();
        });

        // Gestion de la recherche
        $('#search').on('keyup', function (e) {
            var search = $(this).val();
            var url = "{{ route('trajet') }}";

            $("#trajet_datapart").html(`
                <div class="col-xs-12 text-center" style="padding-top: 3em;">
                    <i class="fa fa-spin fa-spinner" style="color: lightgrey; font-size: 4em;"></i>
                </div>
            `);

            if (window.ajaxControl) {
                window.ajaxControl.abort();
            }

            window.ajaxControl = $.ajax({
                url: url,
                data: { 'search': search },
                type: 'GET',
                success: function (data) {
                    $("#trajet_datapart").html(data);
                    const newCards = document.querySelectorAll('.animate-on-scroll');
                    newCards.forEach(card => {
                        observer.observe(card);
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Erreur lors de la recherche:', error);
                }
            });
        });

        // ALERTE DE CONFIRMATION Reservation
        $(document).on('click', '#reservation', function () {
            const url = $(this).data('url');
            const trajetId = $(this).data('trajet-id');
            const userId = $(this).data('user-id');
            const loginRoute = @json(route('login'));
            const token = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title: "Voulez-vous vraiment réserver ce trajet ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Oui, continuer",
                cancelButtonText: "Annuler"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        data: {
                            _token: token,
                            trajet_id: trajetId,
                            user_id: userId
                        },
                        success: function (response) {
                            Swal.fire(
                                'Réservation réussie !',
                                response.message,
                                'success'
                            ).then(() => {
                                window.location.href = response.redirect;
                            });
                        },
                        error: function (error) {
                            console.log(error);
                            if (error.status === 401) {
                                Swal.fire({
                                    title: "Vous devez être connecté !",
                                    text: "Veuillez vous connecter pour réserver ce trajet.",
                                    icon: "info",
                                    confirmButtonText: "Se connecter"
                                }).then(() => {
                                    window.location.href = loginRoute;
                                });
                            } else {
                                Swal.fire(
                                    'Erreur',
                                    'Une erreur s\'est produite. Veuillez réessayer.',
                                    'error'
                                );
                            }
                        }
                    });
                }
            });
        });



        $('#publier_trajet').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route('checkIfConducteur') }}',
                method: 'GET',
                success: function (response) {
                    if (response.isConducteur) {
                        window.location.href = '{{ route('trajet.create') }}';
                    } else {
                        Swal.fire({
                            title: 'Accès réservé',
                            text: "Seuls les conducteurs peuvent publier des trajets.",
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 401) {
                        Swal.fire({
                            title: 'Connexion requise',
                            text: "Vous devez vous connecter pour publier un trajet.",
                            icon: 'info',
                            confirmButtonText: 'Se connecter',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href =
                                    '{{ route('login') }}';
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Erreur',
                            text: "Une erreur est survenue. Veuillez réessayer.",
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            });
        });

        $(document).ready(function () {
            $("#trajet_create").submit(function (e) {
                e.preventDefault();

                // Désactiver le bouton + afficher spinner + changer le texte
                const $btn = $("#submit-trajet-btn");
                $btn.prop("disabled", true);
                $("#spinner").removeClass("hidden");
                $("#submit-text").text("Patientez...");

                $.ajax({
                    url: "{{ route('trajet.create') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Succès!',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = response.redirect;
                            });
                        } else {
                            resetButton();
                        }
                    },
                    error: function (xhr) {
                        resetButton();

                        if (xhr.status == 401) {
                            Swal.fire({
                                title: 'Erreur',
                                text: xhr.responseJSON?.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Erreur',
                                    text: value[0],
                                    confirmButtonText: 'OK'
                                });
                            });
                        }
                    }
                });

                function resetButton() {
                    $btn.prop("disabled", false);
                    $("#spinner").addClass("hidden");
                    $("#submit-text").text("Publier le trajet");
                }
            });
        });


        $(document).ready(function () {
            // Fonction pour ouvrir la modal de filtrage
            function openFilterModal() {
                $('#filterModal').removeClass('hidden');
                setTimeout(() => {
                    $('#filterModal').removeClass('opacity-0').addClass('opacity-100');
                    $('#filterModalContent').removeClass('translate-y-4').addClass('translate-y-0');
                }, 10);
            }

            // Fonction pour fermer la modal de filtrage
            function closeFilterModal() {
                $('#filterModal').addClass('opacity-0').removeClass('opacity-100');
                $('#filterModalContent').addClass('translate-y-4').removeClass('translate-y-0');
                setTimeout(() => {
                    $('#filterModal').addClass('hidden');
                }, 200);
            }

            // Gestionnaire d'événements pour fermer la modal en cliquant en dehors
            $(document).on('click', function (event) {
                const $modal = $('#filterModal');
                const $modalContent = $('#filterModalContent');

                if ($(event.target).is($modal) && !$modalContent.is(event.target) && !$modalContent.has(event.target).length) {
                    closeFilterModal();
                }
            });

            // Gestionnaire d'événements pour le bouton de fermeture
            $('#closeFilterModal').on('click', function () {
                closeFilterModal();
            });

            // Exposer la fonction globalement
            window.openFilterModal = openFilterModal;
            window.closeFilterModal = closeFilterModal;
        });
    });
</script>
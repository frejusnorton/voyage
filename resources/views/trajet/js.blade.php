<script>
    $(document).ready(function () {
        $('#filter_trajet').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize();


            var currentPage = $('#trajet').data('current-page') || 1;
            formData += '&page=' + currentPage;


            $("div#trajet").html('<div class="col-xs-12 text-center" style="padding-top: 3em;">' +
                '<i class="fa fa-spin fa-spinner" style="color: lightgrey; font-size: 4em;"></i>' +
                ' </div>');


            $.ajax({
                url: '{{ route('trajet') }}',
                method: 'GET',
                data: formData,
                success: function (response) {
                    var menuElement = document.querySelector("#kt_menu_6155af3f2f180");
                    var menuInstance = KTMenu.getInstance(menuElement);
                    if (menuInstance) {
                        menuInstance.hide();
                    }
                    $('#trajet').html(response);
                },
                error: function (xhr, status, error) {
                    $('#trajet').html('<p class = "class="text-muted fs-5"" >Une erreur est survenue,veuilllez réessayer</p>');
                }
            });
        });


        $(document).on('click', '.pagination a', function (e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#trajet').data('current-page', page);


            $('#filter_trajet').submit();
        });
    });
    $('#search').on('keyup', function (e) {
        var search = $(this).val();
        var url = "{{ route('trajet') }}";


        $("#trajet").html(`
        <div class="col-xs-12 text-center" style="padding-top: 3em;">
            <i class="fa fa-spin fa-spinner" style="color: lightgrey; font-size: 4em;"></i>
        </div>
    `);

        // Annulation de la requête AJAX en cours
        if (window.ajaxControl) {
            window.ajaxControl.abort();
        }

        // Nouvelle requête AJAX
        window.ajaxControl = $.ajax({
            url: url,
            data: {
                'search': search
            },
            type: 'GET',
            success: function (data) {
                $("#trajet").html(data);
            },
            error: function (xhr, status, error) {

            }
        });
    });
    
    
    
    // ALERTE DE CONFIRMATION Reservation
    $(document).on('click', '#reservation', function () {
        const url = $(this).data('url');
        const trajetId = $(this).data('trajet-id');
        const userId = $(this).data('user-id');
        const loginRoute = @json(route('login'));

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
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        trajet_id: trajetId,
                        user_id: userId,

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
                        if (error.status === 401) {
                            Swal.fire({
                                title: "Vous devez être connecté !",
                                text: "Veuillez vous connecter pour réserver ce trajet.",
                                icon: "info",
                                confirmButtonText: "Se connecter"
                            }).then(() => {
                                window.location.href = "{{ route('login') }}";
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


    $(document).ready(function () {
    $('#publier_trajet').on('click', function (e) {
        e.preventDefault();
       
        $.ajax({
            url: '{{ route("checkIfConducteur") }}',  
            method: 'GET',
            success: function (response) {
                if (response.isConducteur) {
                    window.location.href = '{{ route("trajet.create") }}';
                } else {
                    Swal.fire({
                        title: 'Accès réservé',
                        text: "Seuls les conducteurs peuvent publier des trajets.",
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: 'Erreur',
                    text: "Une erreur est survenue. Veuillez réessayer.",
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});


</script>
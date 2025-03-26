<script>
    $(document).on('click', '#annuler_reservation', function (e) {
        e.preventDefault();

        var reservation = $(this).data('reservation');


        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: "Vous allez annuler cette réservation.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Oui, annuler!',
            cancelButtonText: 'Non, garder la réservation!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('reservation.annuler', ['reservation' => '__reservation_id__']) }}"
                        .replace('__reservation_id__', reservation),
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        reservation: reservation
                    },
                    success: function (response) {
                        Swal.fire(
                            'Réservation annulée !',
                            response.message,
                            'success'
                        ).then(() => {
                            location.reload();
                        })
                    },
                    error: function (error) {
                        if (error.status === 401) {
                            Swal.fire({
                                title: "Vous devez être connecté !",
                                text: "Veuillez vous connecter pour annuler cette réservation.",
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

    // RECHERCHER UNE RESERVATION
    $('#search').on('keyup', function (e) {
        var search = $(this).val();
        var user = $(this).data('user-id');


        var url = "{{ route('reservation.recherche') }}";

        $("#reservation").html(`
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
                'search': search,
                'user': user
            },
            type: 'GET',
            success: function (data) {
                $("#reservation").html(data);
            },
            error: function (xhr, status, error) {

            }
        });
    });

    $(document).ready(function () {
    $("[id^=annuler_reservation_]").each(function () {
        var heureDepart = $(this).data("heure-depart");
        var dateHeureDepart = new Date(heureDepart);
        var now = new Date();
        var diffInMinutes = (dateHeureDepart - now) / (1000 * 60);

        if (diffInMinutes <= 60) {
            $(this).prop("disabled", true).addClass("disabled");
        }
    });
});


</script>
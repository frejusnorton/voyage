<script>
    $(document).on('click', '#annuler_reservation', function(e) {
        e.preventDefault();

        var reservation = $(this).data('reservation');
        console.log(reservation);

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
                    success: function(response) {
                        Swal.fire(
                            'Réservation annulée !',
                            response.message,
                            'success'
                        ).then(() => {
                            location.reload(); 
                        })
                    },
                    error: function(error) {
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
</script>

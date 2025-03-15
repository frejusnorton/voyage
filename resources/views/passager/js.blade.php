<script>
    $(document).ready(function () {
        $("#edit_passager_profil").submit(function (e) {
            e.preventDefault();
            console.log('in')

            var url = $(this).attr('action');
            var formData = new FormData(this);

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
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
                    }
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            Swal.fire({
                                title: 'Erreur de validation',
                                text: value[0],
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        });
                    } else if (xhr.status === 500) {
                        Swal.fire({
                            title: 'Erreur!',
                            text: "Une erreur est survenue ! Veuillez réessayer.",
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                }

            });
        });
    });

    //SUPPRESSION DE compte
    $(document).ready(function () {
    $("#supprimer_compte").submit(function (e) {
        e.preventDefault();
   
        var form = $(this); 
        var url = form.attr('action');
        var formData = form.serialize();

        Swal.fire({
            title: "Êtes-vous sûr?",
            text: "Cette action est irréversible!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Oui, supprimer!",
            cancelButtonText: "Annuler"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Succès!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            }).then(() => {
                                window.location.href = response.redirect;
                            });
                        }
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function (key, value) {
                                Swal.fire({
                                    title: "Erreur de validation",
                                    text: value[0],
                                    icon: "error",
                                    confirmButtonText: "OK"
                                });
                            });
                        } else if (xhr.status === 500) {
                            Swal.fire({
                                title: "Erreur!",
                                text: "Une erreur est survenue ! Veuillez réessayer.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    }
                });
            }
        });
    });
});

</script>
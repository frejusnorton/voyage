<script>
    $(document).ready(function () {
        $("#login-form").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('login') }}",
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
                    }
                },
                error: function (xhr) {
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
                            $(".error-" + key).text(value[0]);
                        });
                    } 
                }
            });
        });
    });
</script>
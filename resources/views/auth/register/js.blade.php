<script>
    $(document).ready(function () {
        $("#register-form").submit(function (e) {
            console.log('soumis')
            e.preventDefault();
            $(".text-danger").text("");
            $("#alert-message").removeClass("alert-success alert-danger d-block").addClass("d-none");
            $.ajax({
                url: "{{ route('register') }}",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {
                    console.log(response);
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
                            $(".error-" + key).text(value[0]);
                        });
                    } else {
                        Swal.fire({
                            title: 'Erreur',
                            text: 'Une erreur est survenue ! Veuillez réessayer dans un instant.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion de la visibilité du mot de passe
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');
        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                
                // Animation de l'icône
                this.querySelector('svg').classList.toggle('text-blue-500');
            });
        });
        
    });
</script>
<script>
    $(document).ready(function () {
        $("#register-form").submit(function (e) {
            console.log('soumis')
            e.preventDefault();
            const $btn = $("#kt_sign_up_submit");
            $btn.prop("disabled", true);
            $btn.find(".indicator-label").addClass("hidden");
            $btn.find(".indicator-progress").removeClass("hidden");

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
                    $btn.prop("disabled", false);
                    $btn.find(".indicator-label").removeClass("hidden");
                    $btn.find(".indicator-progress").addClass("hidden");
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
        const togglePasswordButtons = document.querySelectorAll('.toggle-password');
        togglePasswordButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.querySelector('svg').classList.toggle('text-blue-500');
            });
        });
        
    });
</script>
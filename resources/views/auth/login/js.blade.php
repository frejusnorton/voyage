<script>
    let url = "{{ route('login', [], true) }}";
    console.log(url,'ici');
    $(document).ready(function () {
        $("#login-form").submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: url,
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {

                    if (response.success) {
                        const notification = $('<div>').addClass('notification-container');
                        const notificationHtml = `
                            <x-notification type="success" message="${response.message}" />
                        `;
                        notification.html(notificationHtml);
                        $('body').append(notification);

                        setTimeout(() => {
                            window.location.href = response.redirect;
                        }, 500);
                    }
                },
                error: function (xhr) {
                    if (xhr.status == 401) {
                        const notification = $('<div>').addClass('notification-container');
                        const notificationHtml = `
                            <x-notification type="error" message="${xhr.responseJSON?.message}" />
                        `;
                        notification.html(notificationHtml);
                        $('body').append(notification);
                    }
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            const errorDiv = $(`.error-${key}`);
                            errorDiv.html(`
                                <div class="mt-1 text-sm text-red-600 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    ${value[0]}
                                </div>
                            `);
                        });
                    }
                }
            });
        });

        $('input').on('input', function () {
            const fieldName = $(this).attr('name');
            $(`.error-${fieldName}`).empty();
        });
    });
</script>
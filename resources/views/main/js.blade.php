<script>
    $(document).ready(function() {
        // Fonction pour basculer le menu utilisateur
        function toggleUserMenu() {
            const $menu = $('#userMenu');
            $menu.toggleClass('hidden');
            if (!$menu.hasClass('hidden')) {
                setTimeout(() => {
                    $menu.removeClass('opacity-0 scale-95').addClass('opacity-100 scale-100');
                }, 10);
            } else {
                $menu.addClass('opacity-0 scale-95').removeClass('opacity-100 scale-100');
            }
        }

        // Fonction pour basculer le menu mobile
        function toggleMobileMenu() {
            const $menu = $('#mobileMenu');
            const $menuContent = $menu.find('div');
            $menu.toggleClass('hidden');
            
            if (!$menu.hasClass('hidden')) {
                setTimeout(() => {
                    $menuContent.removeClass('translate-x-full');
                }, 10);
            } else {
                $menuContent.addClass('translate-x-full');
            }
        }

        // Fermer le menu utilisateur en cliquant en dehors
        $(document).on('click', function(event) {
            const $userMenu = $('#userMenu');
            const $userButton = $('button[onclick="toggleUserMenu()"]');
            
            if (!$userButton.is(event.target) && !$userMenu.is(event.target) && !$userMenu.has(event.target).length) {
                $userMenu.addClass('hidden opacity-0 scale-95').removeClass('opacity-100 scale-100');
            }
        });

        // Fermer le menu mobile en cliquant en dehors
        $('#mobileMenu').on('click', function(event) {
            if ($(event.target).is(this)) {
                toggleMobileMenu();
            }
        });

        // Fonction pour basculer les FAQ
        function toggleFAQ(id) {
            const $content = $(`#faqContent${id}`);
            const $icon = $(`#faqIcon${id}`);
            
            $content.toggleClass('hidden');
            $icon.toggleClass('rotate-180');
        }

        // Exposer les fonctions globalement si nécessaire
        window.toggleUserMenu = toggleUserMenu;
        window.toggleMobileMenu = toggleMobileMenu;
        window.toggleFAQ = toggleFAQ;
    });
</script>
<script>
    // Définir les fonctions globales
    window.toggleMobileMenu = function() {
        const menu = $('#mobileMenu');
        const menuContent = menu.find('div');
        menu.toggleClass('hidden');
        
        if (!menu.hasClass('hidden')) {
            setTimeout(() => {
                menuContent.removeClass('translate-x-full');
            }, 10);
        } else {
            menuContent.addClass('translate-x-full');
        }
    };

    window.toggleUserMenu = function() {
        const menu = $('#userMenu');
        menu.toggleClass('hidden');
        if (!menu.hasClass('hidden')) {
            setTimeout(() => {
                menu.removeClass('opacity-0 scale-95').addClass('opacity-100 scale-100');
            }, 10);
        } else {
            menu.addClass('opacity-0 scale-95').removeClass('opacity-100 scale-100');
        }
    };

    window.toggleFAQ = function(id) {
        const content = $(`#faqContent${id}`);
        const icon = $(`#faqIcon${id}`);
        
        // Fermer toutes les autres FAQ
        $('.faq-content').not(content).addClass('hidden');
        $('.faq-icon').not(icon).removeClass('rotate-180');
        
        // Basculer la FAQ actuelle
        content.toggleClass('hidden');
        icon.toggleClass('rotate-180');
    };

    // Initialiser les événements
    $(document).ready(function() {
        // Fermer le menu mobile en cliquant en dehors
        $('#mobileMenu').on('click', function(event) {
            if ($(event.target).is(this)) {
                toggleMobileMenu();
            }
        });

        // Fermer le menu utilisateur en cliquant en dehors
        $(document).on('click', function(event) {
            const userMenu = $('#userMenu');
            const userButton = $('button[onclick="toggleUserMenu()"]');
            
            if (!userButton.is(event.target) && !userMenu.is(event.target) && !userMenu.has(event.target).length) {
                userMenu.addClass('hidden opacity-0 scale-95').removeClass('opacity-100 scale-100');
            }
        });

        // Gestion du loading
        showLoading();
        setTimeout(function() {
            hideLoading();
        }, 1000);

        // Gérer le loading lors des changements de page
        $(document).on('click', 'a:not([target])', function() {
            showLoading();
        });
    });
</script>
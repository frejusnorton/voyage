<div id="loading-overlay" class="fixed inset-0 bg-white bg-opacity-90 z-[9999] flex items-center justify-center">
    <div class="text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-100 mb-4">
            <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-600 border-t-transparent"></div>
        </div>
        <p class="text-gray-600 font-medium">Chargement en cours...</p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadingOverlay = document.getElementById('loading-overlay');
        const appContent = document.getElementById('app');
        
        // Cacher le contenu de l'application par défaut
        appContent.classList.add('hidden');
        
        // Afficher le loading
        window.showLoading = function() {
            loadingOverlay.classList.remove('hidden');
            appContent.classList.add('hidden');
        };
        
        // Cacher le loading
        window.hideLoading = function() {
            loadingOverlay.classList.add('hidden');
            appContent.classList.remove('hidden');
        };

        // Afficher le contenu une fois que tout est chargé
        window.addEventListener('load', function() {
            hideLoading();
        });
    });
</script> 
<!-- Avis -->
<section id="avis" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce que disent nos utilisateurs</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Découvrez les expériences de nos utilisateurs satisfaits.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-gray-900">Marie Dupont</h4>
                        <p class="text-gray-600">Passager régulier</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Une application intuitive et des trajets toujours ponctuels. Je recommande !"</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-gray-900">Pierre Martin</h4>
                        <p class="text-gray-600">Conducteur</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Une excellente plateforme pour partager mes trajets. La sécurité est au rendez-vous."</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8">
                <div class="flex items-center mb-6">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Avatar" class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-bold text-gray-900">Sophie Bernard</h4>
                        <p class="text-gray-600">Passager occasionnel</p>
                    </div>
                </div>
                <p class="text-gray-600 italic">"Des prix compétitifs et une communauté sympa. Je ne peux plus m'en passer !"</p>
                <div class="mt-4 text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bouton retour en haut -->
<button id="backToTop" class="fixed bottom-8 right-8 bg-blue-600 text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Bouton retour en haut
    const backToTopButton = document.getElementById('backToTop');
    
    // Afficher/masquer le bouton
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    // Retour en haut au clic
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>

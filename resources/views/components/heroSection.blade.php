<!-- Hero Section -->
<section id="accueil" class="pt-32 pb-20 bg-gradient-to-br from-indigo-600 via-blue-600 to-pink-500 text-white">
    <div class="container mx-auto px-4">
        <div class="relative">
            <!-- Slides -->
            <div class="carousel-container h-[600px]">
                <!-- Slide 1 -->
                <div class="carousel-slide active">
                    <div class="grid md:grid-cols-2 gap-12 items-center h-full">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">Découvrez le Bénin autrement</h1>
                            <p class="text-xl mb-8">Voyagez en toute sérénité avec notre service de covoiturage. Des trajets confortables, des rencontres enrichissantes.</p>
                            <div class="flex space-x-4">
                                <a href="{{route('trajet')}}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 shadow-sm">
                                    <span>Commencer</span>
                                    <svg class="ml-2 -mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{asset('assets/media/covoiturage.jpg')}}" alt="Voyageurs" class="rounded-2xl shadow-2xl w-full h-[400px] object-cover">
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                                <div class="flex items-center">
                                    <div class="flex -space-x-2">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382420.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382422.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-semibold">+5000 voyageurs</p>
                                        <p class="text-xs text-gray-500">Nous font confiance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide">
                    <div class="grid md:grid-cols-2 gap-12 items-center h-full">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">Voyagez en toute sécurité</h1>
                            <p class="text-xl mb-8">Nos conducteurs sont vérifiés et notés pour garantir votre sécurité et votre confort.</p>
                            <div class="flex space-x-4">
                                <a href="{{route('trajet')}}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 shadow-sm">
                                    <span>Commencer</span>
                                    <svg class="ml-2 -mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{asset('assets/media/covoiturage.jpg')}}" alt="Voyageurs" class="rounded-2xl shadow-2xl w-full h-[400px] object-cover">
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                                <div class="flex items-center">
                                    <div class="flex -space-x-2">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382420.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-semibold">+1000 conducteurs</p>
                                        <p class="text-xs text-gray-500">Vérifiés et notés</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide">
                    <div class="grid md:grid-cols-2 gap-12 items-center h-full">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-bold mb-6">Économisez sur vos trajets</h1>
                            <p class="text-xl mb-8">Partagez les frais de route et réduisez vos dépenses de transport jusqu'à 75%.</p>
                            <div class="flex space-x-4">
                                <a href="{{route('trajet')}}" class="inline-flex items-center px-6 py-2.5 border border-transparent text-sm font-medium rounded-full text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 shadow-sm">
                                    <span>Commencer</span>
                                    <svg class="ml-2 -mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img src="{{asset('assets/media/covoiturage.jpg')}}" alt="Voyageurs" class="rounded-2xl shadow-2xl w-full h-[400px] object-cover">
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                                <div class="flex items-center">
                                    <div class="flex -space-x-2">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382422.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382420.jpg" class="w-10 h-10 rounded-full border-2 border-white" alt="User">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-semibold">Économies garanties</p>
                                        <p class="text-xs text-gray-500">Jusqu'à 75%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contrôles du carrousel -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="carousel-dot active w-3 h-3 rounded-full bg-white" data-slide="0"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white/50" data-slide="1"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white/50" data-slide="2"></button>
            </div>
        </div>
    </div>
</section>

<style>
.carousel-container {
    position: relative;
    overflow: hidden;
    height: 600px;
}

.carousel-slide {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    display: flex;
    align-items: center;
}

.carousel-slide.active {
    opacity: 1;
}

.carousel-dot.active {
    background-color: white;
    transform: scale(1.2);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    function nextSlide() {
        showSlide((currentSlide + 1) % slides.length);
    }

    // Démarrer le carrousel automatique
    function startCarousel() {
        slideInterval = setInterval(nextSlide, 3000);
    }

    // Gérer les clics sur les points
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(slideInterval);
            showSlide(index);
            startCarousel();
        });
    });

    // Démarrer le carrousel
    startCarousel();
});
</script>
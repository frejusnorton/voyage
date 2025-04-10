<footer class="bg-gray-900 text-white pt-12 pb-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">À propos</h3>
                <p class="text-gray-400">Voyagez en toute sérénité avec notre service de covoiturage. Des trajets confortables, des rencontres enrichissantes.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                <ul class="space-y-2">
                    <li><a href="{{route('trajet')}}" class="text-gray-400 hover:text-white transition">Trouver un trajet</a></li>
                    <li><a href="{{route('home')}}" class="text-gray-400 hover:text-white transition">Acceuil</a></li>
                    <li><a href="{{route('home')}}" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                    <li><a href="{{route('home')}}" class="text-gray-400 hover:text-white transition">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Légales</h3>
                <ul class="space-y-2">
                    <li><a href="{{route('conditions')}}" class="text-gray-400 hover:text-white transition">Conditions d'utilisation</a></li>
                    <li><a href="{{route('politique')}}" class="text-gray-400 hover:text-white transition">Politique de confidentialité</a></li>
                    <li><a href="{{route('cookies')}}" class="text-gray-400 hover:text-white transition">Politique des cookies</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-envelope mr-3"></i>
                        <span>contact@covoyage.com</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-phone mr-3"></i>
                        <span>+229 0190775682</span>
                    </li>
                    <li class="flex items-center text-gray-400">
                        <i class="fas fa-map-marker-alt mr-3"></i>
                        <span>Cotonou, Bénin</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 my-8"></div>
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="text-gray-400 text-sm mb-4 md:mb-0">
                &copy; {{date('Y')}} Voyage. Tous droits réservés.
            </div>
            <div class="flex space-x-4">
                <span class="text-gray-400 hover:text-white transition text-xl">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <span class="text-gray-400 hover:text-white transition text-xl">
                    <i class="fab fa-twitter"></i>
                </a>
                <span class="text-gray-400 hover:text-white transition text-xl">
                    <i class="fab fa-instagram"></i>
                </a>
                <span class="text-gray-400 hover:text-white transition text-xl">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
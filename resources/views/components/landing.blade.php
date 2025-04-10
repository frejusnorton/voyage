<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>VoyageZen - Votre compagnon de voyage au Bénin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-+..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
  </head>
  <body class="bg-gray-50">

 

<header class="fixed w-full bg-white/90 backdrop-blur-sm text-gray-800 shadow-sm z-50">
	<div class="container mx-auto px-4">
		<div class="flex justify-between items-center py-4">
			<div class="flex items-center">
				<span class="text-2xl font-bold text-blue-600">VoyageZen</span>
			</div>
			<nav class="hidden md:flex space-x-8">
				<a href="{{route('home')}}" class="hover:text-blue-600 transition">Accueil</a>
				<a href="{{route('trajet')}}" class="hover:text-blue-600 transition">Trajets</a>
				<a href="#contact" class="hover:text-blue-600 transition">Contact</a>
			</nav>
			<div class="flex items-center space-x-4">
				<div class="relative">
					<button onclick="toggleUserMenu()" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition">
						<i class="fas fa-user-circle text-2xl"></i>
						<span class="hidden md:inline">Mon compte</span>
					</button>
					<div id="userMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-2 hidden transform transition-all duration-300 ease-in-out opacity-0 scale-95">
						<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
							<i class="fas fa-sign-in-alt mr-2"></i>Connexion
						</a>
						<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
							<i class="fas fa-user-plus mr-2"></i>Inscription
						</a>
						<div class="border-t border-gray-100 my-2"></div>
						<div class="relative group">
							<button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition flex items-center justify-between">
								<span><i class="fas fa-globe mr-2"></i>Langue</span>
								<i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
							</button>
							<div class="absolute left-0 mt-1 w-full bg-white rounded-lg shadow-lg py-2 hidden group-hover:block">
								<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition flex items-center">
									<img src="https://flagcdn.com/w20/fr.png" alt="Français" class="w-5 h-4 mr-2">
									Français
								</a>
							</div>
						</div>
						<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
							<i class="fas fa-cog mr-2"></i>Paramètres
						</a>
						<a href="#" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
							<i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
						</a>
					</div>
				</div>
				<button onclick="toggleMobileMenu()" class="text-2xl text-gray-700 hover:text-blue-600 transition lg:hidden">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</div>
	</div>
</header>
<div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-60 z-40 hidden">
	<div class="fixed inset-y-0 right-0 w-64 bg-white transform transition-transform duration-300 ease-in-out translate-x-full">
		<div class="flex justify-between items-center p-4 border-b">
			<span class="text-xl font-bold text-blue-600">Menu</span>
			<button onclick="toggleMobileMenu()" class="text-gray-500 hover:text-gray-700">
				<i class="fas fa-times"></i>
			</button>
		</div>
		<div class="overflow-y-auto h-[calc(100vh-4rem)]">
			<div class="p-4">
				<div class="mb-6">
					<button class="w-full flex items-center justify-between p-3 bg-gray-50 rounded-lg">
						<span class="flex items-center">
							<img src="https://flagcdn.com/w20/fr.png" alt="Français" class="w-5 h-4 mr-2">
							Français
						</span>
						<i class="fas fa-chevron-down"></i>
					</button>
				</div>
				<nav>
					<ul class="space-y-2">
						<li>
							<a href="{{route('home')}}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition" onclick="toggleMobileMenu()">
								<i class="fas fa-home w-6"></i>
								<span>Accueil</span>
							</a>
						</li>
						<li>
							<a href="{{route('trajet')}}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition" onclick="toggleMobileMenu()">
								<i class="fas fa-map-marker-alt w-6"></i>
								<span>Trajet</span>
							</a>
						</li>
						
						<li>
							<a href="#contact" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition" onclick="toggleMobileMenu()">
								<i class="fas fa-envelope w-6"></i>
								<span>Contact</span>
							</a>
						</li>
					</ul>
				</nav>
				<div class="mt-8">
					<h3 class="text-sm font-semibold text-gray-500 uppercase mb-4">Mon compte</h3>
					<ul class="space-y-2">
						<li>
							<a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
								<i class="fas fa-sign-in-alt w-6"></i>
								<span>Connexion</span>
							</a>
						</li>
						<li>
							<a href="#" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
								<i class="fas fa-user-plus w-6"></i>
								<span>Inscription</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="absolute bottom-0 w-full p-4 border-t">
			<div class="flex justify-center space-x-4">
				<a href="#" class="text-gray-500 hover:text-blue-600 transition">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="#" class="text-gray-500 hover:text-blue-600 transition">
					<i class="fab fa-twitter"></i>
				</a>
				<a href="#" class="text-gray-500 hover:text-blue-600 transition">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>
</div>

   <!-- Hero Section -->
 <section id="accueil" class="pt-32 pb-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white relative overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://img.freepik.com/photos-gratuite/vue-aerienne-cotonou-benin_23-2149403607.jpg" alt="Background" class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/90 to-blue-800/90"></div>
    </div>
    <div class="container mx-auto px-4 relative">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeIn">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 animate-slideInLeft">Découvrez le Bénin autrement</h1>
                <p class="text-xl mb-8 animate-slideInLeft delay-200">Voyagez en toute sérénité avec notre service de covoiturage premium. Des trajets confortables, des rencontres enrichissantes.</p>
                <div class="flex space-x-4 animate-slideInLeft delay-300">
                    <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-blue-50 transition transform hover:scale-105">
                        Commencer
                    </button>
                    <button class="border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition transform hover:scale-105">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class="relative animate-slideInRight">
                <div class="relative z-10">
                    <img src="https://img.freepik.com/photos-gratuite/voyageurs-africains-posant-devant-paysage_23-2149403606.jpg" alt="Voyageurs" class="rounded-2xl shadow-2xl transform hover:scale-105 transition duration-500">
                </div>
                <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg animate-bounceIn delay-500">
                    <div class="flex items-center">
                        <div class="flex -space-x-2">
                            <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382420.jpg" class="w-10 h-10 rounded-full border-2 border-white transform hover:scale-110 transition" alt="User">
                            <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" class="w-10 h-10 rounded-full border-2 border-white transform hover:scale-110 transition" alt="User">
                            <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382422.jpg" class="w-10 h-10 rounded-full border-2 border-white transform hover:scale-110 transition" alt="User">
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
</section>

    <!-- Destinations -->
    <section id="destinations" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Destinations populaires</h2>
                <p class="text-xl text-gray-600">Découvrez les plus belles villes du Bénin</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="relative group">
                    <img src="https://img.freepik.com/photos-gratuite/vue-aerienne-cotonou-benin_23-2149403607.jpg" alt="Cotonou" class="w-full h-96 object-cover rounded-xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-xl">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Cotonou</h3>
                            <p class="text-white/90">La capitale économique</p>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://img.freepik.com/photos-gratuite/vue-aerienne-porto-novo-benin_23-2149403608.jpg" alt="Porto-Novo" class="w-full h-96 object-cover rounded-xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-xl">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Porto-Novo</h3>
                            <p class="text-white/90">La capitale administrative</p>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <img src="https://img.freepik.com/photos-gratuite/vue-aerienne-abomey-benin_23-2149403609.jpg" alt="Abomey" class="w-full h-96 object-cover rounded-xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent rounded-xl">
                        <div class="absolute bottom-0 p-6">
                            <h3 class="text-2xl font-bold text-white mb-2">Abomey</h3>
                            <p class="text-white/90">La cité historique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Nos services</h2>
                <p class="text-xl text-gray-600">Une expérience de voyage exceptionnelle</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-car text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Covoiturage Premium</h3>
                    <p class="text-gray-600">Voyagez confortablement avec des conducteurs vérifiés et des véhicules de qualité.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Sécurité Garantie</h3>
                    <p class="text-gray-600">Profils vérifiés, trajets sécurisés et assistance 24/7 pour votre tranquillité.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-clock text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Flexibilité</h3>
                    <p class="text-gray-600">Choisissez vos horaires et vos destinations selon vos besoins.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Avis -->
    <section id="avis" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Ce que disent nos voyageurs</h2>
                <p class="text-xl text-gray-600">Découvrez les expériences de nos utilisateurs</p>
            </div>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Service exceptionnel ! Les conducteurs sont très professionnels et les trajets sont très confortables. Je recommande vivement !"</p>
                    <div class="flex items-center">
                        <img src="https://img.freepik.com/photos-gratuite/portrait-femme-africaine-souriante_23-2149382421.jpg" alt="Aïcha" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Aïcha B.</h4>
                            <p class="text-sm text-gray-500">Voyageuse régulière</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Une application très pratique pour mes déplacements quotidiens. Le service client est réactif et les prix sont très compétitifs."</p>
                    <div class="flex items-center">
                        <img src="https://img.freepik.com/photos-gratuite/portrait-homme-africain-souriant_23-2149382420.jpg" alt="Mamadou" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold">Mamadou T.</h4>
                            <p class="text-sm text-gray-500">Conducteur partenaire</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600">Nous sommes là pour vous aider</p>
            </div>
            <div class="max-w-4xl mx-auto">
                <form class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 mb-2">Nom complet</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <div class="mt-6">
                        <label class="block text-gray-700 mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                    <button type="submit" class="mt-6 w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Questions fréquentes</h2>
                <p class="text-xl text-gray-600">Tout ce que vous devez savoir sur notre service</p>
            </div>
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button onclick="toggleFAQ(1)" class="w-full flex justify-between items-center p-6 text-left">
                        <span class="text-lg font-semibold">Comment fonctionne le paiement ?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon1"></i>
                    </button>
                    <div id="faqContent1" class="hidden px-6 pb-6">
                        <p class="text-gray-600">Le paiement se fait directement sur notre plateforme de manière sécurisée. Vous pouvez payer par carte bancaire ou mobile money. Le conducteur reçoit le paiement après validation du trajet.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button onclick="toggleFAQ(2)" class="w-full flex justify-between items-center p-6 text-left">
                        <span class="text-lg font-semibold">Comment sont sélectionnés les conducteurs ?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon2"></i>
                    </button>
                    <div id="faqContent2" class="hidden px-6 pb-6">
                        <p class="text-gray-600">Tous nos conducteurs sont vérifiés et doivent fournir des documents d'identité valides, leur permis de conduire et leur historique de trajets. Nous vérifions également leur réputation auprès des passagers.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button onclick="toggleFAQ(3)" class="w-full flex justify-between items-center p-6 text-left">
                        <span class="text-lg font-semibold">Puis-je annuler un trajet ?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon3"></i>
                    </button>
                    <div id="faqContent3" class="hidden px-6 pb-6">
                        <p class="text-gray-600">Oui, vous pouvez annuler un trajet jusqu'à 24 heures avant le départ sans frais. Pour les annulations de dernière minute, des frais peuvent s'appliquer selon les conditions générales.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <button onclick="toggleFAQ(4)" class="w-full flex justify-between items-center p-6 text-left">
                        <span class="text-lg font-semibold">Comment fonctionne le système de notation ?</span>
                        <i class="fas fa-chevron-down transform transition-transform duration-300" id="faqIcon4"></i>
                    </button>
                    <div id="faqContent4" class="hidden px-6 pb-6">
                        <p class="text-gray-600">Après chaque trajet, les passagers et les conducteurs se notent mutuellement. Ces notes sont publiques et contribuent à maintenir une communauté de confiance. Les utilisateurs avec des notes insatisfaisantes peuvent être exclus de la plateforme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   @include('components.footer')

    <script>
        function toggleUserMenu() {
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
            if (!menu.classList.contains('hidden')) {
                setTimeout(() => {
                    menu.classList.remove('opacity-0', 'scale-95');
                    menu.classList.add('opacity-100', 'scale-100');
                }, 10);
            } else {
                menu.classList.add('opacity-0', 'scale-95');
                menu.classList.remove('opacity-100', 'scale-100');
            }
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuContent = menu.querySelector('div');
            menu.classList.toggle('hidden');
            
            if (!menu.classList.contains('hidden')) {
                setTimeout(() => {
                    menuContent.classList.remove('translate-x-full');
                }, 10);
            } else {
                menuContent.classList.add('translate-x-full');
            }
        }

        // Fermer le menu utilisateur en cliquant en dehors
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('userMenu');
            const userButton = document.querySelector('button[onclick="toggleUserMenu()"]');
            
            if (!userButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden', 'opacity-0', 'scale-95');
                userMenu.classList.remove('opacity-100', 'scale-100');
            }
        });

        // Fermer le menu mobile en cliquant en dehors
        document.getElementById('mobileMenu').addEventListener('click', function(event) {
            if (event.target === this) {
                toggleMobileMenu();
            }
        });

        function toggleFAQ(id) {
            const content = document.getElementById(`faqContent${id}`);
            const icon = document.getElementById(`faqIcon${id}`);
            
            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        }
    </script>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); opacity: 0.8; }
            70% { transform: scale(0.9); opacity: 0.9; }
            100% { transform: scale(1); opacity: 1; }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out;
        }

        .animate-slideInRight {
            animation: slideInRight 1s ease-out;
        }

        .animate-bounceIn {
            animation: bounceIn 1s ease-out;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        .delay-500 {
            animation-delay: 500ms;
        }
    </style>
  </body>
</html>

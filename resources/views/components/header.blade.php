<header class="fixed w-full bg-white/90 backdrop-blur-sm text-gray-800 shadow-sm z-50">
	<div class="container mx-auto px-4">
		<div class="flex justify-between items-center py-4">
			<div class="flex items-center">
				<a href="{{route('home')}}" class="flex items-center space-x-2 group">
					<div class="relative">
						<i class="fas fa-car text-3xl text-blue-600 transform group-hover:scale-110 transition-transform duration-300"></i>
						<div class="absolute -top-1 -right-1 w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
					</div>
					<span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-500 bg-clip-text text-transparent group-hover:from-pink-500 group-hover:to-blue-600 transition-all duration-300">Covoyage</span>
				</a>
			</div>
			<nav class="hidden md:flex space-x-8">
				<a href="{{route('home')}}" class="hover:text-blue-600 transition">Accueil</a>
				<a href="{{route('trajet')}}" class="hover:text-blue-600 transition">Trajets</a>
				<a href="#contact" class="hover:text-blue-600 transition">Contact</a>
			</nav>
			<div class="flex items-center space-x-4">
				<div class="relative">
					<button onclick="toggleUserMenu()" class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition">
						@auth
							@if(Auth::user()->profil_img)
								<img src="{{ asset('storage/profil/' . Auth::user()->profil_img) }}" alt="Profil" class="w-8 h-8 rounded-full object-cover">
							@else
								<i class="fas fa-user-circle text-2xl"></i>
							@endif
							<span class="hidden md:inline">{{ Auth::user()->nom }} {{ Auth::user()->prenom }}</span>
						@else
							<i class="fas fa-user-circle text-2xl"></i>
							<span class="hidden md:inline">Mon compte</span>
						@endauth
					</button>
					<div id="userMenu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl py-2 hidden transform transition-all duration-300 ease-in-out opacity-0 scale-95">
						@guest
							<a href="{{ route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
								<i class="fas fa-sign-in-alt mr-2"></i>Connexion
							</a>
							<a href="{{ route('register') }}" class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
								<i class="fas fa-user-plus mr-2"></i>Inscription
							</a>
						@endguest
					
						@auth
							
							@if(Auth::user()->type === 'passager')
							<li>
								<a href="{{ route('passager.index', Auth::user()->id) }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mon compte</span>
								</a>
							</li>
							<li>
								<a href="{{ route('reservation') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mes réservations</span>
								</a>
							</li>
							@else
							<span>
								<a href="{{ route('conducteur.espace', Auth::user()->id) }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mon compte</span>
								</a>
							</span>
							@endif

							<a href="{{ route('logout') }}" 
							   class="block px-4 py-2  text-red-500 hover:text-red-800 transition">
								<i class="fas fa-sign-out-alt mr-2"></i>Déconnexion
							</a>
						@endauth
					
						<div class="border-t border-gray-100 my-2"></div>
					
						<div class="relative group">
							<button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition flex items-center justify-between">
								<span><i class="fas fa-globe mr-2"></i>Langue</span>
								<i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
							</button>
							<div class="absolute left-0 mt-1 w-full bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-10">
								<span class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition flex items-center">
									<img src="https://flagcdn.com/w20/fr.png" alt="Français" class="w-5 h-4 mr-2">
									Français
								</span>
							</div>
						</div>
					</div>
					
				</div>
				<button onclick="toggleMobileMenu()" class="text-2xl text-gray-700 hover:text-blue-600 transition lg:hidden">
					<i class="fas fa-bars"></i>
				</button>
			</div>
		</div>
	</div>
</header>

<div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-60 z-40 hidden ">
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
						
						
					</ul>
				</nav>
				<div class="mt-8">
					<ul class="space-y-2">
						@guest
							<li>
								<a href="{{ route('login') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-sign-in-alt w-6"></i>
									<span>Connexion</span>
								</a>
							</li>
							<li>
								<a href="{{ route('register') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user-plus w-6"></i>
									<span>Inscription</span>
								</a>
							</li>
						@endguest
				
						@auth
						@if(Auth::user()->type === 'passager')
							<li>
								<a href="{{ route('passager.index', Auth::user()->id) }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mon compte</span>
								</a>
							</li>
							<li>
								<a href="{{ route('reservation') }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mes réservations</span>
								</a>
							</li>
							@else
							<li>
								<a href="{{ route('conducteur.espace', Auth::user()->id) }}" class="flex items-center p-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 rounded-lg transition">
									<i class="fas fa-user w-6"></i>
									<span>Mon compte</span>
								</a>
							</li>
							@endif
							<li>
								<a href="{{ route('logout') }}"
								   class="flex items-center p-3 text-red-500 hover:bg-blue-50 hover:text-red-700 rounded-lg transition">
									<i class="fas fa-sign-out-alt w-6"></i>
									<span>Déconnexion</span>
								</a>
							</li>
						@endauth
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
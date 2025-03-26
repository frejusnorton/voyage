<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
	data-kt-sticky-offset="{default: '200px', lg: '300px'}">
	<!--begin::Container-->
	<div class="container d-flex align-items-center">
		<!--begin::Heaeder menu toggle-->
		<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
			<div class=" btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
				id="kt_header_menu_mobile_toggle">
				<span class="svg-icon svg-icon-2x">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
							fill="black" />
						<path opacity="0.3"
							d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
							fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
		</div>
		<!--end::Heaeder menu toggle-->
		<!--begin::Header Logo-->
		<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
			{{-- <a href="../../demo2/dist/index.html">
				<img alt="Logo" src="assets/media/logos/logo-demo2.png" class="logo-default h-25px" />
				<img alt="Logo" src="assets/media/logos/logo-demo2-sticky.png" class="logo-sticky h-25px" />
			</a> --}}
		</div>
		<!--end::Header Logo-->
		<!--begin::Wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
			<!--begin::Navbar-->
			<div class="d-flex align-items-stretch" id="kt_header_nav">
				<!--begin::Menu wrapper-->
				<div class="header-menu align-items-stretch  " data-kt-drawer="true" data-kt-drawer-name="header-menu"
					data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
					data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
					data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
					data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
					<!--begin::Menu-->
					<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
						id="#kt_header_menu" data-kt-menu="true">

						<div class="menu-item me-lg-1">
							<a href="{{ route('home') }}" class="menu-link py-3">
								<span class="menu-title fs-3 ">Acceuil</span>
							</a>
						</div>

						<div class="menu-item me-lg-1">
							<a href="{{ route('trajet') }}" class="menu-link py-3">
								<span class="menu-title fs-3 ">Trajet</span>
							</a>
						</div>

						<div class="menu-item me-lg-1">
							<a href="#a-propos" class="menu-link py-3">
								<span class="menu-title fs-3 ">A propos</span>
							</a>
						</div>

						<div class="menu-item me-lg-1">
							<a href="#contact" class="menu-link py-3 fs-3">
								<span class="menu-title ">Contacts</span>
							</a>
						</div>

					</div>

					<!--end::Menu-->
				</div>
				<!--end::Menu wrapper-->
			</div>
			<!--end::Navbar-->
			<!--begin::Topbar-->
			<div class="d-flex align-items-stretch flex-shrink-0">
				<!--begin::Toolbar wrapper-->
				<div class="topbar d-flex align-items-stretch flex-shrink-0">
					@if (Auth::check())
						@include('components.notification')
					@endif

					@if (Auth::check())
						<!--begin::Chat-->
						<div class="d-flex align-items-center ms-1 ms-lg-3">
							<!--begin::Menu wrapper-->
							<div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
								id="kt_drawer_chat_toggle">
								<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
								<span class="svg-icon svg-icon-1 fs-3">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path opacity="0.3"
											d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
											fill="black" />
										<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
										<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<span
									class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::Chat-->
					@endif
					<!--begin::User-->
					<div class="d-flex align-items-center me-n3 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
						<!--begin::Menu wrapper-->
						<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
							data-kt-menu-trigger="click" data-kt-menu-attach="parent"
							data-kt-menu-placement="bottom-end">
							@auth
								<div class="symbol symbol-30px">
									<img alt="Avatar"
									src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" />
								</div>
							@endauth
							@guest
								<div class="symbol symbol-30px">
									<img alt="Avatar" src="{{ asset('assets/media/avatars/blank.png') }}" />
								</div>
							@endguest
						</div>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-350px"
							data-kt-menu="true">
							@auth
								<!--begin::Menu item (User info)-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Avatar"
											src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bolder d-flex align-items-center fs-3">
												{{ Auth::user()->nom }}
											</div>
											<a href="#"
												class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
										</div>
										<!--end::Username-->
									</div>
								</div>
								<!--end::Menu item-->

								<!-- Menu options for logged-in users -->
								@if (auth()->user()->type === 'passager')
									<div class="menu-item px-5 my-1 d-flex justify-between">
										<a href="{{ route('reservation') }}" class="menu-link px-5 fs-3">Mes
											réservations</a>
									</div>
								@endif
								@if (auth()->user()->type === 'conducteur')
						
									<div class="menu-item px-5 my-1 d-flex justify-between">

										<a href="{{route('conducteur.espace') }}" class="menu-link px-5 fs-3">
									        	Mon espace
										</a>
									</div>
									
								@endif

								@if (auth()->user()->type === 'passager')
									<div class="menu-item px-5 my-1 d-flex justify-between">
										<a href="{{ route('passager.index', ['user' => Auth::user()->id]) }}"
											class="menu-link px-5 fs-3">Paramètres de compte</a>
									</div>
								@endif

								<!-- Logout button -->
								<div class="menu-item px-5 my-1">
									<form action="{{ route('logout') }}" method="POST">
										@csrf
										<button type="submit"
											class="menu-link px-5 fs-3 text-danger bg-transparent border-0">
											<i class="fas fa-sign-out-alt text-danger mr-2"></i> Déconnexion
										</button>
									</form>
								</div>

							@endauth

							@guest
								<!-- Menu options for guests (non-logged-in users) -->
								<div class="menu-item px-5">
									<a href="{{ route('login') }}" class="menu-link px-5">
										<span class="menu-text fs-3">Se connecter</span>
									</a>
								</div>
								<div class="menu-item px-5">
									<a href="{{ route('register') }}" class="menu-link px-5">
										<span class="menu-text fs-3">S'inscrire</span>
									</a>
								</div>
							@endguest

							<!-- Language selection option -->
							<div class="menu-item px-5" data-kt-menu-trigger="hover"
								data-kt-menu-placement="left-start">
								<a href="#" class="menu-link px-5">
									<span class="menu-title position-relative fs-3">Langue
										<span
											class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0 fs-3">
											Français <img class="w-15px h-15px rounded-1 ms-2"
												src="assets/media/flags/france.svg" alt="" />
										</span>
									</span>
								</a>
							</div>

						</div>
						<!--end::Menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::User-->


				</div>
				<!--end::Toolbar wrapper-->
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Container-->
</div>
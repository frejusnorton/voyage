<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		<!--begin::Wrapper-->
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			<!--begin::Header-->
			<div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header"
				data-kt-sticky-offset="{default: '200px', lg: '300px'}">
				<!--begin::Container-->
				<div class="container-xxl d-flex align-items-center">
					<!--begin::Heaeder menu toggle-->
					<div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
						<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
							id="kt_header_menu_mobile_toggle">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path
										d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
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
							<div class="header-menu align-items-stretch" data-kt-drawer="true"
								data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}"
								data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
								data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle"
								data-kt-swapper="true" data-kt-swapper-mode="prepend"
								data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
								<!--begin::Menu-->
								<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
									id="#kt_header_menu" data-kt-menu="true">
									<div class="menu-item me-lg-1">
										<a href="{{ route('home') }}" class="menu-link py-3">
											<span class="menu-title fs-3">Acceuil</span>
										</a>
									</div>
									<div class="menu-item me-lg-1">
										<a href="{{ route('trajet') }}" class="menu-link py-3">
											<span class="menu-title fs-3">Trajet</span>
										</a>
									</div>

									<div class="menu-item me-lg-1">
										<a href="#a-propos" class="menu-link py-3">
											<span class="menu-title fs-3">A propos</span>
										</a>
									</div>

									<div class="menu-item me-lg-1">
										<a href="#contact" class="menu-link py-3 fs-3">
											<span class="menu-title">Contacts</span>
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
								<!--begin::Search-->
								<div class="d-flex align-items-stretch ms-1 ms-lg-3">
									<!--begin::Search-->
									<div id="kt_header_search" class="d-flex align-items-stretch"
										data-kt-search-keypress="true" data-kt-search-min-length="2"
										data-kt-search-enter="enter" data-kt-search-layout="menu"
										data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
										data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

										<!--begin::Menu-->
										<div data-kt-search-element="content"
											class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
											<!--begin::Wrapper-->
											<div data-kt-search-element="wrapper">
												<!--begin::Form-->
												<form data-kt-search-element="form" class="w-100 position-relative mb-3"
													autocomplete="off">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span
														class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
																height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
																fill="black" />
															<path
																d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-flush ps-10"
														name="search" value="" placeholder="Search..."
														data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span
														class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
														data-kt-search-element="spinner">
														<span
															class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span
														class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
														data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16"
																	height="2" rx="1" transform="rotate(-45 6 17.3137)"
																	fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1"
																	transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Reset-->
													<!--begin::Toolbar-->
													<div class="position-absolute top-50 end-0 translate-middle-y"
														data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show"
															class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
															data-bs-toggle="tooltip" title="Show search preferences">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
																		fill="black" />
																	<path
																		d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show"
															class="btn btn-icon w-20px btn-sm btn-active-color-primary"
															data-bs-toggle="tooltip" title="Show more search options">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path
																		d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</form>
												<!--end::Form-->
												<!--begin::Separator-->
												<div class="separator border-gray-200 mb-6"></div>
												<!--end::Separator-->
												<!--begin::Recently viewed-->
												<div data-kt-search-element="results" class="d-none">
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-350px">
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pb-5"
															data-kt-search-element="category-title">Users</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="assets/media/avatars/150-1.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Karina Clark</span>
																<span class="fs-7 fw-bold text-muted">Marketing
																	Manager</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="assets/media/avatars/150-3.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Olivia Bold</span>
																<span class="fs-7 fw-bold text-muted">Software
																	Engineer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="assets/media/avatars/150-8.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Ana Clark</span>
																<span class="fs-7 fw-bold text-muted">UI/UX
																	Designer</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="assets/media/avatars/150-11.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Nick Pitola</span>
																<span class="fs-7 fw-bold text-muted">Art
																	Director</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<img src="assets/media/avatars/150-12.jpg" alt="" />
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Edward Kulnic</span>
																<span class="fs-7 fw-bold text-muted">System
																	Administrator</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
															data-kt-search-element="category-title">Customers</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="assets/media/svg/brand-logos/volicity-9.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Company Rbranding</span>
																<span class="fs-7 fw-bold text-muted">UI Design</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="assets/media/svg/brand-logos/tvit.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Company Re-branding</span>
																<span class="fs-7 fw-bold text-muted">Web
																	Development</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="assets/media/svg/misc/infography.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Business Analytics App</span>
																<span
																	class="fs-7 fw-bold text-muted">Administration</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="assets/media/svg/brand-logos/leaf.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
																<span class="fs-7 fw-bold text-muted">Marketing</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<img class="w-20px h-20px"
																		src="assets/media/svg/brand-logos/tower.svg"
																		alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div
																class="d-flex flex-column justify-content-start fw-bold">
																<span class="fs-6 fw-bold">Tower Group Website</span>
																<span class="fs-7 fw-bold text-muted">Google
																	Adwords</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Category title-->
														<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
															data-kt-search-element="category-title">Projects</h3>
														<!--end::Category title-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
																				fill="black" />
																			<path
																				d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Si-Fi Project by AU
																	Themes</span>
																<span class="fs-7 fw-bold text-muted">#45670</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<rect x="8" y="9" width="3" height="10"
																				rx="1.5" fill="black" />
																			<rect opacity="0.5" x="13" y="5" width="3"
																				height="14" rx="1.5" fill="black" />
																			<rect x="18" y="11" width="3" height="8"
																				rx="1.5" fill="black" />
																			<rect x="3" y="13" width="3" height="6"
																				rx="1.5" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Shopix Mobile App
																	Planning</span>
																<span class="fs-7 fw-bold text-muted">#45690</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																				fill="black" />
																			<rect x="6" y="12" width="7" height="2"
																				rx="1" fill="black" />
																			<rect x="6" y="7" width="12" height="2"
																				rx="1" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Finance Monitoring SAAS
																	Discussion</span>
																<span class="fs-7 fw-bold text-muted">#21090</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="#"
															class="d-flex text-dark text-hover-primary align-items-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-40px me-4">
																<span class="symbol-label bg-light">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																				fill="black" />
																			<path
																				d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																				fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Title-->
															<div class="d-flex flex-column">
																<span class="fs-6 fw-bold">Dashboard Analitics
																	Launch</span>
																<span class="fs-7 fw-bold text-muted">#34560</span>
															</div>
															<!--end::Title-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->

												<!--begin::Empty-->
												<div data-kt-search-element="empty" class="text-center d-none">
													<!--begin::Icon-->
													<div class="pt-10 pb-10">
														<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
														<span class="svg-icon svg-icon-4x opacity-50">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
																height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
																	d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
																	fill="black" />
																<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z"
																	fill="black" />
																<rect x="13.6993" y="13.6656" width="4.42828"
																	height="1.73089" rx="0.865447"
																	transform="rotate(45 13.6993 13.6656)"
																	fill="black" />
																<path
																	d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
																	fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Icon-->
													<!--begin::Message-->
													<div class="pb-15 fw-bold">
														<h3 class="text-gray-600 fs-5 mb-2">Aucun résultat</h3>

													</div>
													<!--end::Message-->
												</div>
												<!--end::Empty-->
											</div>

										</div>
										<!--end::Menu-->
									</div>
									<!--end::Search-->
								</div>
								<!--end::Search-->
								@if (Auth::check())
									<!--begin::Notifications-->

									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu- wrapper-->
										<div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
											data-kt-menu-trigger="click" data-kt-menu-attach="parent"
											data-kt-menu-placement="bottom-end">
											<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<path
														d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
														fill="black" />
													<path
														d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
														fill="black" />
													<path opacity="0.3"
														d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
														fill="black" />
													<path opacity="0.3"
														d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
											data-kt-menu="true">
											<!--begin::Heading-->
											<div class="d-flex flex-column bgi-no-repeat rounded-top"
												style="background-image:url('assets/media/misc/pattern-1.jpg')">
												<!--begin::Title-->
												<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications

												</h3>
												<!--end::Title-->
												<!--begin::Tabs-->
												<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
													<li class="nav-item">
														<a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
															data-bs-toggle="tab"
															href="#kt_topbar_notifications_1">Alerts</a>
													</li>


												</ul>
												<!--end::Tabs-->
											</div>
											<!--end::Heading-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab panel-->
												<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
													<!--begin::Items-->
													<div class="scroll-y mh-325px my-5 px-8">
														<!--begin::Item-->
														<div class="d-flex flex-stack py-4">
															<!--begin::Section-->
															<div class="d-flex align-items-center">
																<!--begin::Symbol-->
																<div class="symbol symbol-35px me-4">
																	<span class="symbol-label bg-light-primary">
																		<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="24" height="24" viewBox="0 0 24 24"
																				fill="none">
																				<path opacity="0.3"
																					d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
																					fill="black" />
																				<path
																					d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
																					fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="mb-0 me-2">
																	<a href="#"
																		class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
																		Alice</a>
																	<div class="text-gray-400 fs-7">Phase 1 development
																	</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Section-->
															<!--begin::Label-->
															<span class="badge badge-light fs-8">1 hr</span>
															<!--end::Label-->
														</div>
														<!--end::Item-->



													</div>
													<!--end::Items-->

												</div>
												<!--end::Tab panel-->


											</div>
											<!--end::Tab content-->
										</div>
										<!--end::Menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::Notifications-->
								@endif

								@if (Auth::check())
									<!--begin::Chat-->
									<div class="d-flex align-items-center ms-1 ms-lg-3">
										<!--begin::Menu wrapper-->
										<div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px"
											id="kt_drawer_chat_toggle">
											<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
											<span class="svg-icon svg-icon-1 fs-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
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
								<div class="d-flex align-items-center me-n3 ms-1 ms-lg-3"
									id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
										data-kt-menu-trigger="click" data-kt-menu-attach="parent"
										data-kt-menu-placement="bottom-end">
										@auth
											<div class="symbol symbol-30px">
												<img alt="Avatar"
													src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : asset('assets/media/avatars/blank.png') }}" />
											</div>
										@endauth
										@guest
											<div class="symbol symbol-30px">
												<img alt="Avatar" src="{{ asset('assets/media/avatars/blank.png') }}" />
											</div>
										@endguest
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
										data-kt-menu="true">

										@auth
											<!--begin::Menu item (User info)-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Avatar"
															src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : asset('assets/media/avatars/blank.png') }}" />
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
											<div class="menu-item px-5 my-1 d-flex justify-between">
												<a href="#" class="menu-link px-5 fs-3">Mes trajets</a>
											</div>
											<div class="menu-item px-5 my-1 d-flex justify-between">
												<a href="{{ route('user.index', ['user' => Auth::user()->id]) }}"
													class="menu-link px-5 fs-3">Paramètres de compte</a>
											</div>

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
			<!--end::Header-->
			<!--begin::Toolbar-->
			<div class="toolbar py-5 py-lg-15" id="kt_toolbar">

				@yield('tolbar')

			</div>
			<!--end::Toolbar-->
			<!--begin::Container-->
			<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
				<!--begin::Post-->
				<div class="content flex-row-fluid" id="kt_content">
					@yield('content')
				</div>
				<!--end::Post-->
			</div>
			<!--end::Container-->

		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->

<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
	<!--begin::Messenger-->
	<div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
		<!--begin::Card header-->
		<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
			<!--begin::Title-->
			<div class="card-title">
				<!--begin::User-->
				<div class="d-flex justify-content-center flex-column me-3">
					<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
					<!--begin::Info-->
					<div class="mb-0 lh-1">
						<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
						<span class="fs-7 fw-bold text-muted">Active</span>
					</div>
					<!--end::Info-->
				</div>
				<!--end::User-->
			</div>
			<!--end::Title-->
			<!--begin::Card toolbar-->
			<div class="card-toolbar">
				<!--begin::Menu-->
				<div class="me-2">
					<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
						data-kt-menu-placement="bottom-end">
						<i class="bi bi-three-dots fs-3"></i>
					</button>
					<!--begin::Menu 3-->
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
						data-kt-menu="true">
						<!--begin::Heading-->
						<div class="menu-item px-3">
							<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
						</div>
						<!--end::Heading-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link px-3" data-bs-toggle="modal"
								data-bs-target="#kt_modal_users_search">Add Contact</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
								data-bs-target="#kt_modal_invite_friends">Invite Contacts
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
									title="Specify a contact email to send an invitation"></i></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
							<a href="#" class="menu-link px-3">
								<span class="menu-title">Groups</span>
								<span class="menu-arrow"></span>
							</a>
							<!--begin::Menu sub-->
							<div class="menu-sub menu-sub-dropdown w-175px py-4">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
										title="Coming soon">Create Group</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
										title="Coming soon">Invite Members</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
										title="Coming soon">Settings</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu sub-->
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3 my-1">
							<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu 3-->
				</div>
				<!--end::Menu-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Card toolbar-->
		</div>
		<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body" id="kt_drawer_chat_messenger_body">
			<!--begin::Messages-->
			<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
				data-kt-scroll-activate="true" data-kt-scroll-height="auto"
				data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
				data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">2 mins</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
							data-kt-element="message-text">How likely are you to recommend our company to your friends
							and family ?</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">5 mins</span>
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
							data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve
							been subscribed to a repository on GitHub.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">1 Hour</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
							data-kt-element="message-text">Ok, Understood!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">2 Hours</span>
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
							data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!
						</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">3 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
							data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
							<a href="https://keenthemes.com">Keenthemes.com</a>
						</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(out)-->
				<div class="d-flex justify-content-end mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">4 Hours</span>
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
							data-kt-element="message-text">Most purchased Business courses during this sale!</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(out)-->
				<!--begin::Message(in)-->
				<div class="d-flex justify-content-start mb-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">5 Hours</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
							data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and
							goals. Food and drinks provided</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(in)-->
				<!--begin::Message(template for out)-->
				<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-end">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Details-->
							<div class="me-3">
								<span class="text-muted fs-7 mb-1">Just now</span>
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
							</div>
							<!--end::Details-->
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
							</div>
							<!--end::Avatar-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
							data-kt-element="message-text"></div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for out)-->
				<!--begin::Message(template for in)-->
				<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column align-items-start">
						<!--begin::User-->
						<div class="d-flex align-items-center mb-2">
							<!--begin::Avatar-->
							<div class="symbol symbol-35px symbol-circle">
								<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Details-->
							<div class="ms-3">
								<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
								<span class="text-muted fs-7 mb-1">Just now</span>
							</div>
							<!--end::Details-->
						</div>
						<!--end::User-->
						<!--begin::Text-->
						<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
							data-kt-element="message-text">Right before vacation season we have the next Big Deal for
							you.</div>
						<!--end::Text-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Message(template for in)-->
			</div>
			<!--end::Messages-->
		</div>
		<!--end::Card body-->
		<!--begin::Card footer-->
		<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
			<!--begin::Input-->
			<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
				placeholder="Type a message"></textarea>
			<!--end::Input-->
			<!--begin:Toolbar-->
			<div class="d-flex flex-stack">
				<!--begin::Actions-->
				<div class="d-flex align-items-center me-2">
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
						data-bs-toggle="tooltip" title="Coming soon">
						<i class="bi bi-paperclip fs-3"></i>
					</button>
					<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
						data-bs-toggle="tooltip" title="Coming soon">
						<i class="bi bi-upload fs-3"></i>
					</button>
				</div>
				<!--end::Actions-->
				<!--begin::Send-->
				<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
				<!--end::Send-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Card footer-->
	</div>
	<!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Modals-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-bold fs-5">If you need more info, please check out
						<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
					</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bolder w-100 mb-8">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite
					Gmail Contacts
				</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3"
					placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-bold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
										Smith</a>
									<div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
										Macy</a>
									<div class="fw-bold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
										Smith</a>
									<div class="fw-bold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-4.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
										Bean</a>
									<div class="fw-bold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
										Cox</a>
									<div class="fw-bold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
										Collins</a>
									<div class="fw-bold text-muted">mikaela@pexcom.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-8.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
										Mitcham</a>
									<div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
										Wild</a>
									<div class="fw-bold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
										Owen</a>
									<div class="fw-bold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
										Wilson</a>
									<div class="fw-bold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
										Bold</a>
									<div class="fw-bold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-7.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
										Crown</a>
									<div class="fw-bold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-bold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
										Doe</a>
									<div class="fw-bold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-17.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
										Miller</a>
									<div class="fw-bold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-bold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
										Kunic</a>
									<div class="fw-bold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-10.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
										Wilder</a>
									<div class="fw-bold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/150-26.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
										Smith</a>
									<div class="fw-bold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2"
									data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-bold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-bold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-900px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header">
				<!--begin::Modal title-->
				<h2>Create App</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body py-lg-10 px-lg-10">
				<!--begin::Stepper-->
				<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
					id="kt_modal_create_app_stepper">
					<!--begin::Aside-->
					<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
						<!--begin::Nav-->
						<div class="stepper-nav ps-lg-10">
							<!--begin::Step 1-->
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">1</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Details</h3>
									<div class="stepper-desc">Name your App</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">2</span>
								</div>
								<!--begin::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Frameworks</h3>
									<div class="stepper-desc">Define your app framework</div>
								</div>
								<!--begin::Label-->
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">3</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Database</h3>
									<div class="stepper-desc">Select the app database type</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">4</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Billing</h3>
									<div class="stepper-desc">Provide payment details</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div class="stepper-item" data-kt-stepper-element="nav">
								<!--begin::Line-->
								<div class="stepper-line w-40px"></div>
								<!--end::Line-->
								<!--begin::Icon-->
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">5</span>
								</div>
								<!--end::Icon-->
								<!--begin::Label-->
								<div class="stepper-label">
									<h3 class="stepper-title">Completed</h3>
									<div class="stepper-desc">Review and Submit</div>
								</div>
								<!--end::Label-->
							</div>
							<!--end::Step 5-->
						</div>
						<!--end::Nav-->
					</div>
					<!--begin::Aside-->
					<!--begin::Content-->
					<div class="flex-row-fluid py-lg-5 px-lg-15">
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-2">
											<span class="required">App Name</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Specify your unique app name"></i>
										</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid"
											name="name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-4">
											<span class="required">Category</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Select your app category"></i>
										</label>
										<!--end::Label-->
										<!--begin:Options-->
										<div class="fv-row">
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
																		fill="black" />
																	<path
																		d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Quick Online Courses</span>
														<span class="fs-7 text-muted">Creating a clear text structure is
															just one SEO</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category"
														value="1" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack mb-5 cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24px"
																	height="24px" viewBox="0 0 24 24">
																	<g stroke="none" stroke-width="1" fill="none"
																		fill-rule="evenodd">
																		<rect x="5" y="5" width="5" height="5" rx="1"
																			fill="#000000" />
																		<rect x="14" y="5" width="5" height="5" rx="1"
																			fill="#000000" opacity="0.3" />
																		<rect x="5" y="14" width="5" height="5" rx="1"
																			fill="#000000" opacity="0.3" />
																		<rect x="14" y="14" width="5" height="5" rx="1"
																			fill="#000000" opacity="0.3" />
																	</g>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Face to Face Discussions</span>
														<span class="fs-7 text-muted">Creating a clear text structure is
															just one aspect</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category"
														value="2" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3"
																		d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
																		fill="black" />
																	<path
																		d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Full Intro Training</span>
														<span class="fs-7 text-muted">Creating a clear text structure
															copywriting</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="category"
														value="3" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end:Options-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 1-->
							<!--begin::Step 2-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-4">
											<span class="required">Select Framework</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Specify your apps framework"></i>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="fab fa-html5 text-warning fs-2x"></i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">HTML5</span>
													<span class="fs-7 text-muted">Base Web Projec</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" checked="checked"
													name="framework" value="1" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="fab fa-react text-success fs-2x"></i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">ReactJS</span>
													<span class="fs-7 text-muted">Robust and flexible app
														framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework"
													value="2" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="fab fa-angular text-danger fs-2x"></i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">Angular</span>
													<span class="fs-7 text-muted">Powerful data mangement</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework"
													value="3" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin:Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin:Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-primary">
														<i class="fab fa-vuejs text-primary fs-2x"></i>
													</span>
												</span>
												<!--end:Icon-->
												<!--begin:Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">Vue</span>
													<span class="fs-7 text-muted">Lightweight and responsive
														framework</span>
												</span>
												<!--end:Info-->
											</span>
											<!--end:Label-->
											<!--begin:Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="framework"
													value="4" />
											</span>
											<!--end:Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 2-->
							<!--begin::Step 3-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2">Database Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid"
											name="dbname" placeholder="" value="master_db" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-4">
											<span class="required">Select Database Engine</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Select your app database engine"></i>
										</label>
										<!--end::Label-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-success">
														<i class="fas fa-database text-success fs-2x"></i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">MySQL</span>
													<span class="fs-7 text-muted">Basic MySQL database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine"
													checked="checked" value="1" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer mb-5">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-danger">
														<i class="fab fa-google text-danger fs-2x"></i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">Firebase</span>
													<span class="fs-7 text-muted">Google based app data
														management</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine"
													value="2" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
										<!--begin:Option-->
										<label class="d-flex flex-stack cursor-pointer">
											<!--begin::Label-->
											<span class="d-flex align-items-center me-2">
												<!--begin::Icon-->
												<span class="symbol symbol-50px me-6">
													<span class="symbol-label bg-light-warning">
														<i class="fab fa-amazon text-warning fs-2x"></i>
													</span>
												</span>
												<!--end::Icon-->
												<!--begin::Info-->
												<span class="d-flex flex-column">
													<span class="fw-bolder fs-6">DynamoDB</span>
													<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
												</span>
												<!--end::Info-->
											</span>
											<!--end::Label-->
											<!--begin::Input-->
											<span class="form-check form-check-custom form-check-solid">
												<input class="form-check-input" type="radio" name="dbengine"
													value="3" />
											</span>
											<!--end::Input-->
										</label>
										<!--end::Option-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 3-->
							<!--begin::Step 4-->
							<div data-kt-stepper-element="content">
								<div class="w-100">
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
											<span class="required">Name On Card</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Specify a card holder's name"></i>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder=""
											name="card_name" value="Max Doe" />
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-column mb-7 fv-row">
										<!--begin::Label-->
										<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
										<!--end::Label-->
										<!--begin::Input wrapper-->
										<div class="position-relative">
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter card number" name="card_number"
												value="4111 1111 1111 1111" />
											<!--end::Input-->
											<!--begin::Card logos-->
											<div class="position-absolute translate-middle-y top-50 end-0 me-5">
												<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
												<img src="assets/media/svg/card-logos/mastercard.svg" alt=""
													class="h-25px" />
												<img src="assets/media/svg/card-logos/american-express.svg" alt=""
													class="h-25px" />
											</div>
											<!--end::Card logos-->
										</div>
										<!--end::Input wrapper-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-10">
										<!--begin::Col-->
										<div class="col-md-8 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row fv-row">
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_month"
														class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Month">
														<option></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="card_expiry_year"
														class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Year">
														<option></option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option>
														<option value="2027">2027</option>
														<option value="2028">2028</option>
														<option value="2029">2029</option>
														<option value="2030">2030</option>
														<option value="2031">2031</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-4 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">CVV</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Enter a card CVV code"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" minlength="3"
													maxlength="4" placeholder="CVV" name="card_cvv" />
												<!--end::Input-->
												<!--begin::CVV icon-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-3">
													<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
													<span class="svg-icon svg-icon-2hx">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path d="M22 7H2V11H22V7Z" fill="black" />
															<path opacity="0.3"
																d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::CVV icon-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="d-flex flex-stack">
										<!--begin::Label-->
										<div class="me-5">
											<label class="fs-6 fw-bold form-label">Save Card for further
												billing?</label>
											<div class="fs-7 fw-bold text-muted">If you need more info, please check
												budget planning</div>
										</div>
										<!--end::Label-->
										<!--begin::Switch-->
										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1"
												checked="checked" />
											<span class="form-check-label fw-bold text-muted">Save Card</span>
										</label>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->
								</div>
							</div>
							<!--end::Step 4-->
							<!--begin::Step 5-->
							<div data-kt-stepper-element="content">
								<div class="w-100 text-center">
									<!--begin::Heading-->
									<h1 class="fw-bolder text-dark mb-3">Release!</h1>
									<!--end::Heading-->
									<!--begin::Description-->
									<div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.
									</div>
									<!--end::Description-->
									<!--begin::Illustration-->
									<div class="text-center px-4 py-15">
										<img src="assets/media/illustrations/sigma-1/9.png" alt=""
											class="w-100 mh-300px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3"
										data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
										<span class="svg-icon svg-icon-3 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
													fill="black" />
												<path
													d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary"
										data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
														transform="rotate(-180 18 13)" fill="black" />
													<path
														d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon--></span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary"
										data-kt-stepper-action="next">Continue
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-3 ms-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
													transform="rotate(-180 18 13)" fill="black" />
												<path
													d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
													fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon--></button>
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Stepper-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-xl">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header justify-content-end border-0 pb-0">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="black" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="black" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--end::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<!--begin::Heading-->
				<div class="mb-13 text-center">
					<h1 class="mb-3">Upgrade a Plan</h1>
					<div class="text-muted fw-bold fs-5">If you need more info, please check
						<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
					</div>
				</div>
				<!--end::Heading-->
				<!--begin::Plans-->
				<div class="d-flex flex-column">
					<!--begin::Nav group-->
					<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
						<a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
							data-kt-plan="month">Monthly</a>
						<a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
							data-kt-plan="annual">Annual</a>
					</div>
					<!--end::Nav group-->
					<!--begin::Row-->
					<div class="row mt-10">
						<!--begin::Col-->
						<div class="col-lg-6 mb-10 mb-lg-0">
							<!--begin::Tabs-->
							<div class="nav flex-column">
								<!--begin::Tab link-->
								<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
									data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div
											class="form-check form-check-custom form-check-solid form-check-success me-6">
											<input class="form-check-input" type="radio" name="plan" checked="checked"
												value="startup" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
											<div class="fw-bold opacity-50">Best for startups</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
											data-kt-plan-price-annual="399">39</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</div>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
									data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div
											class="form-check form-check-custom form-check-solid form-check-success me-6">
											<input class="form-check-input" type="radio" name="plan" value="advanced" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
											<div class="fw-bold opacity-50">Best for 100+ team size</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
											data-kt-plan-price-annual="3399">339</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</div>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
									data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div
											class="form-check form-check-custom form-check-solid form-check-success me-6">
											<input class="form-check-input" type="radio" name="plan"
												value="enterprise" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
												<span class="badge badge-light-success ms-2 fs-7">Most popular</span>
											</h2>
											<div class="fw-bold opacity-50">Best value for 1000+ team</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<span class="mb-2">$</span>
										<span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
											data-kt-plan-price-annual="9999">999</span>
										<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
									</div>
									<!--end::Price-->
								</div>
								<!--end::Tab link-->
								<!--begin::Tab link-->
								<div
									class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
									<!--end::Description-->
									<div class="d-flex align-items-center me-2">
										<!--begin::Radio-->
										<div
											class="form-check form-check-custom form-check-solid form-check-success me-6">
											<input class="form-check-input" type="radio" name="plan" value="custom" />
										</div>
										<!--end::Radio-->
										<!--begin::Info-->
										<div class="flex-grow-1">
											<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
											<div class="fw-bold opacity-50">Requet a custom license</div>
										</div>
										<!--end::Info-->
									</div>
									<!--end::Description-->
									<!--begin::Price-->
									<div class="ms-5">
										<a href="#" class="btn btn-sm btn-primary">Contact Us</a>
									</div>
									<!--end::Price-->
								</div>
								<!--end::Tab link-->
							</div>
							<!--end::Tabs-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6">
							<!--begin::Tab content-->
							<div class="tab-content rounded h-100 bg-light p-10">
								<!--begin::Tab Pane-->
								<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-bold">Optimal for 10+ team size and new startup</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
												Users</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
												Integrations</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Accounting Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
												Space</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-bold">Optimal for 100+ team size and grown company
										</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
												Users</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
												Integrations</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
												Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
												Space</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<rect x="7" y="15.3137" width="12" height="2" rx="1"
														transform="rotate(-45 7 15.3137)" fill="black" />
													<rect x="8.41422" y="7" width="12" height="2" rx="1"
														transform="rotate(45 8.41422 7)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
								<!--begin::Tab Pane-->
								<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
									<!--begin::Heading-->
									<div class="pb-5">
										<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
										<div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
									</div>
									<!--end::Heading-->
									<!--begin::Body-->
									<div class="pt-1">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
												Users</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project
												Integrations</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
												Module</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-7">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
												Space</span>
											<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
											<span class="svg-icon svg-icon-1 svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
														fill="black" />
													<path
														d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
														fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tab Pane-->
							</div>
							<!--end::Tab content-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Plans-->
				<!--begin::Actions-->
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Upgrade Plan</button>
				</div>
				<!--end::Actions-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--end::Modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
	<span class="svg-icon">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
			<path
				d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
				fill="black" />
		</svg>
	</span>
	<!--end::Svg Icon-->
</div>
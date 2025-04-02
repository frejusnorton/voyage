@extends('main.index')
@section('title', 'Mes publications')
@section('content')
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img alt="Photo de profil"
                                src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" />
                            <div
                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                            </div>
                        </div>
                    </div>
                    <!--end::Pic-->

                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$user->nom}}
                                        {{$user->prenom}}</a>
                                    <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                </div>
                                <!--end::Name-->

                            </div>
                            <!--end::User-->

                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <div class="me-0">
                                    <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-solid ki-dots-horizontal fs-2x"></i> </button>

                                    <!--begin::Menu 3-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                        data-kt-menu="true">
                                        <!--begin::Heading-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span class="ms-2" data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->

                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->

                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <!--begin::Switch-->
                                                        <label
                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input w-30px h-20px" type="checkbox"
                                                                value="1" checked="checked" name="notifications">
                                                            <!--end::Input-->

                                                            <!--end::Label-->
                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                            <!--end::Label-->
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 3-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->

                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                                data-kt-initialized="1">{{$nbresTrajet}}</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Trajet publié</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                data-kt-initialized="1">%60</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                    <span class="fw-bold fs-6">50%</span>
                                </div>

                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="{{ route('conducteur.espace') }}">
                            Parametre</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active "
                            href="{{ route('trajet.conducteur') }}">
                            Mes publications </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="/metronic8/demo2/account/security.html">
                            Security </a>
                    </li>
                    <!--end::Nav item-->
                  
                    <!--end::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="{{ route('conducteur.reservation') }}">
                            Demande de réservation </a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Mes publications</h3>
                </div>

            </div>
            <!--begin::Card header-->

            <!--begin::Card body-->
            <div class="card-body border-top px-9 py-9">
                @foreach ($trajets as $trajet)
                        <div class="card card-xl-stretch">
                            <!-- Header -->
                            <div class="card-header align-items-center border-0 mt-4 d-flex justify-content-between">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bold mb-2 text-gray-900">
                                        {{ $trajet->villeDepart->nom }} →
                                        {{ $trajet->villeArrive->nom }}
                                    </span>
                                    <span class="text-muted fw-semibold fs-7">
                                        {{ $trajet->nombre_personnes }} places disponibles
                                    </span>
                                </h3>
                                <span class="badge bg-primary fs-6 py-2 px-3">
                                    {{ number_format($trajet->prix, 0, ',', ' ') }} FCFA
                                </span>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body pt-5">
                                <div class="timeline-label">
                                    <!-- Départ -->
                                    <div class="timeline-item d-flex align-items-center">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Départ</div>
                                        <div class="timeline-badge mx-4">
                                            <i class="fa fa-map-marker-alt text-warning fs-4"></i>
                                        </div>
                                        <div class="fw-mormal timeline-content text-muted ">
                                            {{ $trajet->villeDepart->nom }}
                                        </div>
                                    </div>

                                    <!-- Arrivée -->
                                    <div class="timeline-item d-flex align-items-center">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Arrivée</div>
                                        <div class="timeline-badge mx-4">
                                            <i class="fa fa-map-marker-alt text-success fs-4"></i>
                                        </div>
                                        <div class="fw-mormal timeline-content text-muted ">
                                            {{ $trajet->villeArrive->nom }}
                                        </div>
                                    </div>

                                    <!-- Date de départ -->
                                    <div class="timeline-item d-flex align-items-center ">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Date </div>
                                        <div class="timeline-badge mx-4">
                                            <i class="fa fa-calendar-alt text-primary fs-4"></i>
                                        </div>
                                        <div class="timeline-content text-muted ">
                                            {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}
                                        </div>
                                    </div>

                                    <!-- Heure de départ -->
                                    <div class="timeline-item d-flex align-items-center">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Heure</div>
                                        <div class="timeline-badge mx-4">
                                            <i class="fa fa-clock text-primary fs-4"></i>
                                        </div>
                                        <div class="timeline-content text-muted">
                                            {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                                        </div>
                                    </div>



                                    <!-- Statut -->
                                    <div class="timeline-item d-flex align-items-center">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                                        <div class="timeline-badge mx-4">
                                            <i class="fa fa-info-circle text-primary fs-4"></i>
                                        </div>
                                        <div class="timeline-content fw-bold text-gray-800 ">
                                            <span class="badge badge-light-{{
                    $trajet->statut == 'disponible' ? 'success' :
                    ($trajet->statut == 'complet' || $trajet->statut == 'annule' ? 'danger' : 'warning')
                                                                }}">
                                                {{ ucfirst($trajet->statut == 'annule' ? 'annulé' : $trajet->statut) }}
                                            </span>
                                        </div>

                                    </div>

                                    <!-- Description -->
                                    @if (!empty($trajet->description))
                                        <div class="timeline-item d-flex align-items-center">
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">Description</div>
                                            <div class="timeline-badge mx-4">
                                                <i class="fa fa-file-alt text-info fs-4"></i>
                                            </div>
                                            <div class="timeline-content fw-mormal text-muted ">
                                                {{ $trajet->description }}
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Boutons Modifier & Supprimer -->
                                    <div class="d-flex justify-content-end mt-4 ">

                                        <button id="trajet_edit" type="button" class="btn  btn-sm  btn-light-warning me-3"
                                            data-bs-toggle="modal" data-bs-target="#edit_trajet"
                                            data-ville_depart="{{$trajet->villeDepart->nom}}"
                                            data-ville_arrive="{{$trajet->villeArrive->nom}}"
                                            data-description="{{ $trajet->description}}" data-prix="{{ $trajet->prix}}"
                                            data-date-depart="{{ \Carbon\Carbon::parse($trajet->heure_depart)->format('Y-m-d') }}"
                                            data-heure-depart="  {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}"
                                            data-statut="{{$trajet->statut }}">
                                            <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> Modifier
                                        </button>

                                        <button type="button" class="btn btn-sm btn-light-danger me-3" data-bs-toggle="modal"
                                            data-bs-target="#">
                                            <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> Supprimer
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Body -->
                        </div>
                @endforeach

                <div class="mt-6">
                    {{ $trajets->links('pagination.custom') }}
                </div>


            </div>

        </div>

    </div>

@endsection

@section('scripts')
    @include('conducteur.js')
@endsection
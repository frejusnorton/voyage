@extends('main.index')
@section('title', 'Paramètre de compte')
@section('content')
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">

                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img class="h-60px w-60px rounded"
                                src="{{ $user->profil_img ? asset($user->profil_img) : asset('assets/media/avatars/blank.png') }}"
                                alt="Photo de profil" />
                            <span class="position-absolute top-0 end-0 translate-middle p-2 
                         {{ $user->is_online ? 'bg-success' : 'bg-danger' }} 
                         border border-white rounded-circle">
                            </span>
                        </div>
                    </div>

                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$user->nom}}
                                        {{$user->prenom}} </span>
                                    <span><i class="ki-duotone ki-verify fs-1 text-primary"><span class="path1"></span><span
                                                class="path2"></span></i></span>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4">

                                    <span class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span
                                                class="path2"></span></i> {{$user->address}}
                                    </span>
                                    <span class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                        <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span
                                                class="path2"></span></i> {{$user->email}}
                                    </span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <a href="{{ route('profil.contact', ['user' => $user->id]) }}"
                                    class="btn btn-sm btn-primary me-3">
                                    Contacter {{ $user->nom }}
                                </a>
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
                                                data-kt-initialized="1">{{$nombreTrajetsPublies}}</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Publications</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                    <!--begin::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Rating-->
                                        <div class="d-flex align-items-center">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $noteMoyenne)
                                                    <i class="fa fa-star text-warning fs-3"></i>
                                                @elseif ($i - 0.5 == $noteMoyenne)
                                                    <i class="fa fa-star-half-alt text-warning fs-3"></i>
                                                @else
                                                    <i class="fa fa-star text-gray-300 fs-3"></i>
                                                @endif
                                            @endfor
                                            <span class="fs-2 fw-bold ms-2">{{ $noteMoyenne }}/5</span>
                                        </div>

                                        <!--end::Rating-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Note des clients</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

            </div>
        </div>
        <!--end::Navbar-->
        {{-- Listes des trajets --}}
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_travel_preferences" aria-expanded="true"
                aria-controls="kt_account_travel_preferences">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Listes des trajets publié</h3>
                </div>
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_travel_preferences" class="collapse show">
                <!--begin::Form-->
                <form class="form">
                    <!--begin::Card body-->
                    <div class="card-body border-top px-9 py-9">
                        @foreach($trajets as $trajet)
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
                                    <span
                                        class="badge bg-primary fs-6 py-2 px-3">{{ number_format($trajet->prix, 0, ',', ' ') }}
                                        FCFA</span>
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
                                            <div class="fw-mormal timeline-content text-muted ps-3">
                                                {{ $trajet->villeDepart->nom }} -
                                                {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('d/m/Y H:i') }}
                                            </div>
                                        </div>

                                        <!-- Arrivée -->
                                        <div class="timeline-item d-flex align-items-center">
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">Arrivée</div>
                                            <div class="timeline-badge mx-4">
                                                <i class="fa fa-map-marker-alt text-success fs-4"></i>
                                            </div>
                                            <div class="fw-mormal timeline-content text-muted ps-3">
                                                {{ $trajet->villeArrive->nom }}
                                            </div>
                                        </div>

                                        <!-- Statut -->
                                        <div class="timeline-item d-flex align-items-center">
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                                            <div class="timeline-badge mx-4">
                                                <i class="fa fa-info-circle text-primary fs-4"></i>
                                            </div>
                                            <div class="timeline-content fw-bold text-gray-800 ps-3">
                                                <span
                                                    class="badge badge-light-{{ $trajet->statut == 'disponible' ? 'success' : ($trajet->statut == 'complet' ? 'danger' : 'warning') }}">
                                                    {{ ucfirst($trajet->statut) }}
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Publié par -->
                                        <div class="timeline-item d-flex align-items-center">
                                            <div class="timeline-label fw-bold text-gray-800 fs-6">Publié par</div>
                                            <div class="timeline-badge mx-4">
                                                <i class="fa fa-user text-success fs-4"></i>
                                            </div>
                                            <div class="timeline-content fw-mormal text-muted ps-3">
                                                <a href="{{ route('profil.show', ['user' => $trajet->user->id]) }}">
                                                    {{ $trajet->user->nom }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Body -->
                            </div>
                        @endforeach
                        <div class="mt-6 ">
                            {{$trajets->links('pagination.custom') }}
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--end::Form-->

            </div>
            <!--end::Content-->
        </div>


    </div>
@endsection
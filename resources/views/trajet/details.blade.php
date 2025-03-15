@extends('main.index')

@section('title', 'Détails de voyage')
@section('content')
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
            <span class="badge bg-primary fs-6 py-2 px-3">{{ number_format($trajet->prix, 0, ',', ' ') }}
                FCFA</span>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="card-body pt-5">
            <div class="timeline-label">
                <!-- Lieu de départ -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Départ</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-map-marker-alt text-warning fs-4"></i>
                    </div>
                    <div class="timeline-content text-muted ps-10">
                        {{ $trajet->villeDepart->nom }}
                    </div>
                </div>

                <!-- Lieu d'arrivée -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Arrivée</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-map-marker-alt text-success fs-4"></i>
                    </div>
                    <div class="timeline-content text-muted ps-10">
                        {{ $trajet->villeArrive->nom }}
                    </div>
                </div>

                <!-- Date de départ -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Date </div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-calendar-alt text-primary fs-4"></i>
                    </div>
                    <div class="timeline-content text-muted ps-10">
                        {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}
                    </div>
                </div>

                <!-- Heure de départ -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Heure</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-clock text-primary fs-4"></i>
                    </div>
                    <div class="timeline-content text-muted ps-10">
                        {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                    </div>
                </div>

                <!-- Statut -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-info-circle text-primary fs-4"></i>
                    </div>
                    <div class="timeline-content fw-bold text-gray-800 ps-10">
                        <span
                            class="badge badge-light-{{ $trajet->statut == 'disponible' ? 'success' : ($trajet->statut == 'complet' ? 'danger' : 'warning') }}">
                            {{ ucfirst($trajet->statut) }}
                        </span>
                    </div>
                </div>

                <!-- Publié par -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Auteur</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-user text-success fs-4"></i>
                    </div>
                    <div class="timeline-content fw-mormal text-muted ps-10 fs-4">
                        <a href="{{ route('profil.show', ['user' => $trajet->user->id]) }}">
                            {{ $trajet->user->nom }} {{ $trajet->user->prenom }}
                        </a>
                    </div>
                </div>

                <!-- Description avec icône -->
                <div class="timeline-item d-flex align-items-center mb-3">
                    <div class="timeline-label fw-bold text-gray-800 fs-6">Description</div>
                    <div class="timeline-badge mx-4">
                        <i class="fa fa-info-circle text-info fs-4"></i>
                    </div>
                    <div class="timeline-content text-muted ps-10">
                        {{ $trajet->description ? $trajet->description : 'Non renseigné' }}
                    </div>
                </div>


            </div>
        </div>
        <!-- End Body -->
    </div>

    {{--
    INFORMATIONS SUR LE CONDUCTEUR --}}

    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Détails sur le conducteur</h3>
            </div>

        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted fs-4">Nom & Prénoms </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$conducteur->nom}} {{$conducteur->prenom}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted fs-4">E-mail</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-semibold text-gray-800 fs-6">{{$conducteur->email}} </span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted fs-4">
                    Numéro de téléphone

                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                        data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                        <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i> </span>
                </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{$conducteur->telephone}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted fs-4">Nombres de trajets effectués</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$nombreTrajets }}</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!-- Réservation -->
            @if($trajet->statut == 'disponible')
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('reservation', ['trajet' => $trajet->id]) }}" class="btn btn-primary btn-sm">
                        Réserver ce trajet
                    </a>
                </div>
            @else
                <div class="d-flex  mb-3">
                    <div class="text-danger ">
                        <strong>Ce trajet n'est plus disponible</strong>
                    </div>
                </div>
            @endif
            <div class="d-flex my-4 mt-10">
                <a href="{{ route('profil.contact', ['user' => $conducteur]) }}" class="btn btn-sm btn-primary me-3">
                    Contacter {{ $conducteur->nom }} {{ $conducteur->prenom }}
                </a>
            </div>
        </div>
        <!--end::Card body-->
    </div>

@endsection
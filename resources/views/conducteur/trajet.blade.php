@extends('main.index')
@section('title', 'Listes des trajets')
@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        {{-- Listes des trajets --}}
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_travel_preferences" aria-expanded="true"
                aria-controls="kt_account_travel_preferences">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Mes trajets</h3>
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
                                                    {{ $trajet->user->nom }}    {{ $trajet->user->prenom }}
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
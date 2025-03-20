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

                                                        <button type="button" class="btn btn-sm btn-light-danger me-3"
                                                            data-bs-toggle="modal" data-bs-target="#">
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
    </div>
    @include('conducteur.edit')
@endsection

@section('scripts')
    @include('conducteur.js')
@endsection
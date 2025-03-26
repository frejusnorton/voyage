<div class="row gy-5 g-xl-8">
    @if($trajets->isEmpty())
        <div class="col-12 text-center">
            <p class="text-muted fs-5">Aucun trajet disponible pour le moment.</p>
        </div>
    @else


        @foreach ($trajets as $trajet)
            <div class="col-xl-4">
                <a href="{{ route('trajet.details', ['trajet' => $trajet->id]) }}" class="text-decoration-none">
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
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">Date</div>
                                    <div class="timeline-badge mx-4">
                                        <i class="fa fa-calendar-alt text-primary fs-4"></i>
                                    </div>
                                    <div class="timeline-content text-muted ps-10">
                                        {{ \Carbon\Carbon::parse($trajet->date_depart)->translatedFormat('l d F Y') }}
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
                                        <span class="badge badge-light-{{ 
                                                    $trajet->statut == 'disponible' ? 'success' :
                    ($trajet->statut == 'complet' ? 'danger' :
                        ($trajet->statut == 'annulé' ? 'danger' : 'danger')) }}">
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

                                <!-- Réservation -->
                                @if($trajet->statut == 'disponible')
                                <div class="timeline-item d-flex align-items-center mb-3">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">Réserver</div>
                                    <div class="timeline-content ps-10">
                                        <span id="reservation" 
                                            class="btn btn-primary btn-sm @if(!$trajet->isReservable()) disabled @endif"
                                            data-url="{{ route( 'reservation', ['trajet' => $trajet->id]) }}"
                                            data-trajet-id="{{ $trajet->id }}" 
                                            data-user-id="{{ auth()->id() }}">
                                            Réserver ce trajet
                                        </span>
                                    </div>
                                </div>
                                @else
                                    <div class="timeline-item d-flex align-items-center mb-3">
                                        <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                                        <div class="timeline-content ps-10 text-danger">
                                            <strong>Ce trajet n'est plus disponible</strong>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- End Body -->
                    </div>
                </a>
            </div>
        @endforeach
    @endif

    <div class="mt-6 ">
        {{ $trajets->links('pagination.custom') }}
    </div>
</div>
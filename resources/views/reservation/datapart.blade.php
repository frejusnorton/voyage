@if ($reservations->isEmpty())
<div class="mt-10 fs-3 text-center">
    Aucune réservation disponible.
</div>
@else
@foreach ($reservations as $reservation)
    <div class="col-xl-4 mb-4">
        <div class="card card-xl-stretch">
            <!-- Header -->
            <div class="card-header d-flex justify-content-between align-items-center border-0 mt-4">
                <h3 class="card-title">
                    <span class="fw-bold mb-2 text-gray-900">
                        {{ $reservation->trajet->villeDepart->nom }} → {{ $reservation->trajet->villeArrive->nom }}
                    </span>
                </h3>
                <span class="badge bg-primary fs-6 py-2 px-3">
                    {{ number_format($reservation->trajet->prix, 0, ',', ' ') }} FCFA
                </span>
            </div>

            <!-- Body -->
            <div class="card-body pt-5">
                <div class="timeline-label">
                    <!-- Date & Heure -->
                    <div class="timeline-item d-flex align-items-center mb-4">
                        <div class="timeline-label fw-bold text-gray-800 fs-6">Départ</div>
                        <div class="timeline-badge mx-4">
                            <i class="fa fa-calendar-alt text-primary fs-4"></i>
                        </div>
                        <div class="timeline-content text-muted ps-10">
                            {{ \Carbon\Carbon::parse($reservation->trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY HH:mm') }}
                        </div>
                    </div>

                    <!-- Statut -->
                    <div class="timeline-item d-flex align-items-center mb-4">
                        <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                        <div class="timeline-badge mx-4">
                            <i class="fa fa-info-circle text-primary fs-4"></i>
                        </div>
                        <div class="timeline-content fw-bold text-gray-800 ps-10">
                            <span
                                class="badge badge-light-{{ $reservation->status == 'confirmer' ? 'success' : ($reservation->status == 'annuler' ? 'danger' : 'warning') }}">
                                {{ ucfirst($reservation->status) }}
                            </span>
                        </div>
                    </div>

                    @if ($reservation->status == 'en attente')
                        <div class="timeline-item d-flex align-items-center mb-4">
                            <div class="timeline-label fw-bold text-gray-800 fs-6">Action</div>
                            <div class="timeline-content ps-10 d-flex">

                                <a href="{{ route('payment.index', ['reservation' => $reservation->id]) }}"
                                    class="btn btn-success btn-sm d-flex align-items-center me-3">
                                    <i class="fa fa-check-circle me-2"></i>
                                    Confirmer
                                </a>
                                <!-- Bouton Annuler -->
                                <form action="#" method="POST">
                                    <button id="annuler_reservation" type="submit"
                                        data-reservation="{{ $reservation->id }}"
                                        class="btn btn-danger btn-sm d-flex align-items-center">
                                        <i class="fa fa-times-circle me-2"></i>
                                        Annuler
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <!-- Autres actions si besoin -->
                    @endif


                </div>
            </div>
            <!-- End Body -->
        </div>
    </div>
@endforeach
@endif
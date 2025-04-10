<div class="container mx-auto px-2 md:px-4 py-8" id="reservation">
@if ($reservations->isEmpty())
    <div class="min-h-[200px] flex items-center justify-center">
        <div class="text-center">
            <i class="fas fa-calendar-times text-4xl text-gray-400 mb-4"></i>
            <p class="text-xl text-gray-600">Aucune réservation disponible.</p>
        </div>
    </div>
@else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($reservations as $reservation)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border">
                <!-- Header -->
                <div class="p-6 border-b border-gray-100">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $reservation->trajet->villeDepart->nom }} → {{ $reservation->trajet->villeArrive->nom }}
                        </h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800  text-sm font-medium">
                            {{ number_format($reservation->trajet->prix, 0, ',', ' ') }} FCFA
                        </span>
                    </div>
                </div>

                <!-- Body -->
                <div class="p-6">
                    <div class="space-y-4">
                        <!-- Date & Heure -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-calendar-alt text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Départ</p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($reservation->trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY HH:mm') }}
                                </p>
                            </div>
                        </div>

                        <!-- Chauffeur -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-user text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Chauffeur</p>
                                <a href="{{ route('profil.show', ['user' => $reservation->trajet->user->id]) }}" 
                                   class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                    {{ $reservation->trajet->user->nom }} {{ $reservation->trajet->user->prenom }}
                                </a>
                            </div>
                        </div>

                        <!-- Statut -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-info-circle text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Statut</p>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    {{ $reservation->status == 'confirmer' ? 'bg-green-100 text-green-800' : 
                                       ($reservation->status == 'annuler' ? 'bg-red-100 text-red-800' : 'bg-yellow-100 text-yellow-800') }}">
                                    {{ ucfirst($reservation->status) }}
                                </span>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-cog text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Action</p>
                                <div class="mt-2">
                                    @if ($reservation->status == 'en attente')
                                        <a href="{{ route('payment.index', ['reservation' => $reservation->id]) }}"
                                           class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                                            <i class="fas fa-check-circle mr-2"></i>
                                            Confirmer
                                        </a>
                                    @else
                                        <button id="annuler_reservation_{{ $reservation->id }}"
                                                data-reservation="{{ $reservation->id }}"
                                                data-heure-depart="{{ \Carbon\Carbon::parse($reservation->trajet->heure_depart)->toIso8601String() }}"
                                                class="inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                                            <i class="fas fa-times-circle mr-2"></i>
                                            Annuler
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Avertissement -->
                    <div class="mt-6 p-4 bg-yellow-50 rounded-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    Une fois la réservation confirmée, elle ne pourra plus être annulée moins d'une heure avant l'heure de départ.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
</div>
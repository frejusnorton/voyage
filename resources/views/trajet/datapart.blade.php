<div class="container mx-auto px-2 md:px-4 py-8" id="trajet_datapart">
    @if($trajets->isEmpty())
        <div class="text-center py-12">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 mb-4">
                <i class="fas fa-search text-blue-600 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Aucun trajet disponible</h3>
            <p class="text-gray-600">Revenez plus tard pour découvrir de nouveaux trajets.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($trajets as $trajet)
                <div class="border border-gray-300 bg-white rounded-2xl shadow-sm overflow-hidden">
                    <a href="{{ route('trajet.details', ['trajet' => $trajet->id]) }}" class="block">
                        <!-- En-tête de la carte -->
                        <div class="p-2 md:p-6 border-b border-gray-100">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">
                                        {{ $trajet->villeDepart->nom }} → {{ $trajet->villeArrive->nom }}
                                    </h3>
                                    <p class="text-sm text-gray-500">
                                        <i class="fas fa-users mr-1"></i>
                                        {{ $trajet->nombre_personnes }} places disponibles
                                    </p>
                                </div>
                                <div class="text-sm bg-blue-500 text-white p-2 rounded-lg font-semibold">
                                    {{ number_format($trajet->prix, 0, ',', ' ') }} FCFA
                                </div>
                            </div>
                        </div>

                        <!-- Corps de la carte -->
                        <div class="p-6">
                            <div class="space-y-4">
                                <!-- Départ -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-map-marker-alt text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Départ</p>
                                        <p class="font-medium text-gray-900">{{ $trajet->villeDepart->nom }}</p>
                                    </div>
                                </div>

                                <!-- Arrivée -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-map-marker-alt text-green-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Arrivée</p>
                                        <p class="font-medium text-gray-900">{{ $trajet->villeArrive->nom }}</p>
                                    </div>
                                </div>

                                <!-- Date et heure -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-calendar-alt text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Date et heure</p>
                                        <p class="font-medium text-gray-900">
                                            {{ \Carbon\Carbon::parse($trajet->date_depart)->translatedFormat('l d F Y') }}
                                            à {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Conducteur -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-purple-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Conducteur</p>
                                        <a href="{{ route('profil.show', ['user' => $trajet->user->id]) }}" 
                                           class="font-medium text-gray-900 hover:text-blue-600 transition">
                                            {{ $trajet->user->nom }} {{ $trajet->user->prenom }}
                                        </a>
                                    </div>
                                </div>

                                <!-- Statut -->
                                <div class="flex items-center">
                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center mr-3">
                                        <i class="fas fa-info-circle text-gray-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Statut</p>
                                        <span class="px-3 py-1 rounded-full text-sm font-medium
                                            @if($trajet->statut == 'disponible') bg-green-100 text-green-800
                                            @elseif($trajet->statut == 'complet') bg-red-100 text-red-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ ucfirst($trajet->statut) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Bouton de réservation -->
                            @if($trajet->statut == 'disponible' && auth()->id() != $trajet->user_id)
                                <div class="mt-6">
                                    <button id="reservation" 
                                        class="group flex items-center justify-center space-x-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white py-2 px-4 rounded-lg font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                        data-url="{{ route('reservation', ['trajet' => $trajet->id]) }}"
                                        data-trajet-id="{{ $trajet->id }}" 
                                        data-user-id="{{ auth()->id() }}">
                                        <i class="fas fa-calendar-check text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                                        <span>Réserver</span>
                                    </button>
                                </div>
                            @elseif($trajet->statut == 'disponible' && auth()->id() == $trajet->user_id)
                                <div class="mt-6 text-center">
                                    <p class="text-gray-600 font-medium">Vous ne pouvez pas réserver votre propre trajet</p>
                                </div>
                            @else
                                <div class="mt-6 text-center">
                                    <p class="text-red-600 font-medium">Ce trajet n'est plus disponible</p>
                                </div>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <!-- Pagination améliorée -->
        <div class="mt-5">
            <div class="flex justify-center">
                <div class="bg-white rounded-xl shadow-md p-2">
                    {{ $trajets->links('pagination.custom') }}
                </div>
            </div>
        </div>
    @endif
</div>




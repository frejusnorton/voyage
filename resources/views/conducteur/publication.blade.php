@extends('main.index')
@section('title', 'Mes publications')
@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pt-20">
    <!-- En-tête du profil -->
    <div class="bg-white rounded-xl shadow-sm mb-8">
        <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-start">
                <!-- Photo de profil -->
                <div class="mb-6 md:mb-0 md:mr-8">
                    <div class="relative">
                        <img class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover" 
                             src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" 
                             alt="Photo de profil">
                        <div class="absolute bottom-0 right-0 w-5 h-5 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                </div>

                <!-- Informations -->
                <div class="flex-1">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div class="flex items-center mb-4 md:mb-0">
                            <h1 class="text-2xl font-bold text-gray-900 mr-2">
                                {{$user->nom}} {{$user->prenom}}
                            </h1>
                            <span class="text-blue-600">
                                <i class="fas fa-check-circle"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Statistiques -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-route text-green-600 mr-2"></i>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">{{$nbresTrajet}}</div>
                                    <div class="text-sm text-gray-500">Trajets publiés</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-chart-line text-blue-600 mr-2"></i>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">60%</div>
                                    <div class="text-sm text-gray-500">Taux de réussite</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="border-t border-gray-200">
            <nav class="flex overflow-x-auto">
                <a href="{{ route('conducteur.espace') }}" 
                   class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Paramètres
                </a>
                <a href="{{ route('trajet.conducteur') }}" 
                   class="px-6 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600">
                    Publications
                </a>
                <a href="#" 
                   class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Sécurité
                </a>
                <a href="{{ route('conducteur.reservation') }}" 
                   class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Demandes de réservation
                </a>
            </nav>
        </div>
    </div>

    <!-- Liste des publications -->
    <div class="bg-white rounded-xl shadow-sm mb-8">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Mes publications</h2>
        </div>

        <div class="p-2 md:p-6">
            <div class="space-y-6">
                @foreach ($trajets as $trajet)
                <div class="bg-white rounded-lg border border-gray-200 p-4 md:p-6 hover:shadow-md transition-shadow">
                    <!-- En-tête du trajet -->
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">
                                {{ $trajet->villeDepart->nom }} → {{ $trajet->villeArrive->nom }}
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                                {{ $trajet->nombre_personnes }} places disponibles
                            </p>
                        </div>
                        <span class="mt-2 md:mt-0 px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold">
                            {{ number_format($trajet->prix, 0, ',', ' ') }} FCFA
                        </span>
                    </div>

                    <!-- Détails du trajet -->
                    <div class="space-y-4">
                        <!-- Départ -->
                        <div class="flex items-center">
                            <div class="w-24 text-sm font-medium text-gray-500">Départ</div>
                            <div class="flex-1 flex items-center">
                                <i class="fas fa-map-marker-alt text-yellow-500 mr-2"></i>
                                <span class="text-gray-700">{{ $trajet->villeDepart->nom }}</span>
                            </div>
                        </div>

                        <!-- Arrivée -->
                        <div class="flex items-center">
                            <div class="w-24 text-sm font-medium text-gray-500">Arrivée</div>
                            <div class="flex-1 flex items-center">
                                <i class="fas fa-map-marker-alt text-green-500 mr-2"></i>
                                <span class="text-gray-700">{{ $trajet->villeArrive->nom }}</span>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="flex items-center">
                            <div class="w-24 text-sm font-medium text-gray-500">Date</div>
                            <div class="flex-1 flex items-center">
                                <i class="fas fa-calendar-alt text-blue-500 mr-2"></i>
                                <span class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}
                                </span>
                            </div>
                        </div>

                        <!-- Heure -->
                        <div class="flex items-center">
                            <div class="w-24 text-sm font-medium text-gray-500">Heure</div>
                            <div class="flex-1 flex items-center">
                                <i class="fas fa-clock text-blue-500 mr-2"></i>
                                <span class="text-gray-700">
                                    {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                                </span>
                            </div>
                        </div>

                        <!-- Statut -->
                        <div class="flex items-center">
                            <div class="w-24 text-sm font-medium text-gray-500">Statut</div>
                            <div class="flex-1 flex items-center">
                                <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                                <span class="px-2 py-1 rounded-full text-sm font-medium
                                    @if($trajet->statut == 'disponible') bg-green-100 text-green-800
                                    @elseif($trajet->statut == 'complet' || $trajet->statut == 'annule') bg-red-100 text-red-800
                                    @else bg-yellow-100 text-yellow-800 @endif">
                                    {{ ucfirst($trajet->statut == 'annule' ? 'annulé' : $trajet->statut) }}
                                </span>
                            </div>
                        </div>

                        <!-- Description -->
                        @if (!empty($trajet->description))
                        <div class="flex items-start">
                            <div class="w-24 text-sm font-medium text-gray-500">Description</div>
                            <div class="flex-1 flex items-start">
                                <i class="fas fa-file-alt text-blue-500 mr-2 mt-1"></i>
                                <p class="text-gray-700">{{ $trajet->description }}</p>
                            </div>
                        </div>
                        @endif

                        <!-- Actions -->
                        <div class="flex justify-end space-x-3 mt-4">
                            <button type="button" 
                                    class="px-2 py-2 bg-yellow-100 text-yellow-800 rounded-lg hover:bg-yellow-200 transition-colors"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#edit_trajet"
                                    data-ville_depart="{{$trajet->villeDepart->nom}}"
                                    data-ville_arrive="{{$trajet->villeArrive->nom}}"
                                    data-description="{{ $trajet->description}}"
                                    data-prix="{{ $trajet->prix}}"
                                    data-date-depart="{{ \Carbon\Carbon::parse($trajet->heure_depart)->format('Y-m-d') }}"
                                    data-heure-depart="{{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}"
                                    data-statut="{{$trajet->statut }}">
                                <i class="fas fa-edit mr-2"></i> Modifier
                            </button>

                            <button type="button" 
                                    class="px-2 py-2 bg-red-100 text-red-800 rounded-lg hover:bg-red-200 transition-colors"
                                    data-bs-toggle="modal">
                                <i class="fas fa-trash mr-2"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
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
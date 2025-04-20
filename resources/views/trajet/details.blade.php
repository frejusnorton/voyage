@extends('main.index')
@section('title','Détails du trajet')
@section('content')
<div class="container mx-auto px-4 py-8 pt-16 md:pt-32">
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-8">
        <!-- En-tête -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-xl font-bold text-gray-900 mb-2">
                        {{ $trajet->villeDepart->nom }} → {{ $trajet->villeArrive->nom }}
                    </h2>
                    <p class="text-gray-600">
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
            <div class="space-y-6">
                <!-- Départ -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center mr-4">
                        <i class="fas fa-map-marker-alt text-yellow-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Départ</p>
                        <p class="font-medium text-gray-900">{{ $trajet->villeDepart->nom }}</p>
                    </div>
                </div>

                <!-- Arrivée -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center mr-4">
                        <i class="fas fa-map-marker-alt text-green-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Arrivée</p>
                        <p class="font-medium text-gray-900">{{ $trajet->villeArrive->nom }}</p>
                    </div>
                </div>

                <!-- Date -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-calendar-alt text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Date</p>
                        <p class="font-medium text-gray-900">
                            {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}
                        </p>
                    </div>
                </div>

                <!-- Heure -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                        <i class="fas fa-clock text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Heure</p>
                        <p class="font-medium text-gray-900">
                            {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                        </p>
                    </div>
                </div>

                <!-- Statut -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center mr-4">
                        <i class="fas fa-info-circle text-gray-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Statut</p>
                        <span class="px-3 py-1 rounded-full text-sm font-medium
                            @if($trajet->statut == 'disponible') bg-green-100 text-green-800
                            @elseif($trajet->statut == 'complet') bg-red-100 text-red-800
                            @else bg-yellow-100 text-yellow-800 @endif">
                            {{ ucfirst($trajet->statut) }}
                        </span>
                    </div>
                </div>

                <!-- Auteur -->
                <div class="flex items-center">
                    <div class="w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                        <i class="fas fa-user text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Auteur</p>
                        <a href="{{ route('profil.show', ['user' => $trajet->user->id]) }}" 
                           class="font-medium text-gray-900 hover:text-blue-600 transition">
                            {{ $trajet->user->nom }} {{ $trajet->user->prenom }}
                        </a>
                    </div>
                </div>

                <!-- Description -->
                <div class="flex items-start">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center mr-4 mt-1">
                        <i class="fas fa-info-circle text-blue-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Description</p>
                        <p class="text-gray-900">
                            {{ $trajet->description ? $trajet->description : 'Non renseigné' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informations sur le conducteur -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-xl font-bold text-gray-900">Détails sur le conducteur</h3>
        </div>

        <div class="p-6">
            <div class="space-y-6">
                <!-- Nom et Prénom -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-gray-500 font-medium">Nom & Prénoms</div>
                    <div class="md:col-span-3 font-semibold text-gray-900">
                        {{$conducteur->nom}} {{$conducteur->prenom}}
                    </div>
                </div>

                <!-- Email -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-gray-500 font-medium">E-mail</div>
                    <div class="md:col-span-3 font-semibold text-gray-900">
                        {{$conducteur->email}}
                    </div>
                </div>

                <!-- Téléphone -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-gray-500 font-medium">
                        Numéro de téléphone
                        <span class="ml-1 text-blue-500" title="Le numéro doit être actif">
                            <i class="fas fa-info-circle"></i>
                        </span>
                    </div>
                    <div class="md:col-span-3 font-semibold text-gray-900">
                        {{$conducteur->telephone}}
                    </div>
                </div>

                <!-- Nombre de trajets -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-gray-500 font-medium">Nombre de trajets effectués</div>
                    <div class="md:col-span-3">
                        <a href="#" class="font-semibold text-blue-600 hover:text-blue-800 transition">
                            {{$nombreTrajets}}
                        </a>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                    @if($trajet->statut == 'disponible')
                        <button id="reservation" 
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition
                                @if(!$trajet->isReservable()) opacity-50 cursor-not-allowed @endif"
                                data-url="{{ route('reservation', ['trajet' => $trajet->id]) }}"
                                data-trajet-id="{{ $trajet->id }}" 
                                data-user-id="{{ auth()->id() }}">
                            Réserver
                        </button>
                    @else
                        <div class="text-red-600 font-medium">
                            Ce trajet n'est plus disponible
                        </div>
                    @endif

                    <a href="{{ route('conducteur.contact', ['user' => $conducteur]) }}" 
                       class="px-6 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                        Contacter
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
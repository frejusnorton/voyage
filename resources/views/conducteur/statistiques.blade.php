@extends('main.index')
@section('title', "Statistiques financières")

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pt-20">
    <!-- En-tête -->
    <div class="bg-white rounded-xl shadow-sm mb-8">
        <div class="p-6">
            <div class="flex flex-col md:flex-row md:items-start">
                <!-- Photo de profil -->
                <div class="mb-6 md:mb-0 md:mr-8">
                    <div class="relative">
                        <img class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover"
                            src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}"
                            alt="Photo de profil">
                        <div class="absolute bottom-0 right-0 w-5 h-5 bg-green-500 rounded-full border-4 border-white">
                        </div>
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
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">{{ number_format($totalMontant, 0, ',', ' ') }} FCFA</div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-route text-blue-600 mr-2"></i>
                                <div>
                                    <div class="text-2xl font-bold text-gray-900">{{ $nombreReservations }}</div>
                                    <div class="text-sm text-gray-500">Réservations confirmées</div>
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
                    class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Publications
                </a>
                <a href="{{ route('conducteur.reservation') }}"
                    class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Demandes 
                </a>
                <a href="{{ route('conducteur.statistiques', ['user' => $user->id]) }}"
                    class="text-blue-600 border-b-2 border-blue-600 px-6 py-4 text-sm font-medium">
                    Statistiques
                </a>
            </nav>
        </div>
    </div>

    <!-- Liste des réservations -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($reservations as $reservation)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border">
                <!-- Header -->
                <div class="p-6 border-b border-gray-100">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-900">
                            {{ $reservation->trajet->villeDepart->nom }} → {{ $reservation->trajet->villeArrive->nom }}
                        </h3>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-sm font-medium">
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

                        <!-- Passager -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-user text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Passager</p>
                                <a href="{{ route('profil.show', ['user' => $reservation->user->id]) }}" 
                                   class="text-sm text-blue-600 hover:text-blue-800 transition-colors duration-200">
                                    {{ $reservation->user->nom }} {{ $reservation->user->prenom }}
                                </a>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-blue-50 flex items-center justify-center">
                                <i class="fas fa-money-bill text-blue-600"></i>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Action</p>
                                <button class="mt-2 inline-flex items-center px-3 py-1.5 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 cursor-not-allowed">
                                    Retirer
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection 
@extends('main.index')
@section('title', 'Compte utilisateur')
@section('content')

    <div class="min-h-screen bg-gray-50 py-8 pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- En-tête du profil -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-8">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                        <!-- Photo de profil -->
                        <div class="relative">
                            <img class="h-32 w-32 rounded-full object-cover border-4 border-white shadow-lg"
                                src="{{ $user->profil_img ? asset($user->profil_img) : asset('assets/media/avatars/blank.png') }}"
                                alt="Photo de profil">
                            <span
                                class="absolute bottom-2 right-2 w-4 h-4 rounded-full border-2 border-white {{ $user->is_online ? 'bg-green-500' : 'bg-red-500' }}"></span>
                        </div>

                        <!-- Informations -->
                        <div class="flex-1">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                                <div>
                                    <h1 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                                        {{ $user->nom }} {{ $user->prenom }}
                                        <i class="fas fa-check-circle text-blue-500"></i>
                                    </h1>
                                    <div class="flex flex-wrap gap-4 mt-2 text-gray-600">
                                        <span class="flex items-center gap-2">
                                            <i class="fas fa-map-marker-alt"></i>
                                            {{ $user->address }}
                                        </span>
                                        <span class="flex items-center gap-2">
                                            <i class="fas fa-envelope"></i>
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </div>
                                <a href=""
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Contacter {{ $user->nom }}
                                </a>
                            </div>

                            <!-- Statistiques -->
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-paper-plane text-green-500 text-xl"></i>
                                        <span class="text-2xl font-bold text-gray-900">{{ $nombreTrajetsPublies }}</span>
                                    </div>
                                    <p class="text-gray-600 mt-1">Publications</p>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-4">
                                    <div class="flex items-center gap-2">
                                        <div class="flex">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $noteMoyenne)
                                                    <i class="fas fa-star text-yellow-400"></i>
                                                @elseif ($i - 0.5 == $noteMoyenne)
                                                    <i class="fas fa-star-half-alt text-yellow-400"></i>
                                                @else
                                                    <i class="far fa-star text-gray-300"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <span class="text-2xl font-bold text-gray-900">{{ $noteMoyenne }}/5</span>
                                    </div>
                                    <p class="text-gray-600 mt-1">Note des clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Liste des trajets -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-6 border-b border-gray-200">
                    <h2 class="text-xl font-bold text-gray-900">Liste des trajets publiés</h2>
                </div>

                <div class="p-6">
                    <div class="grid grid-cols-1 gap-6">
                        @foreach ($trajets as $trajet)
                                        <div
                                            class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition duration-300">
                                            <!-- En-tête du trajet -->
                                            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                                                <div>
                                                    <h3 class="text-lg font-semibold text-gray-900">
                                                        {{ $trajet->villeDepart->nom }} → {{ $trajet->villeArrive->nom }}
                                                    </h3>
                                                    <p class="text-gray-600 text-sm mt-1">
                                                        {{ $trajet->nombre_personnes }} places disponibles
                                                    </p>
                                                </div>
                                                <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-xl font-semibold">
                                                    {{ number_format($trajet->prix, 0, ',', ' ') }} FCFA
                                                </span>
                                            </div>

                                            <div class="p-4">
                                                <div class="space-y-4">
                                                    <!-- Départ -->
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                                            <i class="fas fa-map-marker-alt text-yellow-500"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm text-gray-600">Départ</p>
                                                            <p class="text-gray-900">
                                                                {{ $trajet->villeDepart->nom }} -
                                                                {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('d/m/Y H:i') }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Arrivée -->
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                                                            <i class="fas fa-map-marker-alt text-green-500"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm text-gray-600">Arrivée</p>
                                                            <p class="text-gray-900">{{ $trajet->villeArrive->nom }}</p>
                                                        </div>
                                                    </div>

                                                    <!-- Date et heure -->
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                                                            <i class="fas fa-calendar-alt text-blue-500"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm text-gray-600">Date et heure</p>
                                                            <p class="text-gray-900">
                                                                {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY') }}
                                                                à {{ \Carbon\Carbon::parse($trajet->heure_depart)->format('H:i') }}
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Statut -->
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center">
                                                            <i class="fas fa-info-circle text-purple-500"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm text-gray-600">Statut</p>
                                                            <span class="px-3 py-1 rounded-full text-sm font-medium
                                                                {{ $trajet->statut == 'disponible' ? 'bg-green-100 text-green-800' :
                            ($trajet->statut == 'complet' ? 'bg-red-100 text-red-800' :
                                'bg-yellow-100 text-yellow-800') }}">
                                                                {{ ucfirst($trajet->statut) }}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- Publié par -->
                                                    <div class="flex items-center gap-3">
                                                        <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                                            <i class="fas fa-user text-gray-500"></i>
                                                        </div>
                                                        <div>
                                                            <p class="text-sm text-gray-600">Publié par</p>
                                                            <a href="{{ route('profil.show', ['user' => $trajet->user->id]) }}"
                                                                class="text-blue-600 hover:text-blue-800 transition duration-300">
                                                                {{ $trajet->user->nom }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="mt-8">
                        <div class="flex justify-center">
                            <div class="bg-white rounded-xl shadow-md p-2">
                                {{ $trajets->links('pagination.custom') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .pagination {
            @apply flex items-center space-x-1;
        }

        .pagination li {
            @apply inline-block;
        }

        .pagination a,
        .pagination span {
            @apply px-4 py-2 rounded-lg transition-all duration-200;
        }

        .pagination a {
            @apply bg-white text-gray-700 hover:bg-blue-600 hover:text-white hover:shadow-md;
        }

        .pagination .active span {
            @apply bg-blue-600 text-white shadow-md;
        }

        .pagination .disabled span {
            @apply bg-gray-100 text-gray-400 cursor-not-allowed;
        }

        .pagination .page-link {
            @apply flex items-center justify-center w-10 h-10;
        }
    </style>
@endsection
@extends('main.index')
@section('title', "Mon espace")

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

                    <!-- Informations de contact -->
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-envelope mr-2"></i>
                            <span>{{$user->email}}</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-user mr-2"></i>
                            <span class="font-semibold">
                                @if($user->type == 'passager')
                                    Passager
                                @elseif($user->type == 'conducteur')
                                    Conducteur
                                @else
                                    Rôle inconnu
                                @endif
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
                   class="px-6 py-4 text-sm font-medium text-blue-600 border-b-2 border-blue-600">
                    Paramètres
                </a>
                <a href="{{ route('trajet.conducteur') }}" 
                   class="px-6 py-4 text-sm font-medium text-gray-500 hover:text-gray-700">
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

    <!-- Détails du profil -->
    <div class="bg-white rounded-xl shadow-sm mb-8">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold text-gray-900">Détails du profil</h2>
                <a href="{{ route('passager.edit', ['user' => Auth::id()]) }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Modifier
                </a>
            </div>
        </div>

        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Informations personnelles -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Nom</label>
                        <p class="mt-1 text-gray-900">{{$user->nom ?? 'Non renseigné'}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Prénom</label>
                        <p class="mt-1 text-gray-900">{{$user->prenom ?? 'Non renseigné'}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">E-mail</label>
                        <p class="mt-1 text-gray-900">{{$user->email ?? 'Non renseigné'}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Sexe</label>
                        <p class="mt-1 text-gray-900">{{$user->sexe ?? 'Non renseigné'}}</p>
                    </div>
                </div>

                <!-- Informations de contact -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Téléphone</label>
                        <p class="mt-1 text-gray-900">{{$user->telephone ?? 'Non renseigné'}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Adresse</label>
                        <p class="mt-1 text-gray-900">{{$user->adresse ?? 'Non renseigné'}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Date de naissance</label>
                        <p class="mt-1 text-gray-900">
                            @isset($user->naissance)
                                {{\Carbon\Carbon::parse($user->naissance)->format('d/m/Y')}}
                            @else
                                Non renseigné
                            @endisset
                        </p>
                    </div>
                </div>
            </div>

            <!-- Documents -->
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Documents</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Permis de conduire</label>
                        <p class="mt-1 text-gray-900">{{$user->permis_de_conduire_numero ?? 'Non renseigné'}}</p>
                        <p class="text-sm text-gray-500">
                            @isset($user->permis_de_conduire_date)
                                Date d'obtention : {{\Carbon\Carbon::parse($user->permis_de_conduire_date)->format('d/m/Y')}}
                            @endisset
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500">Carte d'identité</label>
                        <p class="mt-1 text-gray-900">{{$user->carte_identite_numero ?? 'Non renseigné'}}</p>
                        <p class="text-sm text-gray-500">
                            @isset($user->carte_identite_date)
                                Date d'obtention : {{\Carbon\Carbon::parse($user->carte_identite_date)->format('d/m/Y')}}
                            @endisset
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Désactivation du compte -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Désactiver mon compte</h2>
        </div>
        <div class="p-6">
            <form id="supprimer_compte" method="POST" action="{{ route('suppression', ['user' => $user->id]) }}">
                @csrf
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-6 mb-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                        </div>
                        <div class="ml-3">
                            <h4 class="text-lg font-semibold text-gray-900">Vous êtes en train de supprimer votre compte</h4>
                            <p class="mt-1 text-sm text-gray-600">
                                Cette action est irréversible. <a href="#" class="text-blue-600 hover:text-blue-800">En savoir plus</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" name="confirmation" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label class="ml-2 block text-sm text-gray-900">
                        Je confirme la suppression de mon compte
                    </label>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                        Supprimer mon compte
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
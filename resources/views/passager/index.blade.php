@extends('main.index')
@section('title', 'Paramètre de compte')

@section('content')
<div class="min-h-screen bg-gray-50 py-8 pt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête du profil -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
                    <!-- Photo de profil -->
                    <div class="relative">
                        <img class="h-32 w-32 rounded-full object-cover" 
                             src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" 
                             alt="Photo de profil">
                        <div class="absolute bottom-0 right-0 h-6 w-6 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>

                    <!-- Informations utilisateur -->
                    <div class="flex-1 text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start space-x-2">
                            <h2 class="text-2xl font-bold text-gray-900">{{$user->nom}} {{$user->prenom}}</h2>
                            <span class="text-blue-500">
                                <i class="fas fa-check-circle"></i>
                            </span>
                        </div>

                        <div class="mt-2 flex flex-col space-y-2">
                            <div class="flex items-center justify-center md:justify-start text-gray-600">
                                <i class="fas fa-envelope mr-2"></i>
                                <span>{{$user->email}}</span>
                            </div>
                            <div class="flex items-center justify-center md:justify-start text-gray-600">
                                <i class="fas fa-user mr-2"></i>
                                <span class="font-medium">
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
                        <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                                <div class="flex items-center">
                                    <i class="fas fa-route text-green-500 mr-2"></i>
                                    <div>
                                        <p class="text-2xl font-bold text-gray-900">{{$trajets}}</p>
                                        <p class="text-sm text-gray-500">Trajets effectués</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Détails du profil -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Détails du profil</h3>
                    <a href="{{ route('passager.edit', ['user' => Auth::id()]) }}" 
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                        Modifier
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Informations personnelles -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <p class="mt-1 text-gray-900">{{$user->nom ?? 'Non renseigné'}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Prénom</label>
                            <p class="mt-1 text-gray-900">{{$user->prenom ?? 'Non renseigné'}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <p class="mt-1 text-gray-900">{{$user->email ?? 'Non renseigné'}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Sexe</label>
                            <p class="mt-1 text-gray-900">{{$user->sexe ?? 'Non renseigné'}}</p>
                        </div>
                    </div>

                    <!-- Informations de contact -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <p class="mt-1 text-gray-900">{{$user->telephone ?? 'Non renseigné'}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Adresse</label>
                            <p class="mt-1 text-gray-900">{{$user->adresse ?? 'Non renseigné'}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Date de naissance</label>
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

                @if ($user->type === 'conducteur')
                    <div class="mt-8 border-t border-gray-200 pt-8">
                        <h4 class="text-lg font-medium text-gray-900 mb-6">Informations conducteur</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Numéro de permis</label>
                                <p class="mt-1 text-gray-900">{{$user->permis_de_conduire_numero ?? 'Non renseigné'}}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Date d'obtention du permis</label>
                                <p class="mt-1 text-gray-900">
                                    @isset($user->permis_de_conduire_date)
                                        {{\Carbon\Carbon::parse($user->permis_de_conduire_date)->format('d/m/Y')}}
                                    @else
                                        Non renseigné
                                    @endisset
                                </p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Numéro de carte d'identité</label>
                                <p class="mt-1 text-gray-900">{{$user->carte_identite_numero ?? 'Non renseigné'}}</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Date d'obtention de la carte</label>
                                <p class="mt-1 text-gray-900">
                                    @isset($user->carte_identite_date)
                                        {{\Carbon\Carbon::parse($user->carte_identite_date)->format('d/m/Y')}}
                                    @else
                                        Non renseigné
                                    @endisset
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Désactivation du compte -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Désactiver mon compte</h3>
                </div>

                <form id="supprimer_compte" method="POST" action="{{ route('suppression', ['user' => $user->id]) }}">
                    @csrf
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                            </div>
                            <div class="ml-3">
                                <h4 class="text-sm font-medium text-yellow-800">Vous êtes en train de supprimer votre compte</h4>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <a href="#" class="font-medium underline">En savoir plus</a>
                                </div>
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
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Supprimer mon compte
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('passager.js')
@endsection
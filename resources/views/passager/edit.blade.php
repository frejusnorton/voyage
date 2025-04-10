@extends('main.index')
@section('title', 'Modifier mes informations')

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
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire d'édition -->
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-900">Modifier mes informations</h3>
                </div>
                <form id="edit_passager_profil" method="post" action="{{ route('passager.edit', ['user' => $user->id]) }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <!-- Photo de profil -->
                    <div class="space-y-4">
                        <label class="block text-sm font-medium text-gray-700">Photo de profil</label>
                        <div class="flex items-center space-x-4">
                            <div class="relative group">
                                <img class="h-24 w-24 rounded-full object-cover ring-2 ring-gray-200 group-hover:ring-blue-500 transition-all duration-300" 
                                     src="{{ Auth::user()->profil_img ? asset(Auth::user()->profil_img) : asset('assets/media/avatars/blank.png') }}" 
                                     alt="Photo de profil actuelle">
                                <label class="absolute bottom-0 right-0 bg-white rounded-full p-2 shadow-lg cursor-pointer hover:bg-gray-50 transform hover:scale-110 transition-all duration-300">
                                    <i class="fas fa-camera text-gray-600"></i>
                                    <input type="file" name="profil_img" accept=".png, .jpg, .jpeg" class="hidden">
                                </label>
                            </div>
                            <div class="text-sm text-gray-500">
                                <p>Format accepté : JPG, PNG</p>
                                <p>Taille maximale : 2MB</p>
                            </div>
                        </div>
                    </div>

                    <!-- Informations personnelles -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" name="nom" value="{{$user->nom}}"
                                       class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out"
                                       placeholder="Votre nom">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Prénom</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" name="prenom" value="{{$user->prenom}}"
                                       class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out"
                                       placeholder="Votre prénom">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" name="email" value="{{$user->email}}"
                                       class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out"
                                       placeholder="Votre email">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Sexe</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-venus-mars text-gray-400"></i>
                                </div>
                                <select name="sexe" 
                                        class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm appearance-none bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
                                    <option value="homme" {{ $user->sexe == 'homme' ? 'selected' : '' }}>Homme</option>
                                    <option value="femme" {{ $user->sexe == 'femme' ? 'selected' : '' }}>Femme</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="fas fa-chevron-down text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Téléphone</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                                <div class="flex rounded-lg shadow-sm">
                                    <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">+229</span>
                                    <input type="tel" name="telephone" value="{{ $user->telephone }}"
                                           class="flex-1 block w-full pl-10 pr-3 py-2.5 rounded-r-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out"
                                           placeholder="Numéro de téléphone">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Adresse</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-map-marker-alt text-gray-400"></i>
                                </div>
                                <input type="text" name="adresse" value="{{$user->adresse}}"
                                       class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out"
                                       placeholder="Votre adresse">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label class="block text-sm font-medium text-gray-700">Date de naissance</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar text-gray-400"></i>
                                </div>
                                <input type="date" name="naissance" value="{{ $user->naissance }}"
                                       class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-150 ease-in-out">
                            </div>
                        </div>
                    </div>

                    <!-- Bouton de soumission -->
                    <div class="flex justify-end pt-6">
                        <button type="submit" 
                                class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out transform hover:scale-105">
                            <i class="fas fa-save mr-2"></i>
                            Enregistrer les modifications
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
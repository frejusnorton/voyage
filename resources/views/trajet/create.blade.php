@extends('main.index')
@section('title', 'Publier un trajet')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 pt-20">
    <!-- En-tête -->
    <div class="bg-white rounded-xl shadow-sm mb-8">
        <div class="p-6 border-b border-gray-100">
            <h3 class="text-xl font-semibold text-gray-900">Publier un trajet</h3>
        </div>

        <!-- Formulaire -->
        <form class="p-6" method="post" id="trajet_create" action="{{ route('trajet.create') }}">
            @csrf
            <!-- Ville de départ -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Lieu de départ</label>
                <div class="relative">
                    <input list="villes" name="ville_depart" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                           placeholder="Ex : Pahou">
                    <datalist id="villes">
                        @foreach($villes as $ville)
                            <option value="{{ $ville->nom }}">{{ $ville->nom }}</option>
                        @endforeach
                    </datalist>
                </div>
            </div>

            <!-- Ville d'arrivée -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Lieu d'arrivée</label>
                <div class="relative">
                    <input list="villes" name="ville_arrive" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                           placeholder="Ex : Lokossa">
                </div>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" 
                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                          rows="3"
                          placeholder="Ex : Nous démarrons devant l'école public Godomey ! Soyez à l'heure"></textarea>
            </div>

            <!-- Prix -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Prix (FCFA)</label>
                <div class="relative">
                    <input type="number" name="prix" 
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                           placeholder="Entrez le prix"
                           step="0.01" 
                           min="0">
                </div>
            </div>

            <!-- Date et heure -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Date de départ -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Date de départ</label>
                    <input type="date" name="date_depart"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>

                <!-- Heure de départ -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Heure de départ</label>
                    <input type="time" name="heure_depart"
                           class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>
            </div>

            <!-- Nombre de places -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Nombre de places</label>
                <input type="number" name="nombre_personnes"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                       placeholder="Ex : 4"
                       min="1">
            </div>

            <!-- Bouton de soumission -->
            <div class="flex justify-end">
                <button id="submit-trajet-btn" type="submit"
                    class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 flex items-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                    <svg id="spinner" class="hidden w-5 h-5 animate-spin text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                    <span id="submit-text">Publier le trajet</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    @include('trajet.js')
@endsection



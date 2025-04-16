<div class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden opacity-0 transition-opacity duration-200" id="filterModal">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-md transform transition-all duration-200 translate-y-4" id="filterModalContent">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-semibold text-gray-900">Options de filtrage</h3>
                    <button id="closeFilterModal" class="text-gray-500 hover:text-gray-700 transition-colors duration-200">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
            </div>

            <form action="{{ route('trajet') }}" method="POST" id="filter_trajet" class="p-6">
                @csrf
                <div class="space-y-6">
                    

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ville de départ</label>
                        <select class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 bg-white" 
                                name="ville_depart">
                            <option value="">Sélectionner une ville</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ville d'arrivée</label>
                        <select class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 bg-white" 
                                name="ville_arrivee">
                            <option value="">Sélectionner une ville</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Date et heure du trajet</label>
                        <input type="datetime-local" 
                               class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 bg-white" 
                               id="datetime" 
                               name="datetime">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Montant du trajet (en FCFA)</label>
                        <div class="relative">
                            <input type="number" 
                                   class="w-full pl-12 pr-4 py-2.5 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200 bg-white" 
                                   id="montant" 
                                   name="montant" 
                                   min="1000" 
                                   max="50000" 
                                   step="500"
                                   placeholder="Entrez le montant">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">FCFA</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end space-x-3 pt-6">
                        <button type="button" 
                                id="closeFilterModal"
                                class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-200">
                            Annuler
                        </button>
                        <button type="submit" 
                                class="px-6 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                            Appliquer
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


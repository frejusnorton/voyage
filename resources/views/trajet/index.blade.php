@extends('main.index')
@section('title', 'Liste des trajets')

@section('content')
<div class="container mx-auto px-4 pt-20">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-xl md:text-2xl font-bold text-gray-900">Trajets</h1>
        <button onclick="openFilterModal()" 
                class="flex items-center space-x-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-200">
            <i class="fas fa-filter"></i>
            <span>Filtrer les trajets</span>
        </button>
    </div>
    @include('components.filter')
    <div id="trajetdatapart">
        @include('trajet.datapart')
    </div>
</div>
@endsection

@section('scripts')
    @include('trajet.js')
@endsection
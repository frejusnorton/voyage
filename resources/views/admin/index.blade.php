@extends('main.index')
@section('title', 'Interface administrateur')

@section('content')
    <div class="container mx-auto px-4 py-8 pt-32">
        <h1 class="text-3xl font-bold mb-8">Tableau de bord administrateur</h1>

        <!-- Statistiques rapides -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Carte Statistique Utilisateurs -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Utilisateurs</p>
                        <p class="text-3xl font-bold">{{ $stats['total_users'] }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Carte Statistique Trajets -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Trajets</p>
                        <p class="text-3xl font-bold">{{ $stats['total_trajets'] }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-route text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Carte Statistique Réservations -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Réservations</p>
                        <p class="text-3xl font-bold">{{ $stats['total_reservations'] }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <i class="fas fa-ticket-alt text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Carte Statistique Trajets Actifs -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Trajets Actifs</p>
                        <p class="text-3xl font-bold">{{ $stats['trajets_actifs'] }}</p>
                    </div>
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-car text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Onglets -->
        <div class="mb-8 border-b border-gray-200">
            <ul class="flex flex-wrap -mb-px" id="adminTabs" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="trajets-tab"
                        data-tabs-target="#trajets" type="button" role="tab" aria-controls="trajets"
                        aria-selected="true">Trajets</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="users-tab" data-tabs-target="#users" type="button" role="tab" aria-controls="users"
                        aria-selected="false">Utilisateurs</button>
                </li>
            </ul>
        </div>

        <!-- Contenu des Onglets -->
        <div id="adminTabsContent">
            <!-- Onglet Trajets -->
            <div class="p-4 rounded-lg bg-gray-50" id="trajets" role="tabpanel" aria-labelledby="trajets-tab">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Gestion des Trajets</h2>
                    <div class="flex space-x-4">
                        <input type="text" placeholder="Rechercher un trajet..." class="px-4 py-2 border rounded-lg">
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 text-left">ID</th>
                                <th class="py-3 px-4 text-left">Conducteur</th>
                                <th class="py-3 px-4 text-left">Départ</th>
                                <th class="py-3 px-4 text-left">Arrivée</th>
                                <th class="py-3 px-4 text-left">Date</th>
                                <th class="py-3 px-4 text-left">Places</th>
                                <th class="py-3 px-4 text-left">Réservations</th>
                                <th class="py-3 px-4 text-left">Statut</th>
                                <th class="py-3 px-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($trajets as $trajet)
                            <tr>
                                <td class="py-3 px-4">{{ $trajet->id }}</td>
                                <td class="py-3 px-4 font-medium">{{ $trajet->conducteur->name }}</td>
                                <td class="py-3 px-4">{{ $trajet->lieu_depart }}</td>
                                <td class="py-3 px-4">{{ $trajet->lieu_arrivee }}</td>
                                <td class="py-3 px-4">{{ $trajet->date_depart->format('d/m/Y H:i') }}</td>
                                <td class="py-3 px-4">{{ $trajet->nombre_places }}</td>
                                <td class="py-3 px-4">{{ $trajet->reservations_count }}</td>
                                <td class="py-3 px-4">
                                    @if($trajet->date_depart > now())
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Actif</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Terminé</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a href="{{ route('trajet.details', $trajet) }}" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-800" onclick="deleteTrajet({{ $trajet->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $trajets->links() }}
                    </div>
                </div>
            </div>

            <!-- Onglet Utilisateurs -->
            <div class="hidden p-4 rounded-lg bg-gray-50" id="users" role="tabpanel" aria-labelledby="users-tab">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Gestion des Utilisateurs</h2>
                    <div class="flex space-x-4">
                        <input type="text" placeholder="Rechercher un utilisateur..." class="px-4 py-2 border rounded-lg">
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 text-left">ID</th>
                                <th class="py-3 px-4 text-left">Nom</th>
                                <th class="py-3 px-4 text-left">Email</th>
                                <th class="py-3 px-4 text-left">Trajets</th>
                                <th class="py-3 px-4 text-left">Réservations</th>
                                <th class="py-3 px-4 text-left">Inscrit le</th>
                                <th class="py-3 px-4 text-left">Rôle</th>
                                <th class="py-3 px-4 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($users as $user)
                            <tr>
                                <td class="py-3 px-4">{{ $user->id }}</td>
                                <td class="py-3 px-4 font-medium">{{ $user->name }}</td>
                                <td class="py-3 px-4">{{ $user->email }}</td>
                                <td class="py-3 px-4">{{ $user->trajets_count }}</td>
                                <td class="py-3 px-4">{{ $user->reservations_count }}</td>
                                <td class="py-3 px-4">{{ $user->created_at->format('d/m/Y') }}</td>
                                <td class="py-3 px-4">
                                    @if($user->is_admin)
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">Admin</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Utilisateur</span>
                                    @endif
                                </td>
                                <td class="py-3 px-4 flex space-x-2">
                                    <a href="{{ route('profil.show', $user) }}" class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button class="text-red-600 hover:text-red-800" onclick="deleteUser({{ $user->id }})">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('admin.js')
@endsection
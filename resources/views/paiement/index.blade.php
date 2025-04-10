@extends('main.index')
@section('title', 'Paiement')
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- En-tête -->
    <div class="bg-white rounded-lg shadow-sm mb-8">
        <div class="p-6 border-b border-gray-100">
            <h3 class="text-xl font-semibold text-gray-900">Faire un paiement sur Covoyage</h3>
        </div>

        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-6">Moyens de paiement</h3>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Carte MTN MOMO -->
                <div class="bg-white border border-dashed border-gray-300 rounded-lg p-6">
                    <div class="flex flex-col">
                        <div class="flex items-center text-yellow-600 font-bold text-lg mb-5">
                            <i class="fas fa-mobile-alt mr-2"></i>
                            MTN MOMO
                        </div>

                        <div class="space-y-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900 mb-2">Numéro de téléphone</div>
                                <div class="text-sm text-gray-500 mb-3">{{ $phoneNumber }}</div>
                                
                                <!-- Input avec préfixe -->
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">+229</span>
                                    </div>
                                    <input type="text" 
                                           name="phone" 
                                           id="phone"
                                           class="block w-full pl-12 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm transition duration-150 ease-in-out"
                                           placeholder="Votre numéro de paiement" 
                                           value="{{ $phoneNumber }}"
                                           pattern="[0-9]{12}"
                                           maxlength="12"
                                           required />
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="fas fa-phone text-gray-400"></i>
                                    </div>
                                </div>
                                
                                <!-- Message d'aide -->
                                <p class="mt-2 text-xs text-gray-500">
                                    Entrez votre numéro MTN MOMO (10 chiffres)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Avertissement -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <div class="space-y-4">
                        <h4 class="text-yellow-600 font-semibold text-lg">
                            Montant à payer : {{ number_format($montant, 0, ',', ' ') }} FCFA
                        </h4>
                        
                        <h4 class="text-gray-900 font-bold">
                            Avertissement : Veuillez vérifier les conditions avant de confirmer le paiement
                        </h4>

                        <div class="text-sm text-gray-700">
                            Avant de finaliser votre paiement, nous vous invitons à lire attentivement nos 
                            <a href="{{route('conditions')}}" class="font-semibold text-blue-600 hover:text-blue-800">conditions d'utilisation</a> 
                            ainsi que notre 
                            <a href="{{route('politique')}}" class="font-semibold text-blue-600 hover:text-blue-800">politique de remboursement</a>. 
                            En procédant au paiement, vous acceptez ces termes et conditions.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widget Kkiapay -->
            <div class="mt-8">
                <kkiapay-widget 
                    sandbox="true" 
                    amount="{{ $montant }}" 
                    key="{{ env('KKIAPAY_PUBLIC_KEY') }}"
                    callback="{{ route('paiement.callback', ['reservation' => $reservation->id]) }}">
                </kkiapay-widget>
            </div>
        </div>
    </div>
</div>
@endsection
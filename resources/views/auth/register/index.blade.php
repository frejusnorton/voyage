@extends('main.index')
@section('title', "S'inscrire gratuitement sur Covoyage")

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-2 sm:px-2 lg:px-8 relative overflow-hidden">
    <div class="max-w-2xl w-full space-y-8 z-10 animate-fadeIn">
        <!-- Logo et Titre -->
        <div class="text-center animate-slideDown pt-10">
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                S'inscrire
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Vous avez déjà un compte ?
                <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500">
                    Se connecter ici
                </a>
            </p>
        </div>

        <!-- Formulaire -->
        <form id="register-form" class="pt-5 space-y-6 bg-white p-8 rounded-lg shadow-lg animate-slideUp" method="post" action="{{ route('register') }}">
            @csrf
            <!-- Connexion avec Google -->
            <div class="animate-fadeIn">
                <a href="{{ route('redirectToGoogle') }}" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition duration-300">
                    <img class="h-5 w-5 mr-2" src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
                    Se connecter avec Google
                </a>
            </div>

            <!-- Séparateur -->
            <div class="relative animate-fadeIn">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">OU</span>
                </div>
            </div>

            <!-- Champs du formulaire -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 animate-fadeIn">
                <!-- Nom -->
                <div>
                    <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input id="nom" name="nom" type="text" 
                        class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                        placeholder="Votre nom">
                    <span class="text-red-500 text-sm error-nom"></span>
                </div>

                <!-- Prénom -->
                <div>
                    <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input id="prenom" name="prenom" type="text" 
                        class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                        placeholder="Votre prénom">
                    <span class="text-red-500 text-sm error-prenom"></span>
                </div>
            </div>

            <!-- Email -->
            <div class="animate-fadeIn">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" 
                    class="mt-1 appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                    placeholder="Votre email">
                <span class="text-red-500 text-sm error-email"></span>
            </div>

            <!-- Téléphone -->
            <div class="animate-fadeIn">
                <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                        +229
                    </span>
                    <input type="tel" name="telephone" id="telephone" 
                        class="flex-1 appearance-none rounded-r-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                        placeholder="Numéro de téléphone">
                </div>
                <span class="text-red-500 text-sm error-telephone"></span>
            </div>

            <!-- Sexe -->
            <div class="animate-fadeIn">
                <label for="sexe" class="block text-sm font-medium text-gray-700">Sexe</label>
                <select id="sexe" name="sexe" 
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md transition duration-300">
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                </select>
                <span class="text-red-500 text-sm error-sexe"></span>
            </div>

            <!-- Type d'utilisateur -->
            <div class="animate-fadeIn">
                <label for="type" class="block text-sm font-medium text-gray-700">Vous êtes ?</label>
                <select id="type" name="type" 
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md transition duration-300">
                    <option value="passager">Passager</option>
                    <option value="conducteur">Conducteur</option>
                </select>
                <span class="text-red-500 text-sm error-type"></span>
            </div>

            <!-- Mot de passe -->
            <div class="animate-fadeIn">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <div class="mt-1 relative">
                    <input id="password" name="password" type="password" 
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                        placeholder="Votre mot de passe">
                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
                <p class="mt-2 text-sm text-gray-500">Utilisez 8 caractères ou plus avec un mélange de lettres minuscule, majuscule et de chiffre.</p>
                <span class="text-red-500 text-sm error-password"></span>
            </div>

            <!-- Confirmation mot de passe -->
            <div class="animate-fadeIn">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer mot de passe</label>
                <div class="mt-1 relative">
                    <input id="password_confirmation" name="password_confirmation" type="password" 
                        class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm transition duration-300"
                        placeholder="Confirmez votre mot de passe">
                    <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Conditions d'utilisation -->
            <div class="flex items-center animate-fadeIn">
                <input id="conditions" name="conditions" type="checkbox" value="1" 
                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition duration-300">
                <label for="conditions" class="ml-2 block text-sm text-gray-700">
                    J'accepte <a href="{{ route('conditions') }}" class="text-blue-600 hover:text-blue-500">les conditions d'utilisations</a>.
                </label>
            </div>
            <span class="text-red-500 text-sm error-conditions"></span>

            <!-- Bouton d'inscription -->
            <div class="animate-fadeIn">
                <button type="submit" id="kt_sign_up_submit"
                    class="group relative w-full flex justify-center items-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
            
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-blue-500 group-hover:text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
            
                    <span class="indicator-label">S'inscrire</span>
                    <span class="indicator-progress hidden flex items-center">
                        <svg class="animate-spin ml-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                  d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 
                                  3.042 1.135 5.824 3 7.938l3-2.647z" />
                        </svg>
                        <span class="ml-2">Patienter...</span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideDown {
    from { transform: translateY(-20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.animate-fadeIn {
    animation: fadeIn 0.5s ease-out;
}

.animate-slideDown {
    animation: slideDown 0.5s ease-out;
}

.animate-slideUp {
    animation: slideUp 0.5s ease-out;
}
</style>
@endsection

@section('scripts')
@include('auth.register.js')
@endsection

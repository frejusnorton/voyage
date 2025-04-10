@extends('main.index')
@section('title', "Conditions d'utilisations")

@section('tolbar')
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-column flex-md-row align-items-md-center flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-md-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Conditions d'utilisation</h1>
            <!--end::Title-->
        </div>
    </div>

@endsection

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class=" text-xl md:text-4xl font-bold text-gray-900 mb-4">Conditions d'utilisation</h1>
            <p class="text-lg text-gray-600">Dernière mise à jour : {{date('d/m/Y')}}</p>
        </div>

        <!-- Contenu -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <!-- Introduction -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Introduction</h2>
                <p class="text-gray-600 leading-relaxed">Bienvenue sur notre plateforme. En utilisant nos services, vous acceptez les présentes conditions d'utilisation. Si vous n'êtes pas d'accord, veuillez ne pas utiliser notre site.</p>
            </div>

            <!-- Accès aux Services -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">2. Accès aux Services</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Vous devez être âgé d'au moins 18 ans ou avoir l'autorisation d'un parent/tuteur pour utiliser notre plateforme.</p>
                    <p class="text-gray-600 leading-relaxed">L'accès peut être temporairement suspendu en cas de maintenance ou d'amélioration du service.</p>
                </div>
            </div>

            <!-- Compte Utilisateur -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">3. Compte Utilisateur</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li class="text-gray-600">Vous êtes responsable de la confidentialité de vos identifiants.</li>
                    <li class="text-gray-600">Toute activité effectuée sous votre compte est sous votre responsabilité.</li>
                    <li class="text-gray-600">Nous nous réservons le droit de suspendre ou supprimer un compte en cas d'abus ou de violation de ces conditions.</li>
                </ul>
            </div>

            <!-- Utilisation Acceptable -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">4. Utilisation Acceptable</h2>
                <ul class="list-disc pl-6 space-y-2">
                    <li class="text-gray-600">Vous ne devez pas publier de contenu illégal, offensant ou trompeur.</li>
                    <li class="text-gray-600">Vous ne devez pas utiliser notre plateforme à des fins frauduleuses ou malveillantes.</li>
                    <li class="text-gray-600">Tout usage non conforme peut entraîner une suppression de votre accès sans préavis.</li>
                </ul>
            </div>

            <!-- Propriété Intellectuelle -->
            <div class="mb-8">
                <h2 class="  text-xl md:text-2xl font-semibold text-gray-900 mb-4">5. Propriété Intellectuelle</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Tous les contenus, logos et éléments de la plateforme sont notre propriété ou sous licence.</p>
                    <p class="text-gray-600 leading-relaxed">Vous ne pouvez pas copier, modifier ou redistribuer nos contenus sans autorisation écrite.</p>
                </div>
            </div>

            <!-- Limitation de Responsabilité -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">6. Limitation de Responsabilité</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous ne garantissons pas que le service sera exempt d'erreurs ou d'interruptions.</p>
                    <p class="text-gray-600 leading-relaxed">Nous ne sommes pas responsables des pertes de données ou dommages résultant de l'utilisation du service.</p>
                </div>
            </div>

            <!-- Modifications des Conditions -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">7. Modifications des Conditions</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous nous réservons le droit de modifier ces conditions à tout moment.</p>
                    <p class="text-gray-600 leading-relaxed">Vous serez informé des mises à jour et votre utilisation continue du service vaut acceptation des nouvelles conditions.</p>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">8. Contact</h2>
                <p class="text-gray-600 leading-relaxed">Si vous avez des questions, vous pouvez nous contacter à <a href="mailto:support@covoyages.laravel.cloud" class="text-blue-600 hover:text-blue-800 transition">support@covoyages.laravel.cloud</a>.</p>
            </div>
        </div>

      
    </div>
</div>
@endsection
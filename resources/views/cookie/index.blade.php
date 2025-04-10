@extends('main.index')
@section('title', "Politique des cookies")

@section('tolbar')
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-column flex-md-row align-items-md-center flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-md-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Politique des cookies/h1>
            <!--end::Title-->
        </div>
    </div>

@endsection

@section('content')
<div class="min-h-screen bg-gray-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class="text-xl md:text-4xl font-bold text-gray-900 mb-4">Politique des cookies</h1>
            <p class="text-lg text-gray-600">Dernière mise à jour : {{date('d/m/Y')}}</p>
        </div>

        <!-- Contenu -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <!-- Introduction -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Introduction</h2>
                <p class="text-gray-600 leading-relaxed">Cette politique des cookies explique comment nous utilisons les cookies et technologies similaires sur notre plateforme de covoiturage pour améliorer votre expérience utilisateur.</p>
            </div>

            <!-- Qu'est-ce qu'un cookie -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">2. Qu'est-ce qu'un cookie ?</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Un cookie est un petit fichier texte stocké sur votre appareil lorsque vous visitez notre site. Il nous permet de :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Mémoriser vos préférences</li>
                        <li class="text-gray-600">Améliorer la sécurité</li>
                        <li class="text-gray-600">Analyser l'utilisation du site</li>
                        <li class="text-gray-600">Personnaliser votre expérience</li>
                    </ul>
                </div>
            </div>

            <!-- Types de cookies -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">3. Types de cookies utilisés</h2>
                <div class="space-y-6">
                    <!-- Cookies essentiels -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Cookies essentiels</h3>
                        <p class="text-gray-600 leading-relaxed">Nécessaires au fonctionnement du site :</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li class="text-gray-600">Authentification des utilisateurs</li>
                            <li class="text-gray-600">Sécurité du site</li>
                            <li class="text-gray-600">Préférences de base</li>
                        </ul>
                    </div>

                    <!-- Cookies de performance -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Cookies de performance</h3>
                        <p class="text-gray-600 leading-relaxed">Améliorent l'expérience utilisateur :</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li class="text-gray-600">Analyse du trafic</li>
                            <li class="text-gray-600">Détection des erreurs</li>
                            <li class="text-gray-600">Optimisation des performances</li>
                        </ul>
                    </div>

                    <!-- Cookies de fonctionnalité -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Cookies de fonctionnalité</h3>
                        <p class="text-gray-600 leading-relaxed">Personnalisent votre expérience :</p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li class="text-gray-600">Préférences de langue</li>
                            <li class="text-gray-600">Paramètres régionaux</li>
                            <li class="text-gray-600">Historique des recherches</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gestion des cookies -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">4. Gestion des cookies</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Vous pouvez contrôler les cookies de plusieurs façons :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Paramètres de votre navigateur</li>
                        <li class="text-gray-600">Outils de gestion des cookies</li>
                        <li class="text-gray-600">Bannière de consentement sur notre site</li>
                    </ul>
                    <p class="text-gray-600 leading-relaxed mt-4">Note : La désactivation de certains cookies peut affecter le fonctionnement du site.</p>
                </div>
            </div>

            <!-- Durée de conservation -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">5. Durée de conservation</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Les cookies sont conservés pour différentes durées :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Cookies de session : jusqu'à la fermeture du navigateur</li>
                        <li class="text-gray-600">Cookies persistants : jusqu'à leur expiration ou suppression</li>
                    </ul>
                </div>
            </div>

            <!-- Mises à jour -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">6. Mises à jour de la politique</h2>
                <p class="text-gray-600 leading-relaxed">Nous pouvons mettre à jour cette politique des cookies. Les modifications seront publiées sur cette page avec la date de mise à jour.</p>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">7. Contact</h2>
                <p class="text-gray-600 leading-relaxed">Pour toute question concernant notre politique des cookies, contactez-nous à <a href="mailto:privacy@covoyages.laravel.cloud" class="text-blue-600 hover:text-blue-800 transition">privacy@covoyages.laravel.cloud</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection
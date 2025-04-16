@extends('main.index')
@section('title', "Politique de confidentialité")

@section('content')
<div class="bg-gray-50 py-12 pt-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête -->
        <div class="text-center mb-12">
            <h1 class="text-xl md:text-4xl font-bold text-gray-900 mb-4">Politique de confidentialité</h1>
            <p class="text-lg text-gray-600">Dernière mise à jour : {{date('d/m/Y')}}</p>
        </div>

        <!-- Contenu -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <!-- Introduction -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">1. Introduction</h2>
                <p class="text-gray-600 leading-relaxed">Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos données personnelles lorsque vous utilisez notre plateforme de covoiturage.</p>
            </div>

            <!-- Collecte des données -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">2. Collecte des données</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous collectons les informations suivantes :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Informations d'inscription (nom, email, numéro de téléphone)</li>
                        <li class="text-gray-600">Informations de profil (photo, préférences de voyage)</li>
                        <li class="text-gray-600">Données de localisation et d'itinéraire</li>
                        <li class="text-gray-600">Historique des trajets et évaluations</li>
                    </ul>
                </div>
            </div>

            <!-- Utilisation des données -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">3. Utilisation des données</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous utilisons vos données pour :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Faciliter la mise en relation entre conducteurs et passagers</li>
                        <li class="text-gray-600">Améliorer la sécurité et la qualité de nos services</li>
                        <li class="text-gray-600">Personnaliser votre expérience utilisateur</li>
                        <li class="text-gray-600">Vous informer des mises à jour et des offres pertinentes</li>
                    </ul>
                </div>
            </div>

            <!-- Protection des données -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">4. Protection des données</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos données :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Chiffrement des données sensibles</li>
                        <li class="text-gray-600">Contrôles d'accès stricts</li>
                        <li class="text-gray-600">Audits de sécurité réguliers</li>
                        <li class="text-gray-600">Formation de notre personnel</li>
                    </ul>
                </div>
            </div>

            <!-- Partage des données -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">5. Partage des données</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous ne partageons vos données qu'avec :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Les autres utilisateurs concernés par vos trajets</li>
                        <li class="text-gray-600">Nos prestataires de services techniques</li>
                        <li class="text-gray-600">Les autorités compétentes si requis par la loi</li>
                    </ul>
                </div>
            </div>

            <!-- Vos droits -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">6. Vos droits</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Conformément au RGPD, vous disposez des droits suivants :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Droit d'accès à vos données</li>
                        <li class="text-gray-600">Droit de rectification</li>
                        <li class="text-gray-600">Droit à l'effacement</li>
                        <li class="text-gray-600">Droit à la portabilité</li>
                        <li class="text-gray-600">Droit d'opposition</li>
                    </ul>
                </div>
            </div>

            <!-- Cookies -->
            <div class="mb-8">
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">7. Utilisation des cookies</h2>
                <div class="space-y-4">
                    <p class="text-gray-600 leading-relaxed">Nous utilisons des cookies pour :</p>
                    <ul class="list-disc pl-6 space-y-2">
                        <li class="text-gray-600">Améliorer votre expérience de navigation</li>
                        <li class="text-gray-600">Analyser l'utilisation du site</li>
                        <li class="text-gray-600">Personnaliser le contenu</li>
                    </ul>
                </div>
            </div>

            <!-- Contact -->
            <div>
                <h2 class="text-xl md:text-2xl font-semibold text-gray-900 mb-4">8. Contact</h2>
                <p class="text-gray-600 leading-relaxed">Pour toute question concernant notre politique de confidentialité, contactez-nous à <a href="mailto:privacy@covoyages.laravel.cloud" class="text-blue-600 hover:text-blue-800 transition">privacy@covoyages.laravel.cloud</a>.</p>
            </div>
        </div>
    </div>
</div>
@endsection
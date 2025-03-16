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
    <div class="container my-5 card card-xl-stretch p-10">
        <h3 class="mb-4">Conditions d'utilisation</h3>

        <h4>1. Introduction</h4>
        <p>Bienvenue sur notre plateforme. En utilisant nos services, vous acceptez les présentes conditions d'utilisation. 
        Si vous n'êtes pas d'accord, veuillez ne pas utiliser notre site.</p>

        <h4>2. Accès aux Services</h4>
        <p>Vous devez être âgé d'au moins 18 ans ou avoir l'autorisation d'un parent/tuteur pour utiliser notre plateforme.</p>
        <p>L'accès peut être temporairement suspendu en cas de maintenance ou d'amélioration du service.</p>

        <h4>3. Compte Utilisateur</h4>
        <ul>
            <li>Vous êtes responsable de la confidentialité de vos identifiants.</li>
            <li>Toute activité effectuée sous votre compte est sous votre responsabilité.</li>
            <li>Nous nous réservons le droit de suspendre ou supprimer un compte en cas d'abus ou de violation de ces conditions.</li>
        </ul>

        <h4>4. Utilisation Acceptable</h4>
        <ul>
            <li>Vous ne devez pas publier de contenu illégal, offensant ou trompeur.</li>
            <li>Vous ne devez pas utiliser notre plateforme à des fins frauduleuses ou malveillantes.</li>
            <li>Tout usage non conforme peut entraîner une suppression de votre accès sans préavis.</li>
        </ul>

        <h4>5. Propriété Intellectuelle</h4>
        <p>Tous les contenus, logos et éléments de la plateforme sont notre propriété ou sous licence.</p>
        <p>Vous ne pouvez pas copier, modifier ou redistribuer nos contenus sans autorisation écrite.</p>

        <h4>6. Limitation de Responsabilité</h4>
        <p>Nous ne garantissons pas que le service sera exempt d’erreurs ou d’interruptions.</p>
        <p>Nous ne sommes pas responsables des pertes de données ou dommages résultant de l’utilisation du service.</p>

        <h4>7. Modifications des Conditions</h4>
        <p>Nous nous réservons le droit de modifier ces conditions à tout moment.</p>
        <p>Vous serez informé des mises à jour et votre utilisation continue du service vaut acceptation des nouvelles conditions.</p>

        <h4>8. Contact</h4>
        <p>Si vous avez des questions, vous pouvez nous contacter à <a href="mailto:support@votresite.com">support@votresite.com</a>.</p>
    </div>
@endsection
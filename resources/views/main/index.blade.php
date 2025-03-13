<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../">
    <title>@yield('title', 'Covoiturage au Bénin - Trouvez ou proposez un trajet facilement')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta SEO -->
    <meta name="description"
        content="Trouvez ou proposez un trajet en covoiturage au Bénin. Économique, écologique et pratique, partagez votre voiture pour réduire les coûts et voyager sereinement." />
    <meta name="keywords"
        content="covoiturage Bénin, trajet partagé, voiture, transport, voyage pas cher, mobilité, partage de trajet, écologie, économie" />
    <meta name="author" content="TonNom" />
    <meta name="robots" content="index, follow" />

    <!-- Open Graph pour le partage Facebook -->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Covoiturage au Bénin - Trouvez ou proposez un trajet facilement" />
    <meta property="og:description"
        content="Voyagez à moindre coût grâce au covoiturage au Bénin. Trouvez un conducteur ou des passagers en quelques clics." />
    <meta property="og:image" content="https://ton-site.com/images/covoiturage.jpg" />
    <meta property="og:url" content="https://ton-site.com" />
    <meta property="og:site_name" content="Covoiturage Bénin" />

    <!-- Twitter Cards pour le partage sur Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Covoiturage au Bénin - Trouvez ou proposez un trajet facilement" />
    <meta name="twitter:description"
        content="Voyagez malin et économisez avec notre service de covoiturage au Bénin." />
    <meta name="twitter:image" content="https://ton-site.com/images/covoiturage.jpg" />
    <meta name="twitter:site" content="@TonCompteTwitter" />

    <!-- Balise canonique pour éviter le contenu dupliqué -->
    <link rel="canonical" href="https://ton-site.com" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/logos/logo-covoyage.png" />

    <!-- Fonts et styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

</head>


<body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.jpg)" 
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">

    @include('components.header')
    @include('components.footer')

    <script>var hostUrl = "assets/";</script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @yield('scripts')
</body>
<!--end::Body-->

</html>
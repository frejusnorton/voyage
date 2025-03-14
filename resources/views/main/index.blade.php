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
    <link rel="canonical" href="https://ton-site.com" />
    <link rel="shortcut icon" href="assets/media/logos/logo-covoyage.png" />
    <!-- Fonts et styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">

    <style>
        .gradient-background {
            width: 100%;
            height: 220px;
            background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @media (min-width: 1024px) {
            .gradient-background {
                height: 300px;
            }
        }
    </style>
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <div class="gradient-background"></div>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('components.header')
                <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
                    @yield('tolbar')
                </div>
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">

                    <div class="content flex-row-fluid" id="kt_content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.chat')

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
    </div>
    @include('components.footer')
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @yield('scripts')
    <script>var hostUrl = "assets/";</script>
</body>


</html>
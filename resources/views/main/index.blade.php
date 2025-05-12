<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-+..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        .pagination {
            @apply flex items-center space-x-1;
        }
        .pagination li {
            @apply inline-block;
        }
        .pagination a, .pagination span {
            @apply px-4 py-2 rounded-lg transition-all duration-200;
        }
        .pagination a {
            @apply bg-white text-gray-700 hover:bg-blue-600 hover:text-white hover:shadow-md;
        }
        .pagination .active span {
            @apply bg-blue-600 text-white shadow-md;
        }
        .pagination .disabled span {
            @apply bg-gray-100 text-gray-400 cursor-not-allowed;
        }
        .pagination .page-link {
            @apply flex items-center justify-center w-10 h-10;
        }

        /* Animations au scroll */
        .animate-on-scroll {
            transition: all 0.6s ease-out;
        }
        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInLeft {
            from { transform: translateX(-50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(50px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); opacity: 0.8; }
            70% { transform: scale(0.9); opacity: 0.9; }
            100% { transform: scale(1); opacity: 1; }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out;
        }

        .animate-slideInRight {
            animation: slideInRight 1s ease-out;
        }

        .animate-bounceIn {
            animation: bounceIn 1s ease-out;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        .delay-500 {
            animation-delay: 500ms;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    @include('components.loading')
    <div id="app" >
        @include('components.header')
        <main>
            @yield('content')
        </main>
        @include('components.footer')
    </div>
   
    @include('main.js')   
    @yield('scripts')   
    <script src="https://cdn.kkiapay.me/k.js" defer></script>
</body>
</html>

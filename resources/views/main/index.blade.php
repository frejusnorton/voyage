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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    {{-- @include('components.loading') --}}
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
    
    <script>
        function toggleUserMenu() {
            const menu = document.getElementById('userMenu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('opacity-0');
            menu.classList.toggle('scale-95');
            
            setTimeout(() => {
                if (!menu.classList.contains('hidden')) {
                    menu.classList.remove('opacity-0');
                    menu.classList.remove('scale-95');
                }
            }, 10);
        }

        document.addEventListener('click', (e) => {
            const menu = document.getElementById('userMenu');
            const userButton = e.target.closest('button[onclick="toggleUserMenu()"]');
            
            if (!userButton && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                menu.classList.add('opacity-0');
                menu.classList.add('scale-95');
            }
        });
    </script>
</body>
</html>

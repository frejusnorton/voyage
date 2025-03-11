<!--begin::Footer-->
<footer class="footer py-4 bg-light text-dark">
    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1 mb-3 mb-md-0">
            <span class="text-muted fs-3 fw-bold me-1">{{ date('Y') }}©</span>
            <a href="{{ url('/') }}" class="text-gray-800 text-hover-primary">Covoyage</a>
            <span class="text-muted">- Ensemble, voyageons mieux.</span>
        </div>
        <!--end::Copyright-->

        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 d-flex gap-3 mb-3 mb-md-0">
            <li class="menu-item">
                <a href="{{ url('/') }}" class="menu-link px-2">Accueil</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('trajet') }}" class="menu-link px-2">Trajets</a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link px-2">À propos</a>
            </li>
            <li class="menu-item">
                <a href="{{ route('conditions') }}" class="menu-link px-2">Conditions d'utilisation</a>
            </li>
        </ul>
        <!--end::Menu-->

        <!--begin::Social Links-->
        <div class="social-links d-flex gap-3 order-2 order-md-3">
            <a href="#" class="text-gray-600 hover:text-primary" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-primary" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-primary" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="#" class="text-gray-600 hover:text-primary" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <!--end::Social Links-->
    </div>
</footer>
<!--end::Footer-->

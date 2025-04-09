<div class="">
    <div class="row flex-lg-row-reverse align-items-center g-0 min-vh-100">
        <!-- Colonne de l'image -->
        <div class="col-12 col-sm-8 col-lg-6 h-100 d-flex align-items-stretch">
            <img src="{{ asset('assets/media/covoiturage.jpg') }}" 
                 alt="Covoiturage" 
                 class="d-block w-100 h-100 object-fit-cover rounded-3" 
                 loading="lazy">
        </div>
        
        <!-- Colonne du texte -->
        <div class="col-lg-6 d-flex flex-column justify-content-center px-4 py-5">
            <h1 class="display-5 fw-bold lh-1 mb-3">Rejoignez notre communauté de covoiturage</h1>
            <p class="lead mb-4">Découvrez une manière plus économique et écologique de voyager ! Trouvez des trajets près de chez vous et partagez des voyages avec d'autres utilisateurs. Ensemble, réduisons notre empreinte carbone tout en économisant !</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
                <a href="{{ route('trajet') }}" class="btn btn-light-primary ms-3">Voir les trajets</a>
            </div>
        </div>
    </div>
</div>  

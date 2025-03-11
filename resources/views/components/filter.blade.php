<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6155af3f2f180">
    <div class="px-7 py-5">
        <div class="fs-5 text-dark fw-bolder">Options</div>
    </div>

    <div class="separator border-gray-200"></div>

    <form action="{{ route('trajet') }}" method="POST" id="filter_trajet">
        @csrf
        <div class="px-7 py-5">
            <div class="mb-10">
                <label class="form-label fw-bold">Statut</label>
                <select class="form-select form-select-solid" name="statut" data-kt-select2="true"
                    data-placeholder="Sélectionner une option" data-dropdown-parent="#kt_menu_6155af3f2f180"
                    data-allow-clear="true">
                    <option></option>
                    <option value="disponible">Disponible</option>
                    <option value="complet">Complet</option>
                    <option value="annulé">Annulé</option>
                </select>
            </div>

            <div class="mb-10">
                <label class="form-label fw-bold">Ville de départ</label>
                <select class="form-select form-select-solid" name="ville_depart" data-kt-select2="true"
                    data-placeholder="Sélectionner une option" data-dropdown-parent="#kt_menu_6155af3f2f180"
                    data-allow-clear="true">
                    <option></option>
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-10">
                <label class="form-label fw-bold">Ville d'arrivée</label>
                <select class="form-select form-select-solid" name="ville_arrivee" data-kt-select2="true"
                    data-placeholder="Sélectionner une option" data-dropdown-parent="#kt_menu_6155af3f2f180"
                    data-allow-clear="true">
                    <option></option>
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-10">
                <label for="datetime" class="form-label fw-bold">Date et heure du trajet</label>
                <input type="datetime-local" class="form-control" id="datetime" name="datetime" >
            </div>

            <div class="form-group mb-10">
                <label for="montant" class="form-label fw-bold">Montant du trajet (en FCFA)</label>
                <input type="number" class="form-control" id="montant" name="montant" min="1000" max="50000" step="500"
                    placeholder="Entrez le montant" >
            </div>

            <div class="d-flex justify-content-end mb-10">
                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2">Annuler</button>
                <button type="submit" class="btn btn-sm btn-primary">Appliquer</button>
            </div>
        </div>
    </form>
</div>
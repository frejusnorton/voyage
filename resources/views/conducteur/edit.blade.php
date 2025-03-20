<div class="modal fade" id="edit_trajet" tabindex="-1" style="display: none;" aria-hidden="true" data-backdrop="static">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Modifier le trajet</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_export_users_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                    action="#">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Ville de départ</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="ville_depart"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Ex : Pahou">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Ville de d'arrivée</label>
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                    <input type="text" name="ville_arrive"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="Ex : Lokossa">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="row mb-6">
                       
                        <label class="col-lg-4 col-form-label  fw-semibold fs-6">Description</label>
                        <div class=" fv-row fv-plugins-icon-container">
                            <textarea id="trajet_description" name="description" class="form-control form-control-lg form-control-solid"
                                placeholder="Ex : Nous démarrons devant l'école public Godomey ! Soyez à l'heure"></textarea>
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="">Prix</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="fv-row fv-plugins-icon-container">
                            <input type="number" name="prix" class="form-control form-control-lg form-control-solid"
                                placeholder="Entrez le prix" step="0.01" min="0">
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group - Date de départ -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6 ">Date de départ</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class=" fv-row">
                            <input id="date_depart" type="date" name="date_depart"
                                class="form-control form-control-lg form-control-solid">
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group - Heure de départ -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6 ">Heure de départ</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class=" fv-row">
                            <input id="heure_depart" type="time" name="heure_depart"
                                class="form-control form-control-lg form-control-solid">
                        </div>

                    </div>

                    <!--begin::Input group - Heure de départ -->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6 ">Statut</label>
                        <!--end::Label-->
                        <select name="statut" data-control="select2" data-placeholder="Selectionner un statut"
                            data-hide-search="true"
                            class="form-select form-select-solid fw-bold select2-hidden-accessible"
                            data-select2-id="select2-data-15-lrgu" tabindex="-1" aria-hidden="true"
                            data-kt-initialized="1">
                            <option data-select2-id="select2-data-17-hs8m"></option>
                            <option value="disponible" data-select2-id="select2-data-135-2nqu">Disponible</option>
                            <option value="complet" data-select2-id="select2-data-136-i5y1">Complet</option>
                            <option value="annule" data-select2-id="select2-data-137-u52j">Annuler</option>
                        </select>
                    </div>

                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="">
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">
                                Enregistrer
                            </span>

                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
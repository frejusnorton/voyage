@extends('main.index')

@section('title', "S'inscrire sur Covoyage")

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(assets/media/illustrations/sigma-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid  pb-lg-20">
                <!--begin::Logo-->

                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form id="register-form" class="form w-100" method="post" action="{{ route('register') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Créez votre compte gratuitement</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Vous avez déjà un coompte?
                                <a href="{{ route('login') }}" class="link-primary fw-bolder">Se connecter ici</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
                            <a href="{{ route('redirectToGoogle') }}">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3" />Se
                                connecter avec Google
                            </a>


                        </button>
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OU</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group-->
                        <div class="row fv-row mb-7">
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Nom</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                    name="nom" />
                                <span class="text-danger error-nom"></span>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6">Prénom</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" placeholder=""
                                    name="prenom" />
                                <span class="text-danger error-prenom"></span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" placeholder=""
                                name="email" />
                            <span class="text-danger error-email"></span>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">+229</span>
                                <input type="tel" name="telephone"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Numéro de téléphone">

                            </div>
                            <span class="text-danger error-telephone"></span>
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Sexe</label>
                            <select class="form-control form-control-lg form-control-solid" name="sexe">
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                            </select>
                            <span class="text-danger error-sexe"></span>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6">Vous etes ?</label>
                            <select class="form-control form-control-lg form-control-solid" name="type">
                                <option value="passager">Passager</option>
                                <option value="conducteur">Conducteur</option>
                            </select>
                            <span class="text-danger error-type"></span>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Mot de passe</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="password" autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                    <span class="text-danger error-password"></span>
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Utilisez 8 caractères ou plus avec un mélange de lettres
                                minuscule,majuscule et de chiffre.
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-5">
                            <label class="form-label fw-bolder text-dark fs-6">Confirmer mot de passe</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password_confirmation" autocomplete="off" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="conditions" value="1" />
                                <span class="form-check-label fw-bold text-gray-700 fs-6">J'accepte
                                    <a href="{{ route('conditions') }}" class="ms-1 link-primary">les conditions
                                        d'utilisations</a>.</span>
                            </label>
                            <span class="text-danger error-conditions"></span>
                        </div>

                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">S'inscrire</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Authentication - Sign-up-->
    </div>
@endsection

@section('scripts')
    @include('auth.register.js')
@endsection

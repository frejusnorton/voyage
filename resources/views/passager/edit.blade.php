@extends('main.index')
@section('title', 'Modifier mes informations')

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start   ">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img alt="Avatar"
                                    src="{{ Auth::user()->profil_img ? Auth::user()->profil_img : asset('assets/media/avatars/blank.png') }}" />
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                </div>
                            </div>
                        </div>
                        <!--end::Pic-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">
                                    <!--begin::Name-->
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="text-gray-900 text-hover-primary fs-4 fw-bold me-1">{{$user->nom}}
                                            {{$user->prenom}}</span>
                                        <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                    class="path1"></span><span class="path2"></span></i></a>
                                    </div>
                                    <!--end::Name-->

                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">

                                        <span href="#"
                                            class="d-flex align-items-center text-gray-500 text-hover-primary mb-2 fs-4">
                                            <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span
                                                    class="path2"></span></i>{{$user->email}}
                                        </span>

                                    </div>
                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <span class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                            <i class="ki-duotone ki-user fs-4"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                            @if($user->type == 'passager')
                                                <span class="fs-5 fw-bold">Passager</span>
                                            @elseif($user->type == 'conducteur')
                                                <span class="fs-5 fw-bold">Conducteur</span>
                                            @else
                                                Rôle inconnu
                                            @endif
                                        </span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Title-->

                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                    data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                                    data-kt-initialized="1">00</div>
                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-500">Mes trajets effectués</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>
            </div>
            <!--end::Navbar-->
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                    aria-controls="kt_account_profile_details">

                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Modifier mes informations</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->

                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="edit_passager_profil" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post"
                        action="{{ route('passager.edit', ['user' => $user->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body border-top p-9">
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo de profil</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url('{{ Auth::user()->profil_img ? asset(Auth::user()->profil_img) : asset('/metronic8/demo2/assets/media/svg/avatars/blank.svg') }}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url('{{ Auth::user()->profil_img ? asset(Auth::user()->profil_img) : asset('/metronic8/demo2/assets/media/avatars/300-1.jpg') }}')">
                                        </div>
                                        <!--end::Preview existing avatar-->
                                
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                                            data-bs-original-title="Change avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="profil_img" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                            data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Cancel-->
                                
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                                            data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                </div>
                                
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Nom</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text" name="nom"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Nom" value="{{$user->nom}}">
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
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Prénom</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text" name="prenom"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Prenom" value="{{$user->prenom}}">
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
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-semibold fs-6">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="email" name="email"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Email" value="{{$user->email}}">
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
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Sexe</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <select name="sexe"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">
                                                <option value="homme" {{ $user->sexe == 'homme' ? 'selected' : '' }}>Homme
                                                </option>
                                                <option value="femme" {{ $user->sexe == 'femme' ? 'selected' : '' }}>Femme
                                                </option>
                                            </select>

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Téléphone</span>
                                </label>

                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Input group-->
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">+229</span>
                                        <input type="tel" name="telephone"
                                            class="form-control form-control-lg form-control-solid"
                                            placeholder="Numéro de téléphone" value="{{ $user->telephone }}">
                                    </div>
                                    <!--end::Input group-->
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Adresse</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="text" name="adresse"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Addresse" value="{{$user->adresse}}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Date de naissance</label>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                            <input type="date" name="naissance"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="Date de naissance" value="{{ $user->naissance }}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary">Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @include('passager.js')
@endsection
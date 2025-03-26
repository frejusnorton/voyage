@extends('main.index')
@section('title', 'Paramètre de compte')

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
                                <img alt="Photo de profil"
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
                                                    data-kt-initialized="1">{{$trajets}}</div>
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
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Détails du profil</h3>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Action-->
                    <a href="{{ route('passager.edit', ['user' => Auth::id()]) }}) }}"
                        class="btn btn-sm btn-primary align-self-center">Modifier</a>
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->

                <!--begin::Card body-->
                <div class="card-body p-9">

                    <div class="row mb-7">
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Photo de profil</label>
                            <!--end::Label-->

                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url('{{ Auth::user()->profil_img ? asset(Auth::user()->profil_img) : asset('/metronic8/demo2/assets/media/svg/avatars/blank.svg') }}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url('{{ Auth::user()->profil_img ? asset(Auth::user()->profil_img) : asset('/metronic8/demo2/assets/media/avatars/300-1.jpg') }}')">
                                    </div>
                                </div>
                                <!--end::Image input-->
                            </div>

                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>

                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">Nom</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 ">
                            @isset($user->nom)
                                <span class="fw-bold fs-6 text-gray-800 text-muted">{{$user->nom}} </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800 text-muted">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">Prénom</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            @isset($user->prenom)
                                <span class="fw-bold fs-6 text-gray-800">{{$user->prenom}} </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">E-mail</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            @isset($user->email)
                                <span class="fw-bold fs-6 text-gray-800">{{$user->email}} </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group--> <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">Sexe</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            @isset($user->sexe)
                                <span class="fw-bold fs-6 text-gray-800">{{$user->sexe}} </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">
                            Téléphone

                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i> </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 text-gray-800 me-2">{{$user->telephone}} </span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">Adresse</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            @isset($user->adresse)
                                <span class="fw-bold fs-6 text-gray-800">{{$user->adresse}} </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>



                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold fs-3">Date de naissance</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            @isset($user->naissance)
                                <span
                                    class="fw-bold fs-6 text-gray-800">{{\Carbon\Carbon::parse($user->naissance)->format('d/m/Y') }}
                                </span>
                            @else
                                <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                            @endisset
                        </div>
                        <!--end::Col-->
                    </div>

                    @if ($user->type === 'conducteur')
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-semibold fs-3">Permis de conduire</label>
                            <div class="col-lg-8 fv-row">
                                @isset($user->permis_de_conduire_numero)
                                    <span class="fw-bold fs-6 text-gray-800">{{$user->permis_de_conduire_numero}}</span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-semibold fs-3">Date d'obtention du permis</label>
                            <div class="col-lg-8 fv-row">
                                @isset($user->permis_de_conduire_date)
                                    <span
                                        class="fw-bold fs-6 text-gray-800">{{ \Carbon\Carbon::parse($user->permis_de_conduire_date)->format('d/m/Y') }}</span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-semibold fs-3">Carte d'identité</label>
                            <div class="col-lg-8 fv-row">
                                @isset($user->carte_identite_numero)
                                    <span class="fw-bold fs-6 text-gray-800">{{$user->carte_identite_numero}}</span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                        </div>
                        <div class="row mb-7">
                            <label class="col-lg-4 fw-semibold fs-3">Date d'obtention de la carte</label>
                            <div class="col-lg-8 fv-row">
                                @isset($user->carte_identite_date)
                                    <span
                                        class="fw-bold fs-6 text-gray-800">{{ \Carbon\Carbon::parse($user->carte_identite_date)->format('d/m/Y') }}</span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                        </div>
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold fs-3">Photo du permis</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                @isset($user->photo_permis)
                                    <span class="fw-bold fs-6 text-gray-800">{{$user->photo_permis}} </span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                            <!--end

                                                                                                ::Col-->
                        </div>

                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold fs-3">Photo de la carte d'identité</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                @isset($user->photo_cni)
                                    <span class="fw-bold fs-6 text-gray-800">{{$user->photo_cni}} </span>
                                @else
                                    <span class="fw-bold fs-6 text-gray-800">Non renseigné</span>
                                @endisset
                            </div>
                            <!--end::Col-->
                        </div>


                    @endif
                </div>
                <!--end::Card body-->
            </div>
            <!--end::details View-->

            <div class="card  ">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                    data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Désactiver mon compte</h3>
                    </div>
                </div><!--end::Card header-->

                <!--begin::Content-->
                <div id="kt_account_settings_deactivate" class="collapse show">
                    <!--begin::Form-->
                    <form id="supprimer_compte" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('suppression', ['user' => $user->id]) }}">
                        @csrf
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Notice-->
                            <div
                                class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                        class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <!--begin::Content-->
                                    <div class="fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Vous êtes en train de supprimer votre compte</h4>

                                        <div class="fs-6 text-gray-700"><a class="fw-bold" href="#">En savoir plus</a></div>
                                    </div>
                                    <!--end::Content-->
                                </div>

                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->

                            <!--begin::Form input row-->
                            <div class="form-check form-check-solid fv-row fv-plugins-icon-container">
                                <input name="confirmation" class="form-check-input" type="checkbox"
                                  >
                                <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">Je confirme la
                                    suppression de mon compte
                                </label>
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Form input row-->
                        </div>
                        <!--end::Card body-->

                        <!--begin::Card footer-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-danger fw-semibold">Supprimer mon compte </button>
                        </div>
                        <!--end::Card footer-->

                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
        </div>
        <!--end::Post-->
    </div>
@endsection
@section('scripts')
    @include('passager.js')
@endsection
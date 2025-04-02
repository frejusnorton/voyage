@extends('main.index')
@section('title', "Mon réservations")

@section('tolbar')


@endsection

@section('content')
    @dump($user)
    <div class="content flex-row-fluid" id="kt_content">

        <!--begin::Navbar-->
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
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$user->nom}}
                                        {{$user->prenom}}</a>
                                    <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                </div>
                                <!--end::Name-->
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

                            </div>
                            <!--end::User-->


                            <!--end::Actions-->
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
                                                data-kt-initialized="1">{{$nbresTrajet}}</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Trajet publié</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                data-kt-initialized="1">%60</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Progress-->
                            <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                    <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                    <span class="fw-bold fs-6">50%</span>
                                </div>

                                <div class="h-5px mx-3 w-100 bg-light mb-3">
                                    <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Progress-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{ route('conducteur.espace') }}">
                            Paramètre </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{ route('trajet.conducteur') }}">
                            Mes publications </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="/metronic8/demo2/account/security.html">
                            Sécurité </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active "
                            href="{{ route('conducteur.reservation') }}">
                            Demande de réservation </a>
                    </li>
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
        <!--end::Navbar-->
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Demande de réservation</h3>
                </div>
            </div>
            <!--begin::Card header-->
            <div class="card-body border-top px-9 py-9">
                @foreach ($reservations as $reservation)
                @php
                    $trajet = $reservation->trajet; 
                    $passager = $reservation->user; 
                @endphp
                <div class="col-12 col-md-6 col-xl-4 mb-4">
                    <div class="card card-xl-stretch">
                        <!-- Header -->
                        <div class="card-header d-flex justify-content-between align-items-center border-0 mt-4">
                            <h3 class="card-title">
                                <span class="fw-bold mb-2 text-gray-900">
                                    {{ $trajet->villeDepart->nom }} →
                                    {{ $trajet->villeArrive->nom }}
                                </span>
                            </h3>
                            <span class="badge bg-primary fs-6 py-2 px-3">
                                {{ number_format($trajet->prix, 0, ',', ' ') }} FCFA
                            </span>
                        </div>
            
                        <!-- Body -->
                        <div class="card-body pt-5">
                            <div class="timeline-label">
                                <!-- Date & Heure -->
                                <div class="timeline-item d-flex align-items-center mb-4">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">Départ</div>
                                    <div class="timeline-badge mx-4">
                                        <i class="fa fa-calendar-alt text-primary fs-4"></i>
                                    </div>
                                    <div class="timeline-content text-muted ps-10">
                                        {{ \Carbon\Carbon::parse($trajet->heure_depart)->locale('fr')->isoFormat('dddd, D MMMM YYYY HH:mm') }}
                                    </div>
                                </div>
            
                                <!-- Statut -->
                                <div class="timeline-item d-flex align-items-center mb-4">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">Statut</div>
                                    <div class="timeline-badge mx-4">
                                        <i class="fa fa-info-circle text-primary fs-4"></i>
                                    </div>
                                    <div class="timeline-content fw-bold text-gray-800 ps-10">
                                        <span
                                            class="badge badge-light-{{ $reservation->status == 'confirmer' ? 'success' : ($reservation->status == 'annuler' ? 'danger' : 'warning') }}">
                                            {{ ucfirst($reservation->status) }}
                                        </span>
                                    </div>
                                </div>
            
                                <!-- Passager -->
                                <div class="timeline-item d-flex align-items-center mb-4">
                                    <div class="timeline-label fw-bold text-gray-800 fs-6">Passager</div>
                                    <div class="timeline-badge mx-4">
                                        <i class="fa fa-user text-info fs-4"></i>
                                    </div>
                                    <div class="timeline-content text-muted ps-10">
                                        {{ $passager->nom ?? 'Inconnu' }} {{ $passager->prenom ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Body -->
                    </div>
                </div>
            @endforeach
            

                <div class="mt-6">
                    {{ $reservations->links('pagination.custom') }}
                </div>
            </div>

            <!--end::Card body-->
        </div>

    </div>
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
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
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
                        <input name="confirmation" class="form-check-input" type="checkbox">
                        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">Je confirme la
                            suppression de mon compte
                        </label>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
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
@endsection
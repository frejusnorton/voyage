@extends('main.index')
@section('title', 'Paiement')
@section('content')

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header card-header-stretch pb-0">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="m-0">Faire un paiement sur Covoyage</h3>
            </div>
            <!--end::Title-->
        </div>
        <!--end::Card header-->

        <!--begin::Tab content-->
        <div id="kt_billing_payment_tab_content" class="card-body tab-content">
            <!--begin::Tab panel-->
            <div class="tab-pane fade show active">
                <!--begin::Title-->
                <h3 class="mb-5">Moyens de paiement</h3>
                <!--end::Title-->

                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                    <!--begin::Col-->
                    <div class="col-xl-6" data-kt-billing-element="card">
                        <!--begin::Card-->
                        <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                            <!--begin::Info-->
                            <div class="d-flex flex-column py-2">
                                <!--begin::Owner-->
                                <div class="d-flex align-items-center fs-4 fw-bold mb-5 text-warning">
                                    MTN MOMO
                                    {{-- <img src="{{ asset('assets/media/illustrations/mtn.png') }}" alt=""
                                        class="w-10 h-10 rounded-3"> --}}
                                </div>
                                <!--end::Owner-->

                                <!--begin::Wrapper-->

                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="fs-4 fw-bold">Numéro de téléphone</div>
                                        <div class="fs-6 fw-semibold text-gray-500">{{$phoneNumber}}</div>
                                        <input type="email" class="form-control form-control-solid mt-10"
                                            placeholder="Votre numéro de paiement" value="{{  $phoneNumber  }}" />
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Wrapper-->
                            </div>

                            <!--end::Info-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->



                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">

                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-warning mb-5">Montant à payer {{$montant}}</h4>
                                    <h4 class="text-gray-900 fw-bold">Avertissement : Veuillez vérifier les conditions avant
                                        de confirmer le paiement</h4>



                                    <div class="fs-6 text-gray-700 pe-7">
                                        Avant de finaliser votre paiement, nous vous invitons à lire attentivement nos <a
                                            href="#" class="fw-bold me-1">conditions d'utilisation</a> ainsi que notre <a
                                            href="#" class="fw-bold me-1">politique de remboursement</a>. En procédant au
                                        paiement, vous acceptez ces termes et conditions.
                                    </div>
                                </div>
                                <!--end::Content-->


                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <div>
                        <kkiapay-widget sandbox="true" amount="{{ $montant }}" key="{{ env('KKIAPAY_PUBLIC_KEY') }}"
                            callback="{{ route('paiement.callback', ['reservation' => $reservation->id]) }}">
                        </kkiapay-widget>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Tab panel-->


        </div>
        <!--end::Tab content-->
    </div>
@endsection
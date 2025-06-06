@extends('main.index')

@section('title', 'Erreur 404')

@section('content')
    <div class="d-flex flex-column flex-center flex-column-fluid pt-20">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center text-center p-10">
            <!--begin::Wrapper-->
            <div class="card card-flush w-lg-650px py-5">
                <div class="card-body py-15 py-lg-20">

                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">
                        Oups! Erreur 404
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="fw-semibold fs-6 text-gray-500 mb-7">
                        La page à laquelle vous essayer d'accéder n'existe pas
                    </div>
                    <!--end::Text-->

                    {{-- <!--begin::Illustration-->
                    <div class="mb-3">
                        <img src="/metronic8/demo2/assets/media/auth/404-error.png" class="mw-100 mh-300px theme-light-show"
                            alt="">
                        <img src="/metronic8/demo2/assets/media/auth/404-error-dark.png"
                            class="mw-100 mh-300px theme-dark-show" alt="">
                    </div> --}}
                    <!--end::Illustration-->

                    <!--begin::Link-->
                    <div class="mb-0">
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Retour</a>
                    </div>
                    
                    <!--end::Link-->

                </div>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
@endsection
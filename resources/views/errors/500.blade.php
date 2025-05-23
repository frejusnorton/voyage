@extends('main.index')

@section('title', 'Erreur 500')

@section('content')
    <div class="d-flex flex-column flex-center flex-column-fluid pt-20">
        <!--begin::Content-->
        <div class="d-flex flex-column flex-center text-center p-10">
            <!--begin::Wrapper-->
            <div class="card card-flush w-lg-650px py-5">
                <div class="card-body py-15 py-lg-20">

                    <!--begin::Title-->
                    <h1 class="fw-bolder fs-2qx text-gray-900 mb-4">
                        Erreur système
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="fw-semibold fs-6 text-gray-500 mb-7">
                        Une erreur est survenue,veuillez réessayer dans un moment
                    </div>
                    <!--end::Text-->
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
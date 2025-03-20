@extends('main.index')
@section('title', 'Réservation')

@section('tolbar')
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-column flex-md-row align-items-md-center flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-md-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Mes réservations</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Recherche-->
        <div class="d-flex justify-center md:justify-start w-100 mt-4">
            <input name="search" type="text" id="search" data-kt-user-table-filter="search"
                class="form-control form-control-solid w-100 mw-600px ps-13 filter" placeholder="Rechercher par statut"
                data-user-id="{{ auth()->id() }}">
        </div>
        <!--end::Recherche-->
    </div>
    <!--end::Container-->

@endsection

@section('content')
    <div class="content flex-row-fluid" id="reservation">
        @include('reservation.datapart')
    </div>
@endsection

@section('scripts')
    @include('reservation.js')
@endsection
@extends('main.index')
@section('title', 'Listes des trajets disponibles')

@section('tolbar')
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-column flex-md-row align-items-md-center flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-md-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bolder my-1 fs-3">Trajets</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->

        <!--begin::Actions-->
        <div class="d-flex align-items-center justify-content-between ms-md-auto">
            <!--begin::Wrapper pour le filtre-->
            <div class="me-4">
                <a href="#"
                    class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filtrer
                </a>
                @include('components.filter')
            </div>

            <!--begin::Wrapper pour le bouton Publier-->
            <div>
                <a href="{{ route('trajet.create') }}" class="btn btn-bg-white btn-active-color-primary" {{--
                    data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" --}} id="kt_toolbar_primary_button">Publiez
                    un trajet</a>
            </div>
        </div>
        <!--end::Actions-->

        <!--begin::Recherche-->
        <div class="d-flex justify-center md:justify-start w-100 mt-4">
            <input name="search" type="text" id="search" data-kt-user-table-filter="search"
                class="form-control form-control-solid w-100 mw-600px ps-13 filter" placeholder="Rechercher un trajet">
        </div>
        <!--end::Recherche-->
    </div>
    <!--end::Container-->

@endsection

@section('content')
    <div class="content flex-row-fluid" id="trajet">
        @include('trajet.datapart')
    </div>
@endsection

@section('scripts')
    @include('trajet.js')
@endsection
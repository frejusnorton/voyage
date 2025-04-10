@extends('main.index')
@section('title', 'Réservation')


@section('content')
    <div  id="reservation" class="pt-20">
        @include('reservation.datapart')
    </div>
@endsection

@section('scripts')
    @include('reservation.js')
@endsection
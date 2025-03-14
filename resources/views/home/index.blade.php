@extends('main.index')

@section('title', 'Acceuil | Covoyage')

@section(section: 'content')
{{-- @dump($notifications) --}}
@include('components.heroSection')
   {{-- @include('components.a-propos')
   @include('components.contact') --}}
@endsection
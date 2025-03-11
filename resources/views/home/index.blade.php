@extends('main.index')

@section('title', 'Acceuil | Covoyage')

@section('content')
@include('components.heroSection')
   @include('components.a-propos')
   @include('components.contact')
@endsection
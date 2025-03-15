@extends('main.index')

@section('title', 'Acceuil | Covoyage')

@section(section: 'content')
@include('components.cookie')
{{-- @dump($notifications) --}}
@include('components.heroSection')
 @include('components.a-propos')
   @include('components.contact') 
@endsection
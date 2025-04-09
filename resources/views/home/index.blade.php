@extends('main.index')

@section('title', 'Acceuil | Covoyage')
@section(section: 'content')
    @include('components.cookie')
    @include('components.heroSection')
    @include('components.feature')
    @include('components.questions')
    @include('components.contact')
@endsection

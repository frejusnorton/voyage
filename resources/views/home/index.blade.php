 @extends('main.index')

@section('title', 'Acceuil | Covoyage')
@section(section: 'content')
    @include('components.cookie')
    @include('components.heroSection')
    @include('components.services')
    @include('components.testimonials')
    @include('components.faq')
    @include('components.contact')
@endsection 


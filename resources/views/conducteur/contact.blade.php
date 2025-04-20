@extends('main.index')

@section('content')
<div class="container mx-auto px-4 py-12 pt-20">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="p-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 mb-4">
                    <i class="fas fa-comments text-blue-600 text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Messagerie en cours de développement</h2>
                <p class="text-gray-600 mb-6">Nous travaillons actuellement sur une fonctionnalité de messagerie en temps réel pour faciliter vos échanges. En attendant, vous pouvez contacter le conducteur directement via WhatsApp.</p>
            </div>

            <div class="text-center">
                <a href="https://wa.me/2290190775682" target="_blank" 
                   class="inline-flex items-center justify-center space-x-2 bg-green-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <i class="fab fa-whatsapp text-2xl"></i>
                    <span>Contacter via WhatsApp</span>
                </a>
            </div>

            <div class="mt-8 text-center text-sm text-gray-500">
                <p>Nous vous remercions de votre compréhension pendant que nous améliorons nos services.</p>
            </div>
        </div>
    </div>
</div>
@endsection
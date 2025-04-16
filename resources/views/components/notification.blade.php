
@props(['type' => 'success', 'message' => ''])

<div x-data="{ show: true }"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform translate-y-2"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 transform translate-y-0"
     x-transition:leave-end="opacity-0 transform translate-y-2"
     x-init="setTimeout(() => show = false, 5000)"
     class="fixed top-4 right-4 max-w-sm w-full z-[9999]">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="flex items-center p-4 {{ $type === 'success' ? 'bg-green-50' : ($type === 'error' ? 'bg-red-50' : 'bg-blue-50') }}">
            <div class="flex-shrink-0">
                @if($type === 'success')
                    <i class="fas fa-check-circle text-green-500 text-xl"></i>
                @elseif($type === 'error')
                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                @else
                    <i class="fas fa-info-circle text-blue-500 text-xl"></i>
                @endif
            </div>
            <div class="ml-3 w-0 flex-1">
                <p class="text-sm font-medium {{ $type === 'success' ? 'text-green-800' : ($type === 'error' ? 'text-red-800' : 'text-blue-800') }}">
                    {{ $message }}
                </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex">
                <button @click="show = false" class="inline-flex text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>

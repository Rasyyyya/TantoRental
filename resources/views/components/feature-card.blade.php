<div class="bg-white rounded-xl shadow-lg p-6 max-w-sm">
    <div class="h-1 bg-violet-500 -mx-6 -mt-6 rounded-t-xl"></div>
    <div class="flex flex-col items-center text-center">
        <img src="{{ $image }}" alt="" class="w-16 h-16 my-4">
        <h5 class="text-lg font-bold mb-3">{{ $title }}</h5>
        <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
            {{ $description }}
        </p>
    </div>
</div>
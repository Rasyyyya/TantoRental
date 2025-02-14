@props(['icon', 'title', 'description'])

<div class="bg-white rounded-xl shadow-lg p-6 max-w-sm">
    <div class="h-1 bg-violet-500 -mx-6 -mt-6 rounded-t-xl"></div>
    <div class="flex flex-col items-center text-center">
        <i class="{{ $icon }} text-4xl text-violet-500 my-4"></i>
        <h5 class="text-lg font-bold mb-3">{{ $title }}</h5>
        <p class="text-gray-600 text-sm leading-relaxed max-w-xs">
            {{ $description }}
        </p>
    </div>
</div>

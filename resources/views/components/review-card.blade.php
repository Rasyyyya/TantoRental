<div class="bg-gray-50 rounded-3xl p-10 shadow-lg hover:shadow-xl transition-shadow duration-300">
    <p class="text-xl mb-6">
        {{ $content }}
        <span class="text-violet-500 font-semibold">TantoRental</span>
    </p>
    <div class="flex items-center gap-4">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-12 h-12 rounded-full"/>
        <h5 class="text-xl font-bold">{{ $name }}</h5>
    </div>
</div>


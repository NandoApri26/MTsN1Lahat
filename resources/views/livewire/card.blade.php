<div class="flex flex-col w-full cursor-pointer bg-white shadow-lg rounded-lg space-y-4">
    <div class="">
        <img src="{{ asset('/assets/card/card.jpeg') }}" alt="First Card" class="w-full h-64 rounded-t-lg">
    </div>
    <div class="flex flex-col px-8 py-2 space-y-2">
        <a href="">
            <h1 class="font-semibold text-lg text-gray-900 hover:text-celadon-500">
                {{ $title }}
            </h1>
        </a>
        <h1 class="font-medium text-sm text-gray-800">{{ $date }}</h1>
        <p class="text-gray-600 font-normal">
            {{ $content }}
        </p>
        <x-button subject="Lihat selengkapnya"/>
    </div>
</div>

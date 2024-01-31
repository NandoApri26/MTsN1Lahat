@props([
    'total' => '',
    'title' => '',
    'costotal' => '',
    'costitle' => '',
])
<div {{
            $attributes->merge([
                'class' => 'flex flex-col w-fit rounded-lg cursor-pointer bg-whip-500 items-center py-12 px-20 space-y-5'
                ])
    }}>
    {{ $slot }}
    <div class="flex flex-col text-celadon-500 items-center">
        <h1 class="text-3xl font-bold {{ $costotal }}">
            {{ $total }}
        </h1>
        <h1 class="font-semibold text-xl {{ $costitle }}">
            {{ $title }}
        </h1>
    </div>
</div>

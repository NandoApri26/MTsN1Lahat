@props([
    'total' => '',
    'title' => '',
    'costotal' => '',
    'costitle' => '',
])
<div {{
            $attributes->merge([
                'class' => 'flex flex-col w-full items-center py-12 px-20'
                ])
    }}>
    {{ $slot }}
    <h1 class="text-3xl font-bold text-celadon-500 {{ $costotal }}">
        {{ $total }}
    </h1>
    <span class="font-semibold text-xl text-celadon-500 {{ $costitle }}">
            {{ $title }}
        </span>
</div>

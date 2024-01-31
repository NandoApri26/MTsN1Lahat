@props([
    'link' => '',
    'subject' => '',

])
<div {{
    $attributes->merge([
        'class' => 'text-center p-2 bg-whip-500 text-gray-600 rounded-md hover:bg-celadon-500 hover:text-gray-50'
    ])
}}>
    <a href="" class="">
        {{ $subject }}
    </a>
</div>

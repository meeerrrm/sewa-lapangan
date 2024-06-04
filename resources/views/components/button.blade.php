@props(['color' => NULL,'close'=> NULL])

@php
    $buttonClasses = [
        "danger" => "bg-rose-600 hover:bg-rose-400 focus:bg-rose-400 active:bg-rose-400 focus:ring-bg-rose-400",
        "warning" => "bg-orange-600 hover:bg-orange-400 focus:bg-orange-400 active:bg-orange-400 focus:ring-bg-orange-400",
        "primary" => "bg-cyan-600 hover:bg-cyan-400 focus:bg-cyan-400 active:bg-cyan-400 focus:ring-bg-cyan-400",
        "default" => "bg-gray-600 hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-400 focus:ring-bg-gray-400",
        "success" => "bg-lime-600 hover:bg-lime-400 focus:bg-lime-400 active:bg-lime-400 focus:ring-bg-lime-400",
    ];

    $disabledClasses = "disabled:bg-gray-400";
    
    $disabledItem = ($close == true)? 'disabled' : '';
    $selectedColor = $buttonClasses[$color] ?? $buttonClasses['default'];
@endphp

<button {{ $disabledItem }} {{ $attributes->merge(['class' => "inline-flex justify-center items-center px-4 py-2 $disabledClasses $selectedColor border border-transparent rounded-md font-semibold text-xs text-white uppercase focus:outline-none focus:ring-2  focus:ring-offset-2 transition ease-in-out duration-150"]) }}>{{ $slot }}</button>

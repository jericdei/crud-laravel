@props(['type' => 'button', 'variant' => 'primary'])

@php
    $buttonStyles = match ($variant) {
        'text' => '',
        default
            => 'rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 disabled:cursor-not-allowed disabled:bg-blue-300 disabled:text-zinc-700',
        'error'
            => 'rounded bg-red-500 px-4 py-2 font-bold text-white hover:bg-red-700 disabled:cursor-not-allowed disabled:bg-red-300 disabled:text-zinc-700',
    };
@endphp

@if ($type === 'link')
    <a
        wire:navigate
        {{ $attributes }}
    >
        <button class="{{ $buttonStyles }}">{{ $slot }}</button>
    </a>
@else
    <button
        class="{{ $buttonStyles }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </button>
@endif

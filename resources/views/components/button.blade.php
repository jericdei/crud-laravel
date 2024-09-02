@props(["type" => "button"])

@if ($type === "link")
    <a {{ $attributes }}>
        <button>{{ $slot }}</button>
    </a>
@else
    <button {{ $attributes }}>
        {{ $slot }}
    </button>
@endif

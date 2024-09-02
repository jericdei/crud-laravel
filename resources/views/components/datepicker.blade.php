@props([
    'name' => null,
    'label' => null,
    'model' => null,
])

<label
    :for="$name"
    class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white"
>{{ $label }}</label>

<div class="relative">
    <div
        class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
        <svg
            class="h-4 w-4 text-zinc-500 dark:text-zinc-400"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
            />
        </svg>
    </div>

    <input
        datepicker
        datepicker-autohide
        datepicker-format="yyyy-mm-dd"
        :id="$name"
        :name="$name"
        type="text"
        class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 ps-10 text-sm text-zinc-900 focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
        placeholder="Select date"
        wire:model="{{ $model }}"
        @change-date.camel="@this.set('{{ $model }}', $event.target.value)"
        {{ $attributes }}
    >
</div>

@error($name)
    <small class="text-red-500">{{ $message }}</small>
@enderror

@props([
    "type" => "text",
    "name" => null,
    "label" => null,
])

<div>
    <label
        :for="$name"
        class="mb-2 block text-sm font-medium text-zinc-900 dark:text-white"
    >{{ $label }}</label>

    <input
        type="text"
        :id="$name"
        class="block w-full rounded-lg border border-zinc-300 bg-zinc-50 p-2.5 text-sm text-zinc-900 focus:border-blue-500 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700 dark:text-white dark:placeholder-zinc-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
        {{ $attributes }}
    />

    @error($name)
        <small class="text-red-500">{{ $message }}</small>
    @enderror
</div>

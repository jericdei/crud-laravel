@props(['title' => 'Laravel'])

<!DOCTYPE html>
<html
    lang="en"
    class="dark"
>

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>{{ $title }}</title>
    <livewire:styles />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="min-h-screen bg-zinc-100 text-zinc-900 dark:bg-zinc-900 dark:text-zinc-100"
>
    <div class="container mx-auto px-8 py-16">
        <div class="flex justify-between">
            <h1 class="mb-8 text-3xl font-bold">{{ $title }}</h1>

            {{ $actions ?? null }}
        </div>

        {{ $slot }}
    </div>

    <livewire:scripts />
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Laravel" }}</title>
    <livewire:styles />
    @vite('resources/css/app.css')
</head>
<body class="bg-zinc-100 dark:bg-zinc-900">
    {{ $slot }}
    <livewire:scripts />
</body>
</html>

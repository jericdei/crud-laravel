@props(["title" => "Laravel"])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <livewire:styles />
    @vite("resources/css/app.css", "resources/js/app.js")
</head>

<body class="bg-zinc-100 dark:bg-zinc-900 dark:text-zinc-100">
    <div class="container mx-auto px-8 py-16">{{ $slot }}</div>
    <livewire:scripts />
</body>

</html>

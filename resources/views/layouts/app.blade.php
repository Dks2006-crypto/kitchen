<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}-{{config('app.name')}}</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="/src/styles.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    @include('partials.header')
    {{$slot}}
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>

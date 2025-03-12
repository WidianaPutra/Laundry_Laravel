<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $slot }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/tailwindcss.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/index.css">
</head>

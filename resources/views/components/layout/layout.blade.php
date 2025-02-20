<!DOCTYPE html>
<html lang="en">
<x-header>{{ $title }}</x-header>

<body>

    @if ($navbar == 'show')
        <x-navbar></x-navbar>
    @endif
    <div class="">
        {{ $slot }}
    </div>

    <script src="./libs/tailwindcss.js"></script>

</body>

</html>

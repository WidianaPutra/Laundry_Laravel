<!DOCTYPE html>
<html lang="en">
<x-header>{{ $title }}</x-header>


<body class="bg-gray-50">

    @if ($navbar == 'show')
        <x-navbar></x-navbar>
    @endif
    <div>
        {{ $slot }}
    </div>

    {{-- <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script> --}}
    {{-- <script src="./js/global.js"></script> --}}
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<x-header>{{ $title }}</x-header>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<body>

    @if ($navbar == 'show')
        <x-navbar></x-navbar>
    @endif
    <div class="bg-gray-50">
        {{ $slot }}
    </div>

    <script src="./libs/tailwindcss.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    {{-- <script src="./js/global.js"></script> --}}
    <script>
        AOS.init({
            once: true
        });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("[data-aos]").forEach((el) => {
                el.style.zIndex = "10";
            });
        });
    </script>
</body>

</html>

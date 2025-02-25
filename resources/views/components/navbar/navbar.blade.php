<div class="bg-white h-[70px] w-full flex justify-between items-center px-[6%] absolute">
    <div>
        {{-- <div class="logo w-[50px] h-[50px] bg-green-500 rounded-full"></div> --}}
        <h1 class="font-bold text-[35px]">Atelier</h1>
    </div>
    <div class="flex gap-4">
        @foreach ($navLinks as $navlink)
            <a href="{{ $navlink['url'] }}" class="text-black font-bold">{{ $navlink['name'] }}</a>
        @endforeach
    </div>
</div>

<div class="bg-white h-[70px] w-full flex justify-between items-center px-[6%] absolute">
    <div class="flex gap-2">
        <img src="./assets/icons/logo.svg" alt="" class="h-[50px] rounded-[10px]">
    </div>
    <div class="flex gap-4">
        @foreach ($navLinks as $navlink)
            <a href="{{ $navlink['url'] }}" class="text-black font-bold">{{ $navlink['name'] }}</a>
        @endforeach
    </div>
</div>

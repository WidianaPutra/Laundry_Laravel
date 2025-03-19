<x-layout :navbar="'hide'">
    <div class="flex h-screen">
        <div class="w-16 group">
            <div>
                <aside class="w-16 bg-gray-800 text-white p-5 h-screen absolute group-hover:w-64 transition-all">
                    <img src="{{ asset('assets/icons/account.svg') }}" alt=""
                        class="w-[60px] group-hover:hidden border-white border-2 rounded-full">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('assets/icons/account.svg') }}" alt=""
                            class="w-[70px] border-white border-2 rounded-full p-2 mb-2">
                        <h2 class="text-xl font-bold mb-5">{{ ucfirst($role) }} Panel</h2>
                        <ul>
                            @foreach ($sidebar_datas as $data)
                                <li class="mb-2">
                                    <a href="{{ $data['url'] }}"
                                        class="block py-2 px-4 hover:bg-gray-700 rounded">{{ ucfirst($data['name']) }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Dashboard</h1>
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Logout</button>
            </header>

            <!-- Content -->
            <main class="p-6">{{ $slot }}</main>
        </div>
    </div>
</x-layout>

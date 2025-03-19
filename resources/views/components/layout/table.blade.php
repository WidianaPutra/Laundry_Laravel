<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-gray-200">

                @foreach ($table_datas as $i => $data)
                    <th class="px-4 py-2 text-center">{{ $data }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>

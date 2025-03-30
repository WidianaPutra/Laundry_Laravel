<x-layout.dashboard-panel-layout :sidebarDatas="$sidebar_datas">
    <div class="container mx-auto p-6">
        @if ($qeury_params === 'addOrder')
            @include('admin.addOrder')
        @else
            <h1 class="text-3xl font-bold mb-4">Tabel Order</h1>
            <x-layout.table :tableData="$table_datas">
                @if (count($order_datas) == 0)
                    <tr class="w-full">
                        <td class="p-2 text-center font-bold" colspan="6">Tidak ada data</td>
                    </tr>
                @else
                    <tr class="">
                        <td class="px-4 py-2 text-center">1</td>
                        <td class="px-4 py-2 text-center">Surya</td>
                        <td class="px-4 py-2 text-center">Diproses</td>
                        <td class="px-4 py-2 text-center">1kg</td>
                        <td class="px-4 py-2 text-center">Sudah Bayar</td>
                        <td class="px-4 py-2 text-center">20K</td>
                    </tr>
                @endif
            </x-layout.table>
        @endif
    </div>
</x-layout.dashboard-panel-layout>

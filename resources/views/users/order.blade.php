<x-layout :title="'Atelier Laundry'" :navbar="'hide'">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <form class="">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Pilih Paket</h2>

                <label class="block mb-2 font-medium text-gray-700">Paket</label>
                <select name="paket" class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">
                    <option value="leguler">Leguler</option>
                    <option value="express">Express</option>
                    <option value="ex-tra">Ex-Tra</option>
                </select>

                <label class="block mt-4 mb-2 font-medium text-gray-700">Total Pakaian</label>
                <input type="number" name="total_pakaian"
                    class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300"
                    placeholder="Masukkan jumlah pakaian">

                <label class="block mt-4 mb-2 font-medium text-gray-700">Perkiraan Harga</label>
                <input type="text" name="perkiraan_harga"
                    class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Estimasi harga"
                    readonly>

                <label class="block mt-4 mb-2 font-medium text-gray-700">Jam</label>
                <input type="time" name="jam"
                    class="w-full p-2 border rounded-lg focus:ring focus:ring-blue-300">

                <button type="submit"
                    class="mt-4 w-full bg-green-500 text-white p-2 rounded-lg hover:bg-green-600">Kirim</button>
            </form>
        </div>
    </div>
</x-layout>

{{-- 
    pilih paket
        - Leguler
        - Express
        - Ex-Tra
        
    total pakaian
    perkiraan harga
    jam
--}}

<x-layout :title="'Altelier Laundry'">
    {{--  --}}
    <div class="bg-image h-[95vh] w-full flex items-center">
        <div class="pl-[8%] pr-[5%] w-full sm:w-[65%]">
            <h1 class="text-white text-[33px] sm:text-[40px] md:text-[55px] font-bold">Atelier Laundry</h1>
            <p class="text-white text-[14px] sm:text-[17px]">
                Cucian menumpuk? Kami siap bantu! Layanan laundry Express, Leguler, hingga EX-Tra dengan hasil bersih,
                wangi, dan rapi. Antar-jemup gratis, harga terjangkau! Percayakan pada tangan ahli kami. Pesan sekarang,
                kami yang urus!
            </p>
            <div
                class="flex bg-green-600 py-1 px-3 mt-4 w-max items-center rounded-[10px] cursor-pointer hover:bg-green-700">
                <img src="./assets/icons/whatsapp.svg" alt="" class="w-[50px] h-auto">
                <p class="text-white text-[18px]">Hubungi Kami</p>
            </div>
        </div>
    </div>
    {{--  --}}

    <div class="min-h-[80vh] flex justify-center items-center py-2">
        <div class="sm:w-[86%] sm:h-[70vh] sm:flex sm:items-center">
            <div class="w-full sm:w-[50%] flex justify-center sm:justify-end items-center">
                <img src="./assets/images/women-selecting-clothes.jpg" alt=""
                    class="max-h-[550px] aspect-square object-cover rounded-[10px]">
            </div>
            <div class="w-full flex sm:w-[50%] h-full p-3 justify-center">
                <div class="w-[90%] sm:w-[90%]">
                    <h1 class="font-bold sm:text-[40px] pb-4">Atelier Laundry Konoha</h1>
                    <p class="text-[18px]">Seringkah Anda terjebak situasi darurat: pakaian kotor menumpuk sebelum acara
                        penting, atau harus
                        menghadiri meeting bisnis tapi baju andal belum siap dicuci? Ini masalah nyata bagi keluarga
                        sibuk, pelancong dinas, atau tamu hotel yang butuh solusi cepat.</p>
                    <p class="text-[18px]">Altelier Laundry Konoha hadir sebagai jawaban</p>
                    <p class="text-[18px]">Kami menyediakan layanan Express 24 jam</p>
                    <ul>
                        <li>4 Jam (EX-Tra)</li>
                        <li>12 Jam (Express)</li>
                        <li>24 Jam (Leguler)</li>
                    </ul>
                    <p class="text-[18px]">Tak perlu khawatir jadwal padat atau waktu terbatas. Antar-jemput GRATIS,
                        proses profesional, dan
                        garansi kebersihan maksimal. Percayakan krisis laundry Anda pada kami—kami pastikan pakaian siap
                        dipakai tepat saat dibutuhkan!</p>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="h-screen bg-blue-500"></div>
</x-layout>

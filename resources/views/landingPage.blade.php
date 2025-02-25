<x-layout :title="'Altelier Laundry'">
    {{-- welcome page --}}
    <div class="bg-image h-[95vh] w-full flex items-center">
        <div class="pl-[8%] pr-[5%] w-full sm:w-[65%]">
            <h1 class="text-white text-[33px] sm:text-[40px] md:text-[55px] font-bold">Atelier Laundry</h1>
            <p class="text-white text-[14px] sm:text-[18px]">
                Cucian menumpuk? Kami siap bantu! Layanan laundry Express, Leguler, hingga EX-Tra dengan hasil bersih,
                wangi, dan rapi. Antar-jemup gratis, harga terjangkau! Percayakan pada tangan ahli kami. Pesan sekarang,
                kami yang urus!
            </p>
            <div
                class="flex bg-green-600 py-1 px-3 mt-4 w-max items-center 
                rounded-[10px] cursor-pointer hover:bg-green-700">
                <img src="./assets/icons/whatsapp.svg" alt="" class="sm:w-[50px] w-[25px] h-auto">
                <p class="text-white sm:text-[18px] text-[13px]">Hubungi Kami</p>
            </div>
        </div>
    </div>

    {{-- about page --}}
    <div class="min-h-[80vh] flex justify-center items-center py-2">
        <div class="sm:w-[86%] sm:min-h-[70vh] md:flex md:items-center justify-center">
            <div class="w-full md:w-[50%] flex justify-center md::justify-end items-center">
                <img src="./assets/images/women-selecting-clothes.jpg" alt=""
                    class="max-h-[550px] p-3 sm:p-0 aspect-square object-cover rounded-[10px]">
            </div>
            <div class="w-full flex md:w-[50%] min-h-full p-3 justify-center">
                <div class="w-[90%] sm:w-[90%]">
                    <h1 class="font-bold text-[20px] sm:text-[40px] pb-2">Atelier Laundry Konoha</h1>
                    <p class="text-[15px] sm:text-[20px] py-3">Seringkah Anda terjebak situasi darurat: pakaian kotor
                        menumpuk sebelum
                        acara
                        penting, atau harus
                        menghadiri meeting bisnis tapi baju andal belum siap dicuci? Ini masalah nyata bagi keluarga
                        sibuk, pelancong dinas, atau tamu hotel yang butuh solusi cepat.</p>
                    <p class="text-[15px] sm:text-[20px]">Altelier Laundry Konoha hadir sebagai jawaban</p>
                    <p class="text-[15px] sm:text-[20px] pb-2">Kami menyediakan layanan Express 24 jam</p>
                    <ul>
                        <li class="text-[15px] sm:text-[20px]">4 Jam (EX-Tra)</li>
                        <li class="text-[15px] sm:text-[20px]">12 Jam (Express)</li>
                        <li class="text-[15px] sm:text-[20px]">24 Jam (Leguler)</li>
                    </ul>
                    <p class="text-[15px] sm:text-[20px] pt-4">Tak perlu khawatir jadwal padat atau waktu terbatas.
                        Antar-jemput
                        GRATIS,
                        proses profesional, dan
                        garansi kebersihan maksimal. Percayakan krisis laundry Anda pada kami—kami pastikan pakaian siap
                        dipakai tepat saat dibutuhkan!</p>
                </div>
            </div>
        </div>
    </div>
    {{-- maps --}}
    <x-maps></x-maps>

    {{-- footer --}}
    <footer class="w-full h-[20vh]">
        <h1>test</h1>
    </footer>
</x-layout>

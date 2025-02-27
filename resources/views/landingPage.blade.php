<x-layout :title="'Altelier Laundry'">
    {{-- welcome page --}}
    <div class="bg-image h-screen w-full flex items-center">
        <div class="pl-[8%] pr-[5%] w-full sm:w-[60%]">
            <h1 class="text-white text-[33px] sm:text-[40px] md:text-[55px] font-bold" id="title"></h1>
            <div data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
                <p class="text-white text-[14px] sm:text-[18px]">
                    Layanan laundry Express, Leguler, hingga EX-Tra dengan hasil bersih,
                    wangi, dan rapi. Antar-jemup gratis, harga terjangkau! Percayakan pada tangan ahli kami. Pesan
                    sekarang,
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
    </div>

    {{-- about page --}}
    <div
        class="min-h-[80vh] flex justify-center items-center md:my-12 lg:my-24 bg-center bg-contain bg-no-repeat bg-[url({{ asset('./assets/images/RectangleGreen.png') }})]">
        <div class="sm:w-[86%] sm:min-h-[70vh] md:flex md:items-center justify-center">
            <div class="w-full md:w-[50%] flex justify-center md::justify-end items-center" data-aos='fade-right'
                data-aos-duration='1500' data-aos-delay="200" data-aos-one="true">
                <div>
                    <img src="./assets/images/laundry-services.png" alt="" class="h-auto p-4 rounded-[7px]">
                </div>
            </div>
            <div class="w-full flex md:w-[50%] min-h-full pl-3 justify-center " data-aos='fade-left'
                data-aos-duration='1000' data-aos-delay='500' data-aos-one="true">
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
                        <div class="flex space-x-4 mt-3">
                            <div class="px-4 py-2 bg-gray-200 rounded-lg text-center text-[15px] sm:text-[20px] 
                                transition duration-300 ease-in-out transform hover:shadow-lg hover:-translate-y-1 hover:cursor-pointer"
                                data-aos="zoom-in" data-aos-duration='1000' data-aos-delay="800">
                                4 Jam <br> (EX-Tra)
                            </div>
                            <div class="px-4 py-2 bg-gray-200 rounded-lg text-center text-[15px] sm:text-[20px] 
                                transition duration-300 ease-in-out transform hover:shadow-lg hover:-translate-y-1 hover:cursor-pointer"
                                data-aos="zoom-in" data-aos-duration='1000' data-aos-delay="1000">
                                12 Jam <br> (Express)
                            </div>
                            <div class="px-4 py-2 bg-gray-200 rounded-lg text-center text-[15px] sm:text-[20px] 
                                 transition duration-300 ease-in-out transform hover:shadow-lg hover:-translate-y-1 hover:cursor-pointer"
                                data-aos="zoom-in" data-aos-duration='1000' data-aos-delay="1200">
                                24 Jam <br> (Leguler)
                            </div>
                        </div>
                    </ul>

                    {{-- <div class="flex w-full justify-between mt-10">
                        <div>
                            <h1 class="text-center text-xl font-bold mb-5">Total Cabang</h1>
                            <h1 class="text-center font-bold text-xl">8</h1>
                        </div>
                        <div>
                            <h1 class="text-center text-xl font-bold mb-5">Total Mitra</h1>
                            <h1 class="text-center font-bold text-xl">7</h1>
                        </div>
                        <div>
                            <h1 class="text-center text-xl font-bold mb-5">Total Karyawan</h1>
                            <h1 class="text-center font-bold text-xl">80</h1>
                        </div>
                    </div> --}}

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

    {{-- value page --}}
    <div
        class="flex md:flex-row flex-col w-full min-h-[65vh] justify-center md:justify-end bg-center bg-contain bg-no-repeat bg-gray-50 my-10 bg-[url({{ asset('./assets/images/g.png') }})]">
        <div class="md:w-[50%] w-full h-auto grid place-items-center pl-3">
            <div class="w-[89%]">
                <h1 class="font-bold text-[18px] py-2 text-green-500" data-aos='fade-right' data-aos-duration='1000'
                    data-aos-delay='200'>Our Values</h1>
                <h1 class="text-3xl font-bold mb-7" id="value_tagline"></h1>
                <p data-aos="fade-right" data-aos-duration='1000' data-aos-delay='400'>Kami menyediakan berbagai layanan
                    yang dirancang untuk
                    membantu Anda dalam
                    memenuhi kebutuhan dengan
                    lebih mudah dan nyaman. Dengan layanan yang kami tawarkan, Anda dapat menikmati kemudahan
                    dalam berbagai aspek</p>
            </div>
        </div>
        <div class="md:w-[50%] w-full h-auto grid place-items-center my-7 md:my-0">
            <div class="grid grid-cols-3 gap-8 md:w-[80%] w-[90%]">
                @foreach ($values as $i => $value)
                    <div class="flex justify-center items-center relative group z-[99] " data-aos="zoom-in"
                        data-aos-duration='1000' data-aos-delay='{{ 300 + 300 * $i }}' style="z-index: 99;">
                        <div
                            class="flex flex-col items-center justify-center bg-white px-5 py-3 shadow-2xl w-[150px] aspect-square rounded-[10px] cursor-pointer z-10">
                            <img src="{{ asset($value['icon']) }}" alt="" class="aspect-square h-[40px] mb-2">
                            <h1 class="text-center text-[15px]">{{ $value['name'] }}</h1>
                        </div>
                        <div
                            class="absolute w-[0px] h-[0px] aspect-square bg-white shadow-2xl transition-all duration-700 ease-in-out rounded-[10px]
                             overflow-hidden flex justify-center items-center flex-col p-2 group-hover:w-[230px]  group-hover:h-[200px] cursor-pointer group-hover:z-[9999]
                             @if ($i % 3 === 0) left-0 @endif
                             @if ($i % 3 === 2) right-0 @endif sm:left-auto sm:right-auto">
                            <img src="{{ asset($value['icon']) }}" alt="" class="aspect-square h-[40px]">
                            <h1 class="text-center text-[18px]">{{ $value['name'] }}</h1>
                            <p class="text-center text-[15px]">{{ $value['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- maps --}}
    <div class="w-full flex justify-center">
        <x-maps></x-maps>
    </div>

    {{-- footer --}}
    <footer class="w-full h-[20vh]">
        <h1>test</h1>
    </footer>
</x-layout>

<script>
    new Typed('#title', {
        strings: ['Atelier Laundry'],
        showCursor: false,
        typeSpeed: 60,
        startDelay: 200
    })

    new Typed('#value_tagline', {
        strings: ["Kepuasan anda <br> adalah tanggung jawab kami"],
        showCursor: false,
        typeSpeed: 50,
        startDelay: 800
    })
</script>



{{-- @foreach ($values as $i => $value)
    <div>
        <div class="div1">

        </div>
        <div class="div2">

        </div>
    </div>
@endforeach --}}

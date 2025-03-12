<x-layout :navbar="'hide'">
    <div class="flex items-center justify-center min-h-screen bg-gray-100 w-full">
        <div class="bg-white p-10 rounded-xl shadow-2xl sm:w-[500px] max-w-[90%]">
            <div class="flex items-center justify-center ">
                {{-- <div class="bg-[url({{ asset('assets/icons/logo.svg') }})]  bg-cover bg-center w-full">
                </div> --}}
            </div>
            <h2 class="text-2xl font-semibold text-gray-900 text-center">Verifikasikan diri anda</h2>
            <p class="text-gray-600 text-sm mt-3">Kami telah mengirimkan kode OTP ke
                @if (session('user_data.email'))
                    {{ session('user_data.email') }}
                @else
                    User@gmail.com
                @endif berisi 6 digit angka
                <br><span class="text-red-500 text-lg">*</span> Jika tidak menerima email, buka folder spam
            </p>
            @if (session('error'))
                <p><span class="text-red-500">*</span> {{ session('error') }}</p>
            @endif

            <form action="{{ route('verify_otp') }}" method="POST" class="mt-6">
                @csrf
                <label for="code" class="block text-lg font-medium text-gray-700">Masukan kode otp</label>
                <input type="text" id="code" name="otp"
                    class="mt-2 block w-full px-4 py-2 text-lg border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                    required>
                <p> Belum menerima kode?
                    <a href="" class="text-green-600 text-md mt-2 hover:underline">Kirim ulang</a>
                </p>
                <a href="{{ route('resend-otp') }}" class="text-green-600 text-md mt-2 hover:underline">Ganti alamat
                    Email</a>

                <button type="submit"
                    class="mt-6 w-full bg-green-600 text-white text-lg py-3 rounded-md hover:bg-green-700">Next</button>
            </form>

        </div>
    </div>
</x-layout>

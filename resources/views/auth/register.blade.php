<x-layout :title="'login'" :navbar="'hide'">
    <div class="flex w-full min-h-screen justify-center items-center bg-gray-100 p-7">
        <div class="sm:flex-row flex flex-col w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side -->
            <div
                class="sm:w-1/2 w-full bg-cover bg-center bg-[url('{{ asset('assets/images/laundrybg.jpg') }}')] flex flex-col items-center justify-center p-10 bg-center">
                <h2 class="text-white font-bold text-[25px]">New User !</h2>
            </div>

            <!-- Right Side -->
            <div class="sm:w-1/2 w-full p-10">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Hi New User !</h2>
                <p class="text-gray-500 text-center mb-6">Create New Account </p>
                <form action="" method="POST">
                    @csrf
                    <div class="mt-5">
                        <label class="block text-gray-600" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="citlali123"
                            class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600" for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="example@gmail.com"
                            class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600" for="addres">Address</label>
                        <input type="addres" id="addres" name="addres" placeholder="Your Addres...."
                            class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600" for="number">Phone Number</label>
                        <input type="number" id="number" name="number" placeholder="Your phone number...."
                            class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-400 hover:bg-blue-600 text-white py-2 rounded-lg transition">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>

<!-- form register
- username
- email
- password
- address
- phone_number -->

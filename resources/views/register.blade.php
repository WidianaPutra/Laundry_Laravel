<x-layout :title="'login'">
    <div class="flex w-full h-screen justify-center items-center bg-gray-100">
        <div class="flex w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side -->
            <div class="w-1/2 bg-gradient-to-r from-blue-500 to-blue-700 flex flex-col items-center justify-center p-10">
                <h2 class="text-white font-bold">Welcome Back!</h2>
            </div>

            <!-- Right Side -->
            <div class="w-1/2 p-10">
                <form action="" method="POST" class="bg-white rounded-xl shadow-2xl p-6">
                    @csrf
                    <div class="py-2">
                        <h2 class="text-2xl font-semibold text-gray-700 text-center">Login</h2>
                        <p class="text-gray-500 text-center mb-6">Welcome back! Please login to your account.</p>
                        <h1 class="text-center text-2xl font-bold">Create New Account</h1>
                    </div>
                    <div class="mb-4">
                        <div class="mt-5">
                            <label class="block text-gray-600" for="username">Username</label>
                            <input type="text" id="username" name="username" placeholder="citlali123"
                                class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-600" for="email">Email</label>
                            <input type="password" id="email" name="email" placeholder="example@gmail.com"
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
                    </div>
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

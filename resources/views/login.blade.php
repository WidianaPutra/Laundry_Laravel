<x-layout :title="'login'" :navbar="'hide'">
    <div class="flex w-full h-screen justify-center items-center bg-gray-100">
        <div class="flex w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Left Side -->
            <div class="w-1/2 bg-gradient-to-r from-blue-500 to-blue-700 flex flex-col items-center justify-center p-10">
                <h2 class="text-white font-bold">Welcome Back!</h2>
            </div>

            <!-- Right Side -->
            <div class="w-1/2 p-10">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Login</h2>
                <p class="text-gray-500 text-center mb-6">Welcome back! Please login to your account.</p>

                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-600" for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="example@gmail.com"
                            class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-600" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••"
                            class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <!-- <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox text-blue-500">
                            <span class="ml-2 text-gray-600">Remember Me</span>
                        </label> -->
                        <a href="#" class="text-blue-500 text-sm">Forgot Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-400 hover:bg-blue-600 text-white py-2 rounded-lg transition">Login</button>
                </form>
                <p class="mt-4 text-center text-gray-600">New User? <a href="/register" class="text-blue-500">Signup</a>
                </p>
            </div>

        </div>
    </div>
</x-layout>

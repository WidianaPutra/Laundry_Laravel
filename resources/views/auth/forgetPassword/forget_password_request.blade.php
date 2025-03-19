<x-layout :navbar="'hide'">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-semibold text-center mb-6">Forgot Password</h2>

            <form action="{{ route('api/forget-password') }}" method="POST" class="space-y-6">
                @if (session('error'))
                    <p class="p-0 m-0"><span class="text-red-500">*</span> {{ session('error') }}</p>
                @endif
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Enter your email">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-underline-700 text-white font-medium py-3 rounded-lg">Next</button>
            </form>

            <a href="/login" class="block mt-6 text-center text-green-600 hover:underline">Back to Sign In</a>
        </div>
    </div>
</x-layout>

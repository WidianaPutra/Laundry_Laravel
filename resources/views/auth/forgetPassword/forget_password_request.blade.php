<x-layout :navbar="'hide'">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-semibold text-center mb-6">Reset Password</h2>

            <form action="" method="POST" class="space-y-6">
                <div>
                    <label for="old-password" class="block text-sm font-medium text-gray-700">Old Password</label>
                    <input type="password" id="old-password" name="old-password" required
                        class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="new-password" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" id="new-password" name="new-password" required
                        class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <div>
                    <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm New
                        Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required
                        class="mt-1 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 rounded-lg">Update
                    Password</button>
            </form>

            <a href="" class="block mt-6 text-center text-indigo-600 hover:underline">Back to Sign In</a>
        </div>
    </div>
</x-layout>

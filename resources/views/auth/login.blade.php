<x-layout>
    <div class="flex justify-center items-center  bg-gray-100">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded-xl p-8 w-full max-w-md">
            @csrf

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Log In to Your Account</h2>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition"
                >
                @error('credentials')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                    class="w-full bg-white py-2 px-3 rounded border border-gray-300
                       focus:outline-none focus:ring-2 focus:ring-black focus:border-black transition"
                >
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Submit --}}
            <button
                type="submit"
                class="w-full inline-flex items-center justify-center rounded bg-black/20 px-4 py-2 text-sm font-semibold transition hover:bg-red-500 hover:text-white cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
            >
                Log In
            </button>

            {{-- Optional: Forgot password link --}}
            <p class="mt-4 text-center text-sm text-gray-500">
                <a href="" class="text-red-600 hover:underline">
                    Forgot your password?
                </a>
            </p>

        </form>
    </div>
</x-layout>

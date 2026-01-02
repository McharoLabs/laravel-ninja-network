<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen text-black/70">

    {{-- Flash message --}}
    @if (session('success'))
        <div
            id="flash"
            class="p-4 text-center bg-green-50 text-green-600 font-semibold"
        >
            {{ session('success') }}
        </div>
    @endif

    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-red-500">Ninja Network</h1>

            <div class="flex items-center gap-4">



                {{-- Guest links --}}
                @guest
                    <a href="{{ route('show.login') }}"
                       class="rounded bg-black/20 px-4 py-2 text-sm font-semibold hover:bg-red-500 hover:text-white transition">
                        Login
                    </a>

                    <a href="{{ route('show.register') }}"
                       class="rounded bg-black/20 px-4 py-2 text-sm font-semibold hover:bg-red-500 hover:text-white transition">
                        Register
                    </a>
                @endguest

                {{-- Authenticated user --}}
                @auth
                    <span class="border-r pr-3 text-sm">
                        Hi, {{ auth()->user()->name }} 👋
                    </span>

                     <a href="{{ route('ninjas.index') }}" class="hover:underline">
                        All Ninjas
                    </a>

                    <a href="{{ route('ninjas.create') }}" class="hover:underline">
                        Create Ninja
                    </a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            class="rounded bg-black/20 px-4 py-2 text-sm font-semibold hover:bg-red-500 hover:text-white transition"
                        >
                            Logout
                        </button>
                    </form>
                @endauth

            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-6">
        {{ $slot }}
    </main>

    {{-- Auto-hide flash message --}}
    <script>
        setTimeout(() => {
            const flash = document.getElementById('flash');
            if (flash) flash.remove();
        }, 3000);
    </script>

</body>
</html>

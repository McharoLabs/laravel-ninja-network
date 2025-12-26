<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen text-black/70">
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center gap-6">
            <h1 class="text-xl font-bold text-red-500">Ninja Network</h1>

            <div class="flex flex-row gap-3">
                <a href="{{ route('ninjas.index') }}" class="hover:no-underline">
                    All Ninjas
                </a>

                <a href="{{ route('ninjas.create') }}" class="hover:no-underline">
                    Create New Ninjas
                </a>
            </div>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-6">
        {{ $slot }}
    </main>
</body>


</html>
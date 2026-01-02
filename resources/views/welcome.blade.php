<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 min-h-screen text-black/70">
    <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col justify-between items-center">
        <h1 class="text-red-500 font-bold text-2xl">Welcome to the ninja network</h1>
        <p>Click the button below to view the list of ninjas.</p>
        <a href="{{ route('ninjas.index') }}" class="bg-red-500 hover:bg-red-400 p-2 text-white mt-3 rounded">
            Find Ninjas!
        </a>
    </div>

</body>

</html>
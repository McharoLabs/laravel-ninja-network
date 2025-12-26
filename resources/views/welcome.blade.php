<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
<h1>Welcome to the ninja network</h1>
<p>Click the button below to view the list of ninjas.</p>
<a href="" class="btn text-white">
    Find Ninjas!
</a>
</body>

</html>
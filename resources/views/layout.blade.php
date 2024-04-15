<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leitstelle Web App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('sass/app.scss')  }}">
    <!-- Styles -->
    @livewireStyles
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>
<div class="container">
    <h1>Hello, world!</h1>
    <button class="btn btn-success">Test</button>
</div>


@livewireScripts
</body>
</html>



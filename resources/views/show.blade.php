<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($categoryGame)
        <h1>La pagina del juego es: {{ $nameVideogame }} y la categoria es: {{ $categoryGame }}</h1>
    @else
        <h1>La pagina del juego es: {{ $nameVideogame }}</h1>
    @endif

</body>
</html>

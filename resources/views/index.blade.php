<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vista desde el controlador la lista de juegos</h1>
    <p><a href="{{ route('gamesCreate') }}">Nuevo videojuego</a></p>
    <h2> listado de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA_ID</th>
                <th>CREADO</th>
                <th>ACTIVO</th>
                <th>ACCIONES</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($gameName as $game)
                <tr>
                    <th>{{$game->id}}</th>
                    <th><a href="{{ route('viewGames', $game->id) }}">{{$game->name}}</a></th>
                    <th>{{$game->category_id}}</th>
                    <th>{{$game->created_at}}</th>
                    <th>
                        @if ($game->active)
                            <span style="color: green">activo</span>
                        @else
                            <span style="color: red">inactivo</span>
                        @endif
                    </th>
                    <th>
                        <a href="{{ route('deleteGame', $game->id) }}">eliminar
                            @method('delete')
                        </a>
                    </th>
                </tr>

            @empty
                <th>No hay juegos</th>
            @endforelse
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notas</title>
</head>

<body>
    <h2><a href="{{ route('notes.create') }}">Crear</a></h2>
    <ul>
        @foreach ($notes as $note)
            <li>{{ $note['content'] }}
                [
                <a href="{{ route('notes.show', $note['id']) }}">VER</a> |
                <a href="{{ route('notes.edit', $note['id']) }}">EDITAR</a>
                ]
            </li>
        @endforeach
    </ul>
</body>

</html>

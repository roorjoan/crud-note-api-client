<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notas</title>
</head>

<body>
    <h2><a href="{{ route('notes.index') }}">Atrás</a></h2>
    <h1>{{ $note['content'] }}</h1>
    <p style="color: green;">{{ $note['created_at'] }}</p>
    <form action="{{ route('notes.destroy', $note['id']) }}" method="post">
        @csrf @method('DELETE')
        <button type="submit" onclick="return confirm('Estas seguro?');">BORRAR</button>
    </form>
</body>

</html>

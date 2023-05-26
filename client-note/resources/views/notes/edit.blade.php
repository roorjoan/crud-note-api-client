<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notas</title>
</head>

<body>
    <h2><a href="{{ route('notes.index') }}">Atrás</a></h2>
    <h1>Actualizar nota</h1>
    <form action="{{ route('notes.update', $note['id']) }}" method="post">
        @csrf @method('PUT')
        Contenido: <input type="text" name="content" value="{{ $note['content'] }}">
        @error('content')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">Editar</button>
    </form>
</body>

</html>

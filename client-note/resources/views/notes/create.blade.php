<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notas</title>
</head>

<body>
    <h2><a href="{{ route('notes.index') }}">Atrás</a></h2>
    <h1>Crear nota</h1>
    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        Contenido: <input type="text" name="content">
        @error('content')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <button type="submit">Guardar</button>
    </form>
</body>

</html>

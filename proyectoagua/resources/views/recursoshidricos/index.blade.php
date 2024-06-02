<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos Hídricos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Recursos Hídricos</h1>

        <a href="{{ route('home') }}" class="btn btn-secondary">Volver a Inicio</a>
        <a href="{{ route('region.index') }}" class="btn btn-primary">Regiones</a>
        <a href="{{ route('fuentedecontaminacion.index') }}" class="btn btn-primary">Fuente de Contaminación</a>
        <a href="{{ route('impactoambiental.index') }}" class="btn btn-primary">Impacto Ambiental</a>

        <form action="{{ route('recursoshidricos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Recurso:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
            </div>
            <div class="form-group">
                <label for="nivel_contaminacion">Nivel de Contaminación:</label>
                <input type="text" class="form-control" id="nivel_contaminacion" name="nivel_contaminacion" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Recurso Hídrico</button>
        </form>

        <h2>Lista de Recursos Hídricos</h2>
        <ul>
            @foreach($recursos as $recurso)
                <li>{{ $recurso->nombre }} - {{ $recurso->ubicacion }} - {{ $recurso->nivel_contaminacion }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

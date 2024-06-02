<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regions</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Regions</h1>

        <a href="{{ route('home') }}" class="btn btn-secondary">Volver a Inicio</a>
        <a href="{{ route('recursoshidricos.index') }}" class="btn btn-primary">Recursos Hídricos</a>
        <a href="{{ route('fuentedecontaminacion.index') }}" class="btn btn-primary">Fuente de Contaminación</a>
        <a href="{{ route('impactoambiental.index') }}" class="btn btn-primary">Impacto Ambiental</a>

        <form action="{{ route('region.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de la Región:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Región</button>
        </form>

        <h2>Lista de Regiones</h2>
        <ul>
            @foreach($regions as $region)
                <li>{{ $region->nombre }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

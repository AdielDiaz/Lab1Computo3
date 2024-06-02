<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuente de Contaminación</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Fuente de Contaminación</h1>

        <a href="{{ route('home') }}" class="btn btn-secondary">Volver a Inicio</a>
        <a href="{{ route('region.index') }}" class="btn btn-primary">Regiones</a>
        <a href="{{ route('recursoshidricos.index') }}" class="btn btn-primary">Recursos Hídricos</a>
        <a href="{{ route('impactoambiental.index') }}" class="btn btn-primary">Impacto Ambiental</a>


        <form action="{{ route('fuentedecontaminacion.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo">Tipo de Contaminación:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Fuente de Contaminación</button>
        </form>

        <h2>Lista de Fuentes de Contaminación</h2>
        <ul>
            @foreach($fuentes as $fuente)
                <li>{{ $fuente->tipo }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

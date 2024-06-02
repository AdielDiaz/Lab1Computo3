<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto Ambiental</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Impacto Ambiental</h1>

        <a href="{{ route('home') }}" class="btn btn-secondary">Volver a Inicio</a>
        <a href="{{ route('region.index') }}" class="btn btn-primary">Regiones</a>
        <a href="{{ route('recursoshidricos.index') }}" class="btn btn-primary">Recursos Hídricos</a>
        <a href="{{ route('fuentedecontaminacion.index') }}" class="btn btn-primary">Fuente de Contaminación</a>


        <form action="{{ route('impactoambiental.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo_impacto">Tipo de Impacto:</label>
                <input type="text" class="form-control" id="tipo_impacto" name="tipo_impacto" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro:</label>
                <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Impacto Ambiental</button>
        </form>

        <h2>Lista de Impactos Ambientales</h2>
        <ul>
            @foreach($impactos as $impacto)
                <li>{{ $impacto->tipo_impacto }} - {{ $impacto->descripcion }} - {{ $impacto->fecha_registro }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>

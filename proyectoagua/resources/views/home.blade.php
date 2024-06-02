<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Gestión Ambiental</h1>
        <ul>
            <li><a href="{{ route('region.index') }}" class="btn btn-primary">Regiones</a></li>
            <li><a href="{{ route('impactoambiental.index') }}" class="btn btn-primary">Impacto Ambiental</a></li>
            <li><a href="{{ route('recursoshidricos.index') }}" class="btn btn-primary">Recursos Hídricos</a></li>
            <li><a href="{{ route('fuentedecontaminacion.index') }}" class="btn btn-primary">Fuente de Contaminación</a></li>
        </ul>
    </div>
</body>
</html>

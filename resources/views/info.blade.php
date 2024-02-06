<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <a href="/contacto">Contacto</a>
    <hr>
    {{ $tipo }}
    <hr>
    <h1>Informacion</h1>
    @if ($tipo == 'alumno')
        <h2>Alumnos</h2>
        <p>Info para alumnos</p>
    @elseif ($tipo == 'empresa')
        <h2>Empresas</h2>
        <p>Info para empresas</p>
    @else
        <h2>Visitantes</h2>
        <p>Info para visitantes</p>
    @endif
</body>
</html>
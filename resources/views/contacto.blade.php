<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body id>
    <div class="nav">
        <a href="/informacion">Informacion</a>
        <a href="/contacto">Contacto</a>
    </div>
    <header>
        <h1>Contacto</h1>
    </header>
    <form action="/contacto" method="POST" id="formulario">
        @csrf
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </p>
        <p>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo">
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>
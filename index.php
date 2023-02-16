<!DOCTYPE html>
<html lang="es">

<head>
    <title>Practica 2</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="source/escudo_footer.ico">
    <link rel="stylesheet" href="css/styleform.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body class="contenedor">
    <div class="dividido">
        <div class="panel"><br>
            <B>Consultar<B><br>
                    <button type="button" id="ocultar" class="accion">Ocultar</button>
                    <button type="button" id="mostrar" class="accion">Mostrar</button>
        </div>
        <form class="formulario" id="formulario">
            <label class="correspondiente" for="id">Id:</label>
            <input class="entrada" type="number" name="id" min="0" id="id" placeholder="ID">
            <button type="button" id="consulta" class="btn">Generar</button>
            <label class="correspondiente" for="nombre">Nombre:</label>
            <input class="entrada" type="text" name="nombre" id="nombre" placeholder="Nombre">
            <label class="correspondiente" for="email">Email:</label>
            <input class="entrada" type="text" name="email" id="correo" placeholder="correo">
            <label class="correspondiente" for="telefono">Phone:</label>
            <input class="entrada" type="text" name="correo" id="telefono" placeholder="telefono">
        </form>
    </div>
    <div class="dividido">
        <div class="panel"><br>
            <B>Generador de RFC<B><br>
                    <button type="button" id="oculta" class="accion">Ocultar</button>
                    <button type="button" id="mostra" class="accion">Mostrar</button>
        </div>
        <form class="formulario" id="formulari">
            <label class="correspondiente" for="name">Nombre:</label>
            <input class="entrada" type="text" name="name" for="etiq" id="name" placeholder="Nombre">
            <label class="correspondiente" for="lastname1">Apellido paterno:</label>
            <input class="entrada" type="text" name="lastname1" id="lastname1" placeholder="Primer apellido">
            <label class="correspondiente" for="lastname2">Apellido materno:</label>
            <input class="entrada" type="text" name="lastname2" id="lastname2" placeholder="Segundo Apellido">
            <label class="correspondiente" for="fecha">Fecha de nacimiento:</label>
            <input class="entrada" type="date" name="fecha" id="fecha">
            <button type="button" id="generar" class="btn">Generar</button>
            <label class="correspondiente" for="resultado">Resultado:</label>
            <input class="resultado" readonly="readonly" type="text" id="resultado">
        </form>
    </div>
    <script src="JavaScript/funciones.js"></script>
</body>

</html>
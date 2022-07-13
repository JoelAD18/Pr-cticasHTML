<!DOCTYPE html>
<html>
    <head>
        <title>Enviar dattos</title>
    </head>
    <body>
        <form action="recibir_practica.php" method="$POST">
            <label>Matrícula</label>
            <input type="text" name="matricula" placeholder="Introduce aquí tu matricula" require>
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Introduce aquí tu nombre" require>
            <br>
            <label>Fecha de nacimineto</label>
            <input type="date" name="fecha_de_nacimiento" require>
            <br>
            <button>Enviar</button>
        </form>
    </body>
</html>
<?php
if ($_POST){
    $nombre=$_POST['txtNombre'];
    echo $nombre;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejerciio 1</title>
</head>

<body>
    <form action="ejercicio3.php" method="get">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>
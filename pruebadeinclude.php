<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Página que incluye otros archivos</title>
</head>

<body>
    <div id="contenedor">
        <?php	require("./includes/encabezado.php");	?>
        <div id="contenidoPrincipal">Contenido principal </div>
        <?php include_once("./includes/botonera.php"); ?>
        <?php require_once("./includes/pie.php");	?>
    </div>
    <!-cierre del contenedor -->
</body>

</html>
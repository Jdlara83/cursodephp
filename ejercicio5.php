<?php

if($_POST){
    $valor1=$_POST['valor1'];
    $valor2=$_POST['valor2'];

    $sum=$valor1+$valor2;
    $res=$valor1-$valor2;
    $mul=$valor1*$valor2;
    $div=$valor1/$valor2;

    echo "la suma es:" ."". "$sum<br>";
    echo "la resta es:" .""."$res<br>";
    echo "la multiplicacion es:" ."". "$mul<br>";
    echo "la division  es:" .""."$div<br>";

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercio 1</title>
</head>

<body>
    <form action="ejercicio5.php" method="post">
        Valor 1:
        <input type="text" name="valor1" id=""><br>
        Valor 2:
        <input type="text" name="valor2" id=""><br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>
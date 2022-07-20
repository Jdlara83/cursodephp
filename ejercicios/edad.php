<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula EDAD</title>
</head>

<body>
    <form action="edad.php" method="post">
        <H4>Calcula Edad:</H4>
        <input type="number" name="cal_edad" id="" class="">

        <br>
        <input type="submit" value="Enviar" class="calcular">
    </form>
</body>
<style>
h4 {
    color: #ff2500;
}

.calcular {
    margin-top: 5px;
    background: #000;
    color: #fff;
    border-radius: 5px;
}
</style>

</html>

<?php
if ($_POST){
    $edad=$_POST['cal_edad'];
if($edad>18){
    echo "Eres mayor de edad, felicidades";
}else{
    echo "Eres menor de edad, Lo siento";
}
}
?>
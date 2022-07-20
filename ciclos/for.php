<?php

if($_POST){
$a=$_POST['imprimenum'];
}
if($a<=0){
    echo '<div class="mensaje">el numero debe ser mayor o igual a uno</div>';
}
     else{
        for ($i=$a; $i <= 10; $i++) {
        echo "el contador es:". "$i<br>";
     }
    }   
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>

<body>


    <form action="./for.php" method="post">

        <input type="number" name="imprimenum" id="">
        <input type="submit" value="contador">
    </form>
    <style>
    .mensaje {
        background: #CFE2FF;
        border-radius: 3px;
        color: #08429E;
        width: 150px;
        border: 1px solid #08429E;
    }
    </style>

</body>

</html>
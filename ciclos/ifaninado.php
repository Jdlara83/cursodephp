<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF_anidado</title>
</head>

<body>
    <form action="ifaninado.php" method="post">
        <input type="text" name="dia">
        <input type="submit" value="ver dia">
    </form>





    <?php
    
     if($_POST){
        $dia=$_POST['dia'];
        if($dia	=="lunes"){print("¡Feliz día de la Luna!");}
    	elseif($dia	=="martes"){print("¡Feliz día de Marte!");}	
        elseif($dia	=="miercoles"){print("¡Feliz día de Mercurio!");}	
        elseif($dia	=="jueves"){print("¡Feliz	día	deJúpiter!"	);}
        elseif($dia	=="viernes"){print("¡Feliz día de	Venus!");}
        elseif($dia	=="sabado"){print("¡Feliz	día	de Saturno!");	}
        elseif($dia	=="domingo"){print("¡Feliz día del Sol!");	}
}
    ?>
</body>

</html>
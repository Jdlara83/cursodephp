<!-- <form action="clima.php" method="post">
    <H4>Clima:</H4>
    <input type="text" name="clima" id="" class="">

    <br>
    <input type="submit" value="Enviar" class="preguntar">
</form>

<?php
if ($_POST){
    $clima=$_POST['clima'];
if($clima =="lluvia"){
    echo "llevar paraguas";
}else{
    echo "no llevar paraguas";
}
}
?> -->

<form action="clima.php" method="post">

    <select name="sexo" id="">
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select>
    <input type="submit" value="Enviar">
</form>

<?php	if($_POST["sexo"] =="masculino"){	print	("¡Hola	hombre!");	}	else	{
print	("¡Hola	mujer!");	}	?>
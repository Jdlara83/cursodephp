<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
</head>

<body>
    <?php
      function bienvenida(){
       print '<h3>Bienvenida al curso de PHP</h3>';
              }
bienvenida();
//funcion con parametros
function saludar($hola){
  echo $hola;
}
saludar ('Binevenidos a PHP con funciones con parametros <br>');

//funciones con retorno

function retorno($retornar){
  return $retornar;
}
echo retorno('Retorno con return en PHP');
?>
</body>

</html>
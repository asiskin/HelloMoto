<?php
function VER_SI_EXISTE_USUARIO($email) {
  $recurso = fopen("./json/usuarios.json", "r+");
  $linea = fgets($recurso);

    $usuario = json_decode($linea, true);
    var_dump($linea);


    $linea = fgets($recurso);

  fclose($recurso);

  return false;
}

$x=VER_SI_EXISTE_USUARIO("pedro@pedro.com");

var_dump($x);
?>

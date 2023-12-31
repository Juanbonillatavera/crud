<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';
require_once './bin/persistencia/modelos/ModeloGenerico.php';
require_once './bin/persistencia/modelos/Usuarios.php';

$modelo = new Usuarios();
$registro = $modelo->where("correo",'=',"jhon@gmail.com")->get();
/*$modelo->setNombres("JJ");
$modelo->setEdad(24);
$modelo->setCorreo("email@gmail.com");
$modelo->insert();
*/
echo "<pre>";
var_dump($registro);
echo "</pre>";



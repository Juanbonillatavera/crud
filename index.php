<?php

require_once("../crud/conexion/conexion.php");
require_once("../crud/bin/persistencia/crud.php");



$crud= new Crud("usuario") ;

$id = $crud->insert([
        "nombres" => "John",
        "apellidos" => "Smith",
        "edad" => 18,
        "correo" => "jhon@gmail.com",
        "telefono" => "123",
        "fecha_registro" => date("Y-m-d H:i:s")
            
]);
echo "el id insetado es : " .$id ."\n";
$lista= $crud->get();
echo "</pre>";
var_dump($lista);
echo "</pre>";
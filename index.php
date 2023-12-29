<?php

require_once("../crud/bin/conexion/Conexion.php");
require_once("../crud/bin/persistencia/Crud.php");



$crud= new Crud("usuario") ;

/*$crud->where("id",' =', 2)->update([
 "nombres" => "jian"
]);
*/

$filasAfectadas = $crud->where("id",'=', 2)->update(["nombres" => "Jhon 2"]);

$eliminados = $crud->where("id", '=', 3)->delete();

echo "FILAS AFECTADAS: " . $filasAfectadas . " ELIMINADOS: " . $eliminados;

//espacio
/*$id = $crud->insert([
        "nombres" => "John",
        "apellidos" => "Smith",
        "edad" => 18,
        "correo" => "jhon@gmail.com",
        "telefono" => "123",
        "fecha_registro" => date("Y-m-d H:i:s")
            
]);
*/
//echo "el id insetado es : " .$id ."\n";
echo "\n";
$lista= $crud->get();
echo "<pre>";
var_dump($lista);
echo "</pre>";
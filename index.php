<?php

require_once './bin/conexion/Conexion.php';
require_once './bin/persistencia/Crud.php';
require_once './bin/persistencia/modelos/ModeloGenerico.php';
require_once './bin/persistencia/modelos/Usuarios.php';
require_once './bin/http/ControladorUsuarios.php';
require_once './bin/constantes/EMensajes.php';
require_once './bin/http/Respuesta.php';

$controladorUsuarios = new ControladorUsuarios();
//$respuesta = $controladorUsuarios->insertarUsuario([
//    "nombres" => "JJ2",
//    "edad" => 22,
//    "email" => "email3@gmail.com",
//    "asdfasfda" => "sdfasdfa"
//]);
//$usuario = [
//    "idUsuario" => 6,
//    "correo" => "correo@gmail.com",
//    "telefono" => "123456789"
//];
//$respuesta = $controladorUsuarios->actualizarUsuario($usuario);
//var_dump($respuesta);
//echo "<br/>";
//
//$respuesta = $controladorUsuarios->eliminarUsuario(6);
//var_dump($respuesta);
//echo "<br/>";
//$respuesta = $controladorUsuarios->buscarUsuarioPorId(6);
//var_dump($respuesta);
//echo "<br/>";

$respuesta = $controladorUsuarios->listarUsuarios()->json();
echo ($respuesta);
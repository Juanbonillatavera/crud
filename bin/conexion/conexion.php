<?php

class Conexion{
    
    private $conexion;
    private $configuracion =[
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "crud",
        "port" => "3306",
        "username" => "root",
        "password" => "",
        "charset" =>"utf8mb4"
    ];


public function __construct() {

}

public function conectar() {
    try{
 $CONTROLADOR = $this -> configuracion ["driver"];
 $SERVIDOR = $this -> configuracion ["host"];
 $BASE_DATOS = $this -> configuracion ["database"];
 $PUERTO = $this -> configuracion ["port"];
 $USUARIO= $this -> configuracion ["username"];
 $CLAVE = $this -> configuracion ["password"];
 $CODIFICACION = $this -> configuracion ["charset"];

 $url="{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
        ."dbname={$BASE_DATOS};charset={$CODIFICACION}";
        //conexion
 $this->conexion= new PDO($url,$USUARIO,$CLAVE);
 echo "conexion exitosa" ."\n";
 return $this->conexion;
    }catch(Exception $exc){
        echo "conexion erronea"."\n";
        echo $exc->getTraceAsString();
    }
}
}
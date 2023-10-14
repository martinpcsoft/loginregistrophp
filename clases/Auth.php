<?php
include ("conexion.php");

class Auth extends Conexion {

    public function registrar($usuario, $password){
        $conexion = parent::conectar();
        $sql = "INSERT INTO t_usuario (usuario, password)
                VALUES(?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param('ss', $usuario, $password);
        return $query->execute();
       }
}
?>
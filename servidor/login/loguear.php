<?php session_start();

include("../../clases/Auth.php");
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$Auth = new Auth();

if ($Auth->loguear($usuario,$password)){
    header("location:../../inicio.php");
}else{
    
    echo "NO SE PUDO LOGUEAR VERIFICAR CONTRASEÑA";
    
    
}




?>
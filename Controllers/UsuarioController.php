<?php

include_once '../Models/UsuarioModel.php';

$usuario = new UsuarioModel;
session_start();

if($_POST['funcion'] == 'login'){

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        
        $usuario->loguearse($user,$pass);

        if($usuario->objetos != null){ //objetos tiene todos los datos de la base
            foreach($usuario->objetos as $objeto) {
                $_SESSION['id'] = $objeto->id;
                $_SESSION['user'] = $objeto->user;
                $_SESSION['tipo_usuario'] = $objeto->id_tipo;
                $_SESSION['avatar'] = $objeto->avatar;
            }
            echo 'logueado';
        }
}

if($_POST['funcion'] == 'verificar_sesion'){
    
    if(!empty($_SESSION['id'])){
        $json[] = array(
            "id"    => $_SESSION['id'],
            "user"  => $_SESSION['user'],
            "tipo_usuario" => $_SESSION['tipo_usuario'],
            "avatar" => $_SESSION['avatar'] 
        );
        $jsonstring = json_encode($json[0]);
        echo $jsonstring;
    } else {
        echo '';
    }
   
}
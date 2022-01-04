<?php
    include_once 'Conexion.php';

    class UsuarioModel {
        
        var $objetos;

        public function __construct(){
            $db = new Conexion();
            $this->acceso = $db->pdo;
        }
        
        //trae los datos del usuario
        function loguearse($user,$pass){
            $sql = "SELECT * FROM usuario
                    WHERE user=:user AND pass=:pass";
            $query = $this->acceso->prepare($sql);
            $query->execute(array(':user'=>$user,':pass'=>$pass));
            $this->objetos = $query->fetchAll();
            return $this->objetos;
        }
        
    }

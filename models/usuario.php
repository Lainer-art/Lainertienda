<?php

class Usuario{
    private $Id;
    private $Nombre;
    private $Apellido;
    private $Password;
    private $Rol;
    private $Email;
    private $Imagen;

    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    function getNombre(){

        return $this->Nombre;
    }

    function getApellido(){

        return $this->Apellido;
    }
    function getPassword(){

        return $this->Password;
    }
    function getRol(){

        return $this->Rol;
    }
    function getEmail(){

        return $this->Email;
    }
    function getImagen(){

        return $this->Imagen;
    }
    function getId($id){

        return $this->Id;
    }

    function setNombre($nombre){

        $this->Nombre = $this->db->real_escape_string($nombre);
    }

    function setApellido($apellido){

        $this->Apellido = $this->db->real_escape_string($apellido);
    }

    function setRol($rol){

        $this->Rol = $this->db->real_escape_string($rol);
    }

    function setImagen($imagen){

        $this->Imagen = $this->db->real_escape_string($imagen);
    }

    function setId($id){

        $this->Id = $id;
    }

    function setEmail($email){

        $this->Email = $this->db->real_escape_string($email);
    }



    function setPassword($password){

        $this->Password = password_hash($this->db->real_escape_string($password),PASSWORD_BCRYPT,['cost'=>4]);
    }

    public function save(){
        
        $sql = "INSERT INTO t_usuarios values(null, '{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}','user', NULL)'";
        $save = $this->db->query($sql);

        $result = false;

        if($save){
            $result = true;
        }

        return $result;
        }
}




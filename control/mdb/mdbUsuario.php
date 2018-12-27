<?php
    //Métodos que se ejecutan en la vista
    function buscarUsuarioPorId($id){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao=new UsuarioDAO(); //Se crea una nuevo objeto "UsuarioDAO"
        $usuario = $dao->buscarUsuarioPorId( $id); //Se ejecuta el método buscarUsuarioPorId, con sus parámetros
        return $usuario; //Retorna un objeto tipo Usuario
    }
    
    function buscarUsuarioPorEmail($email){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $usuario = $dao->buscarUsuarioPorEmail($email);
        return $usuario;
    }
    
    function autenticarUsuario($username, $password){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao=new UsuarioDAO(); 
        $usuario = $dao->autenticarUsuario($username, $password); 
        return $usuario; 
    }
  
    function insertarUsuario($usuario){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->insertarUsuario($usuario);
        return $resultado;
    }

    function modificarUsuario($usuario, $tipomod){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao=new UsuarioDAO();
        $resultado=$dao->modificarUsuario($usuario, $tipomod);
        return $resultado;
    }

    
    function borrarUsuario($id){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao = new UsuarioDAO();
        $resultado=$dao->borrarUsuario($id);
        return $resultado;
    }     
    
    function leerUsuarios(){
        require_once(__DIR__."/../../modelo/dao/UsuarioDAO.php");
        $dao = new UsuarioDAO();
        $usuarios=$dao->leerUsuarios();
        return $usuarios;
    }     
    
    
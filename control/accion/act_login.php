<?php
        session_start();
        require_once (__DIR__."/../mdb/mdbUsuario.php");
        $home = "..";
        
	if(isset($_POST['submit'])){ //Se pregunta si el botón submit fue presionado
		$errMsg = '';
		//username and password sent from Form
		$username = $_POST['username']; // se capturan los valores de las variables en el formulario
		$password = $_POST['password'];
        $user = autenticarUsuario($username, $password); //las variables capturadas se pasan por parámetro a autenticarUsuario


     
		if($user != null){
                    $_SESSION['ID_USUARIO'] = $user->getIdUsuario();
                    $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
                    $_SESSION['APELLIDO_USUARIO'] = $user->getApellido();
                    $_SESSION['TIPO_USUARIO'] = $user->getIdTipoUsuario();
                    $_SESSION['USERNAME']= $user->getUsuario();

                    header("Location: ../../vista/usuario/login.php");
		}else{
                    $errMsg .= 'Username and Password are not found';
                    echo $errMsg;
                    header("Location: ../../vista/usuario/pAdmin.php");   
		}

	}
        
        
?>

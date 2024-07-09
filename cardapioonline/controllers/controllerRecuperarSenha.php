<?php

require_once(__DIR__.'/../models/UsuarioDAO.php');

class controllerRecuperarSenha{
    public function __construct() { }

    public function verificaUsuario(){
        

        try{

            if(session_status() === PHP_SESSION_NONE){
                session_start();
            }

            if(isset($_POST['botao_enviar'])){

                $email = htmlspecialchars($_POST['email']);
                $cpf = htmlspecialchars($_POST['cpf']);

                $usuarioDAO = new UsuarioDAO();

                $usuario_id = $usuarioDAO->find($email);


                header('Location: '.  dirname($_SERVER['HTTP_REFERER']) . '/index.php');
            }

            
        }
        catch (Exception $excecao) {
			throw $excecao;
		}
    }
}
    
    

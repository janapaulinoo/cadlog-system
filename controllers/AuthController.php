<?php 

require_once 'models/user.php';
// classe responsalvel pela autenticação do usuario
class AuthController
{
    //função responsavel pelo processo de login
    public function login(){

        //verifica se a requisição HTTP é dp tipo POST, ou seja, se o formulario foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
            $user = User::FindByEmail($email);
            //password_verify verifica se a senha corresponde a um hash 
            if($user && password_verify($senha, $user['senha'])){
                session_start();

                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil']     = $user['perfil'];

                header('location: index.php?action=dashboard');
            }else{
                include 'views/register.php';
            }
    }else{
        include 'views/login.php';
    }
  }
}


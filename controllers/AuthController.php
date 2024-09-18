<?php 

require_once 'models/user.php';
// classe responsalvel pela autenticação do usuario
class AuthController
{
    //função responsavel pelo processo de login
    public function login(){

        //verifica se a requisição HTTP é dp tipo POST, ou seja, se o formulario foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST')
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            
    }
}


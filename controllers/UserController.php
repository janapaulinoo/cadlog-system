<?php
class UserController
{
    //função para registrar um novo usario 
    public function register(){
        //verifica se a requisição HTTP é do tipo POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //coloca dados enviados e armazena em um array 
            $data = {
                'nome'  => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'perfil'=> $_POST['perfil']
         };

         //chama o metodo create no Model User para criar um novo usuario no BD 
         User::create($data);
         header('location: index.php');
        }else{
            include 'views/register.php';
        }
    }
}

?>
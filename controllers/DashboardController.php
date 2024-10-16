<?php 
class DashboardController{
   //função index, responsavel por exibir a pagina dasboard
   public function index(){
    //inicia a sessão para verificar se o usuario esta autenticado
    session_start();

    if(!isset($_SESSION['usuario_id'])){
        //redireciona o usuario para pagina inicial
        header('location: index.php');
        exit; //garante que o script seja interrompido 
    }
    //se o usuarioestiver autenticado, inclui a view 'dashboard' que exibe o painel de controle 
    include 'views/dashboard';
   }
}
?>
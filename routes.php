 <?php 
 // inclui arquivos de controlador necessarios para lidar com diferentes acões  
 require 'controllers/AuthController.php'; // instancia o controlador de autenficação 
 require 'controllers/UserController.php'; // instancia o controlador de usuario 
 //require 'controller/DashboardController.php'; // instancia o controlador de dashboard
 
 // cria instãncias dos controladores para utilzar seus metodos 
 $authController = new AuthController();
 $userController = new UserController();
 //$dashboardController = new DashboardController();

 $action = $_GET['action'] ?? 'login'; //usa operador de coalescencia nula (??) para definir 'longin' se 'action' nao estiver presente
 
 switch ($action){
    case 'login':
        $authController->login();
        break;
    case 'register':
        $userController->register();
        break;
    default:
    $authController->login();
    break;
 }

?>
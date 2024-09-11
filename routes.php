 <?php 
 // inclui arquivos de controlador necessarios para lidar com diferentes acões  
 require 'controllers/AuthControler.php'; // instancia o controlador de autenficação 
 require 'controllers/UserController.php'; // instancia o controlador de usuario 
 require 'controller/DashboardController.php'; // instancia o controlador de dashboard
 
 // cria instãncias dos controladores para utilzar seus metodos 
 $authController = new AuthController();
 $userController = new UserController();
 $dashboardController = new DashboardController();

?>
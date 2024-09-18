<?php
class database{
    //utliza o padrão singleton, cujo objetivo é garantir que apenas uma unica instancia de uma classe seja criada durante a execuçao do programa, e que essa instancia seja utilizada sempre que necessarrio 
    private static $instance = null; 

    //metodo publico que retorna a conexão com BD 
    public static function getConnection(){
        if(!self::$instance){
            $host      = 'localhost';
            $db        = 'sistema_usuarios';
            $user      = 'root';
            $passaword = '';
        }
    }
}
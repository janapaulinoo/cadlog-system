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

            //a conexão usa o drive mysql (mysql:) e as informações de host e db
            self::$instance = new PDO("mysql:host=$host; dbname=$db", $user, $passaword);

            //define o modo de erro  para exeções, facilitando a depuração e tratamento dos erros 
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
        }
        return self::$instance;
    }
}
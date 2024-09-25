<?php

//inclui o arquivo de conexão que contem a classe Databease para genreciar a conexão com o BD
require_once 'models/database.php';

class User
{
    // função para encontrar um usuario pelo email
    public static function findByEmail($email){

        //coleta a conexão com o bd 
        $conn = Databse::getConnection();

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        //executa a consulta com o email passado como parametro 
        $stmt->execute(['email' => $email]);

        //retorna  os dados do usuario encontrado como um array assosiativo 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    static public function find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    //função para criar um  novo usuario no banco de dados
    static public function create($data){
        $conn = database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
        

    }
}
?>
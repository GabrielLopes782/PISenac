<?php
class cadDono{
    
public function inserirDono() {
        if (isset($_POST['Adotante'])) {
            $nome = $_POST['nomeDono'];
            $tel=$_POST['telefone'];
            $email=$_POST['email'];
            $pdo = require './pdo/connection.php';
            $sql = "insert into usuario (nomeUsuario, telUser, emailUser) values (?,?,?)";
            $Statement = $pdo->prepare($sql);
            $Statement->bindParam(1, $nome, PDO::PARAM_STR);
            $Statement->bindParam(2, $tel, PDO::PARAM_STR);
            $Statement->bindParam(3, $email, PDO::PARAM_STR);
            $Statement->execute();
            header("location: index.html");
            unset($Statement);
            unset($pdo);
        }
    }  
    }
?>
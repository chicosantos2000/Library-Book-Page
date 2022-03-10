<?php 

$login = $_POST["login"];
$pass = MD5($_POST["password"]);

include "sql_connect.php";

$sql_verifica="SELECT utl_login FROM utilizadores WHERE utl_login='$login'";
$resultado_verifica = $ligacao->query  ($sql_verifica);

    if($resultado_verifica->num_rows > 0) {
        echo"utilizador $login já existe";
        header ("refresh:3;url=registo.php");
        die();
    }else{
     
        $sql_insere="INSERT INTO utilizadores (utl_login, utl_pass) VALUES ('$login', '$pass')";
        $insere = $ligacao->query($sql_insere);
        
        if (!$insere){
            echo "Falha ao registar" . $ligacao->error;
            }else{
            echo "Utilizador registado com sucesso";
            header ("refresh:3;url=index.php");
        }
    }


?> 
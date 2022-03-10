<?php 

$login = $_POST["login"];
$pass = md5($_POST["password"]);
$entrar = $_POST["enviar"];

include "sql_connect.php";

if (isset($entrar)) {
    $sql_verifica="SELECT * FROM utilizadores WHERE utl_login = '$login' AND utl_pass = '$pass'";
    $resultado_verifica=$ligacao->query($sql_verifica);
    
    if ($resultado_verifica->num_rows > 0){
        setcookie("login", $login); 
        echo "Login Realizado com Sucesso";
        header ("refresh:3;url=index.php");
    }else{
        echo "Erro no inicio de sessão" . $ligacao->error;
    }
}   

?>
<?php
include "sql_connect.php";

    $id = $_GET["id"];
    $nome = $_POST["nome"];

$sql = "UPDATE livros SET livros_titulo='$nome' WHERE livros_id ='$id'";

if ($ligacao->query ($sql) === TRUE) {
    echo "Registo atualizado com sucesso!";
}else {
    echo "Error:" . $ligacao->error;
}
?> 
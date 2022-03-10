<?php 
    include "sql_connect.php";

    $id=$_GET["id"];

    $sql="DELETE FROM livros WHERE livros_id=$id";

    if($ligacao->query($sql)===TRUE){
        echo "Livro";
        }else{
        echo "Erro ao apagar devido a situações obscuras.";
        
    }
?>
<?php include "menulivros.html" ?>
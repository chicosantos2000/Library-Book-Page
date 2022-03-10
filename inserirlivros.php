<?php 
    include "sql_connect.php";
 
    $nomelivro = $_POST["Nome do Livro"];
    $nomeautor = $_POST ["Nome do Autor"];
    $copias = $_POST["Cópias do Livro"];
    $dlanc = $_POST["Data de Lançamento"];

    $sql = "INSERT into livros(Nome do Livro, Nome do Autor, Cópias do Livro, Data de Lançamento) values ('$nomelivro', '$nomeauto', '$copias', '$dlanc')"; 

    if ($conn->query ($sql) == TRUE)
    {
       echo "<p> Dados inseridos: $nomelivro | $nomeautor | $copias | $dlanc </p>";  
        
    } else {
        echo "<p> Erro! Os dados: $nomelivro | $nomeautor | $copias | $dlanc  não foram inseridos! </p>";
        }

?>
<?php include "menulivros.html" ?>

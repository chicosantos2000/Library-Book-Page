<?php 
    include "sql_connect.php";

    $id=$_GET["id"];
    

    $sql = "SELECT * FROM livros WHERE livros_id=$id";
    $resultado = mysqli_query($ligacao, $sql);
    
    if(mysqli_num_rows($resultado) > 0){
     while ($row=mysqli_fetch_assoc($resultado)){
         echo "<p>Deseja realmente apagar este Livro?  " . $row["livros_titulo"] . "?</p>";
         echo "<p> <a href=\"apagarlivros.php?id=$id\">SIM!</a> | <a href=\"glivros.php?id\">NÃO!</a></p>";
        
          }
      }
?>          
<?php include "menumarcas.html" ?>
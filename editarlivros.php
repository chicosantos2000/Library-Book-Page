<?php 
include "sql_connect.php";

$id = $_GET["id"];
$sql = "SELECT * FROM livros WHERE livros_id = $id";
$resultado = mysqli_query($ligacao, $sql);

if (mysqli_num_rows($resultado)>0){
    while ($row = mysqli_fetch_assoc($resultado)){
    $id = $row["livros_id"];
    $nome = $row["livros_titulo"];

}
}

else {
    echo "sem resultados";
    
}
?> 
<!DOCTYPE html>
<html>
<head>
 <title> Formulário</title>
    <meta charset = "utf-8">
    
    
    
</head>
<body>
<form method="post" action="editarlivros2.php?id=<?php echo $id; ?>">
        <p> <label> Nome</label> <input type ="text" name="nome" value="<?php echo $nome; ?>"> </p>
        <p> <input type="submit" value="Enviar"> </p>
    </form>
        <p><a href="confirmalivros.php?id=<?php echo $id; ?>"> Apagar </a>
</body>

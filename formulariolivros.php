<!DOCTYPE html>
<html>
<head>
 <title> Formulário</title>
    <meta charset = "utf-8">
</head>
<body>
    <form method="post" action="inserirlivros.php">
        <p> <label> Nome do Livro</label> <input type ="text" name="nome"> </p>
        <p> <label> Nome do Autor </label> <input type="text" name="autor"> </p>
        <p> <label> Cópias do livro </label> <input type="number" name="copias"> </p>
        <p> <label> Data de lançamento </label> <input type="date" name="data"> </p>
        
        
        <p> <input type="submit" value="Enviar"> </p>
    </form>
</body>

</html>
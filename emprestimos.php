<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Biblioteca Oliveira de Azeméis</title>
  </head>
  <body>
    <div class ="container">
      <div class="row">
        <div class="col-sm">
          <h1>Biblioteca</h1>
            <p>Venha aqui buscar um livro bastante interessante</p>
            </div>
        </div>
      
      </div>
      <div class="row"> 
        <div class="col-sm-8">
          <h2>Livros</h2>
            <?php 
            include "sql_connect.php";
            
            $sql_p = "SELECT emprestimos.emprestimos_dataret, alunos.alunos_nome, livros.livros_titulo FROM ((emprestimos INNER JOIN livros ON emprestimos.livros_id=livros.livros_id) INNER JOIN alunos ON emprestimos.alunos_id=alunos.alunos_id)";
            $resultado_p = $ligacao->query($sql_p);
            if ($resultado_p->num_rows > 0)
            { 
                while ($row = $resultado_p->fetch_assoc()){
                echo "<div class=\"card\">
                <div class=\"card-header\"><h5>
  ". $row ["livros_titulo"] ." </h5>
  </div>
  <div class=\"card-body\">
    <p>". $row ["alunos_nome"] . " | " . $row ["emprestimos_dataret"] ."</p> 
   </div>
</div>";
}
}else {
echo "Sem Livros na Biblioteca";
            }
            ?> 
    </div>
          </div>
      
      

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
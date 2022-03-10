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
      
        <div class="row"> 
        <div class="col-sm-8">
          <h2>Alunos da Biblioteca</h2>
          <?php 
            include "sql_connect.php";
            $sql_p = "SELECT alunos.alunos_id, alunos.alunos_nome, alunos.alunos_fone, alunos.alunos_email FROM alunos";
            $resultado_p = $ligacao->query($sql_p);
            if ($resultado_p->num_rows > 0)
            { 
                while ($row = $resultado_p->fetch_assoc()){
                echo "<div class=\"card\">
                <div class=\"card-header\">
  ". $row ["alunos_id"] ."
  </div>
  <div class=\"card-body\">
    <h5 class=\"card-title\">". $row ["alunos_nome"] .  "</h5> 
    <p class=\"card-text\">". $row ["alunos_fone"] . "</p>
    <p class=\"card-text\">" . $row ["alunos_email"] . "</p>
    
  </div>
</div>";
}
}else {
echo "Sem Produtos na Tec Store";
            }
            ?>  
                    
          </div>
        <div class="col-sm-4"> 
          
            <h3>Alunos</h3>
            <ul>
                <?php
                $sql_c="SELECT * FROM alunos";
                $resultado_c=$ligacao->query($sql_c);
                
                if($resultado_c->num_rows>0){
                    while($rowc=$resultado_c->fetch_assoc()){
                        echo "<li class=\"list-group-item\"> <a href=\"alunos.php?id=". $rowc["alunos_id"] . "\">" . $rowc["alunos_nome"] . "</a></li>";
                        
                        
                    }
                }
            ?>
            
            </ul>
            <h3> Livros</h3>
           <ul class="list-group">
           <?php
                $sql_c="SELECT * FROM livros";
                $resultado_c=$ligacao->query($sql_c);
                
                if($resultado_c->num_rows>0){
                    while($rowc=$resultado_c->fetch_assoc()){
                        echo "<li class=\"list-group-item\"> <a href=\"livros.php?id=". $rowc["livros_id"] . "\">" . $rowc["livros_titulo"] . "</a></li>";
                        
                        
                    }
                }
            ?>
            </ul>
          </div>
        </div>
      </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
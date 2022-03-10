
<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


      <title>Biblioteca de Oliveira de Azeméis</title>
  </head>
  <body>
    <div class ="container">
      <div class="row">
        <div class="col-sm">
          <h1>Gestão da Biblioteca</h1>
            <?php   
            if(isset($_COOKIE["login"]))
            {
                echo "Bem vindo, jovem";
                echo "<p><a href=\"logout.php\">Sair</a></p>"; 
            }else{
            echo"Não podes estar aqui, seu bandido!";
            header("refresh:3;url=index.php");
            die();
    }
?> 
            <p>Gestão de Livros da biblioteca</p>
                                                            
          </div>     
        </div>
      <div class="row"> 
        <div class="col-sm">
          <h2>Editar Livros</h2>
            <?php 
            include "sql_connect.php";
            ?>
            <ul class="list-group">
                
           <?php
                $sql_c="SELECT * FROM livros";
                $resultado_c=$ligacao->query($sql_c);
                
                if($resultado_c->num_rows>0){
                    while($rowc=$resultado_c->fetch_assoc()){
                        echo "<li class=\"list-group-item\"> <a href=\"editarlivros.php?id=". $rowc["livros_id"] . "\">" . $rowc["livros_titulo"] . "</a></li>";
                        }    
                    }else{
                    echo "Sem Livros";
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
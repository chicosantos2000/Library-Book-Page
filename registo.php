<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Biblioteca</title>
  </head>
  <body>
    <div class ="container">
      <div class="row">
        <div class="col-sm">
          <h1>Registo para Administradores</h1>
            <p>Apenas e unicamente para administradores</p>
                                                            
          </div>
            
            
        </div>
      <div class="row"> 
        <div class="col-sm-8">
          <h2>Registo</h2>
 <form method="post" action="registo2.php">
  <div class="form-group">
    <label for="login">Utilizador</label>
    <input type="text" name="login" class="form-control" id="login" placeholder="Insira o Login">
    </div>
  <div class="form-group">
    <label for="password">Insira a sua Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Insira a sua Senha">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
                    
          </div>
        <div class="col-sm-4"> 
          <h3>Livros</h3>
            <ul>
                <?php
                include "sql_connect.php";
                $sql_c="SELECT * FROM livros";
                $resultado_c=$ligacao->query($sql_c);
                
                if($resultado_c->num_rows>0){
                    while($rowc=$resultado_c->fetch_assoc()){
                        echo "<li class=\"list-group-item\"> <a href=\"livros.php?id=". $rowc["livros_id"] . "\">" . $rowc["livros_titulo"] . "</a></li>";
                        
                    }
                }
            ?>
            
            </ul>
            
            
            <h3>Alunos</h3>
           <ul class="list-group">
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
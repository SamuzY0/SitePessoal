<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samuel | Recados</title>
    <!-- Fonts Google -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light">
            <section class="container">
                <div class="row col-12 p-5">
                    <div class="col-11 col-sm-4">
                        <a class="navbar-brand" href="index.html">
                        </a>
                        <button class="navbar-toggler float-end mb-3" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-1 col-sm-8 collapse flex-row-reverse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav">
                            <li class="nav-item text-right">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre.html">Sobre</a>
                            </li>                  
                            <li class="nav-item">
                                <a class="nav-link" href="musicas.html">Musicas</a>
                            </li>                  
                            <li class="nav-item">
                                <a class="nav-link" href="recados-form.html">Recados</a>
                            </li>                  
                        </ul> 
                    </div>
                </div>            
            </section>
        </nav>        
    </header>
    <main> 
        <section id="lista-recados">
            <div class="sexo1">
            <div class="container">                
            <h1>Meus recados</h1>
            <p><a href="recados-form.html">Clique aqui</a> para deixar o seu recado</p><br>
            </div>
            <?php
                $sql = "SELECT * FROM foda";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=samuel','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

<div class="d-flex flex-wrap justify-content-center" >
              <?php foreach ($lista as $linha) : ?>
                <div class="card border-dark mb-3 m-2" style="width: 37rem;">
                  <div class="card-body text-dark">
                    <h5 class="card-title text-primary"><?php echo $linha['nome'] ?> </h5>
                    <p class="card-text"><?php echo $linha['recado'] ?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php echo $linha['turma'] ?></small>
                  </div>
                </div>
              <?php endforeach ?>

            </div>
        </section>        
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <p class="text-center"><em></em></p>
        </div>
    </footer>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </body>
</html>
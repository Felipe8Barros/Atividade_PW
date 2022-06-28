<!DOCTYPE html>
<html lang="pt-br" >

<?php
  session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body{
    background-color: #7FFFD4;
  }
  form [type="submit"] {
    display: block;
    margin: auto;
}
  div [name="Cadastrar"]{
    margin: 0;
  }
</style>
<body>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Menu
  </button>
  <ul class="dropdown-menu">
    <li><center><a class="dropdown-item active" href="PaginaInicial.php">Pagína Inicial</a></center></li>
    <li><center><a class="dropdown-item" href="Mostrar.php">Mostruário</a></center></li>
    <li class="dropdown-item"><center>
        <?php if(isset($_SESSION['usuario'])) {?>
          <a class="dropdown-item" href="Cadastro.php">Cadastro</a>
        <?php } else {?>
        <?php if(isset($_SESSION['usuario'])) ?>
          <a class="dropdown-item disabled" href="PaginaInicial.php">Cadastro</a>
        <?php }?>  
        </center></li>
        <p></p>
        <li><center><h5 class="dropdown-header">Área de Login</h5></center></li>
    <?php if(isset($_SESSION['usuario'])){?>
      <form action="Logout.php" class="d-flex">
        <input type="submit" value="Sair" class="btn btn-outline-info"/>
      </form>
    <?php } else { ?>
      <form action="Login.php" class="d-flex">
        <input type="submit" value="Entrar" class="btn btn-outline-info"/>
      </form>
    <?php } ?>
  </ul>
</div> 

  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1><center> Cadastrar Jogo </center></h1>
            <form action="Salvar.php" method="POST">
                <div>
                    <h5><label for="nome" class="form-label"> Nome: </label><h5>
                    <input type="text" name="nome" id="nome" placeholder="Nome do Game" class="form-control" required/>
                </div>
                <p></p>
                <div>
                  <h5><label for="desenvolvedor" class="form-label"> Desenvolvedor: </label><h5>
                    <input type="desenvolvedor" name="desenvolvedor" id="desenvolvedor" placeholder="Desenvolvedor" class="form-control" required/>
                </div>
                <p></p>
                <div>
                  <h5><label for="categoria" class="form-label"> Categoria: </label><h5>
                    <input type="categoria" name="categoria" id="categoria" placeholder="Categoria" class="form-control" required/>
                </div>
                <p></p>
                <div>
                  <h5><label for="loja" class="form-label"> Loja: </label><h5>
                    <input type="loja" name="loja" id="loja" placeholder="Loja de Venda" class="form-control" required/>
                </div>
                <p></p>
                <div>
                  <h5><label for="console" class="form-label"> Console: </label><h5>
                    <input type="console" name="console" id="console" placeholder="Console" class="form-control" required/>
                </div>
                <p></p>
                <div>
                    <input type="submit" name="Cadastrar" value="Cadastrar" class="btn btn-primary" />
                </div>
             </form>
        </div>
    </div>
</div>

</body>
</html>

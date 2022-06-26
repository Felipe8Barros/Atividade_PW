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
<body>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item active" href="PaginaInicial.php">Pagína Inicial</a></li>
    <li><a class="dropdown-item" href="Mostruário.php">Mostruário</a></li>
    <li><a  class="dropdown-item "href="Cadastro.php">Cadastro</a>
        <?php if(isset($_SESSION['usuario'])) {?>
          <a class="nav.link active" href="Cadastro.php"></a>
        <?php } else { ?>
        <?php if(isset($_SESSION['usuario'])) ?>
          <a class="nav.item disabled" href="PaginaInicial.php"></a>
        <?php } ?>  
    </li>
  
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
            <h1> Mostruário </h1>
            <form action="Salvar.php" method="POST">
                <div>
                    <label for="nome" class="form-label"> Nome: </label>
                    <input type="text" name="nome" id="nome" plaaceholder="nome" class="form-control" required/>
                </div>
                <div>
                    <label for="desenvolvedor" class="form-label"> Desenvolvedor: </label>
                    <input type="desenvolvedor" name="desenvolvedor" id="desenvolvedor" plaaceholder="desenvolvedor" class="form-control" required/>
                </div>
                <div>
                    <label for="categoria" class="form-label"> Categoria: </label>
                    <input type="categoria" name="categoria" id="categoria" plaaceholder="categoria" class="form-control" required/>
                </div>
                <div>
                    <label for="loja" class="form-label"> Loja: </label>
                    <input type="loja" name="loja" id="loja" plaaceholder="loja" class="form-control" required/>
                </div>
                <div>
                    <label for="console" class="form-label"> Console: </label>
                    <input type="console" name="console" id="console" plaaceholder="console" class="form-control" required/>
                </div>
                <div>
                    <input type="submit" name="Cadastrar" class="btn btn-primary" />
                </div>
             </form>
        </div>
    </div>
</div>

</body>
</html>
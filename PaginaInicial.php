<!DOCTYPE html>
<html lang="pt-br">

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
    background-color: #E1F5A9;
  }
</style>
<body>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item active" href="PaginaInicial.php">Pagína Inicial</a></li>
    <li><a class="dropdown-item" href="Mostrar.php">Mostruário</a></li>
    <li><a class="dropdown-item "href="Cadastro.php">Cadastro</a>
    <p></p>
        <?php if(isset($_SESSION['usuario'])) {?>
          <a class="nav.link active" href="Cadastro.php"></a>
        <?php } else {?>
        <?php if(isset($_SESSION['usuario'])) ?>
          <a class="nav.item disabled" href="PaginaInicial.php"></a>
        <?php }?>  
    </li>

   <?php if(isset($_SESSION['usuario'])){?>
      <form action="Logout.php" class="d-flex"=>
        <input type="submit" value="Sair" class="btn btn-outline-info" />
      </form>
    <?php } else { ?>
      <form action="Login.php" class="d-flex">
        <input type="submit" value="Entrar" class="btn btn-outline-info"/>
      </form:> 
    <?php } ?>

  </ul>
</div> 

  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Mostruário </h1>
            <p> GAMES </p>
        </div>
    </div>
</div>

</body>
</html>
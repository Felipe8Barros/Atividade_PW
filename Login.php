<!DOCTYPE html>
<html lang="pt-br">

<?php
  session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" text-align: center>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body text-align: center>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item active" href="PaginaInicial.php">Pagína Inicial</a></li>
    <li><a class="dropdown-item" href="Mostrar.php">Mostruário</a></li>
    <li><a class="dropdown-item disabled" href="#">Cadastro</a></li>
    <p></p>
    <form action="login.php" class="d-flex">
      <input type="submit" value="login" class="btn btn-outline-info"/>
    </form>
  </ul>

</div> 

  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Mostruário </h1>
            <form action="Validar.php">
                <div>
                    <label for="nome" class="form-label"> Nome: </label>
                    <input type="text" name="nome" id="nome" plaaceholder="nome" class="form-control"/>
                </div>
                <div>
                    <label for="senha" class="form-label"> Senha: </label>
                    <input type="password" name="senha" id="senha" plaaceholder="senha" class="form-control" />
                </div>
                <div>
                    <input type="submit" name="login" class="btn btn-primary" />
                </div>
             </form>
        </div>
    </div>
</div>

</body>
</html>
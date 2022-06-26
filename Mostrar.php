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
<body>

<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="PaginaInicial.php">Pagína Inicial</a></li>
    <li><a class="dropdown-item active" href="Mostrar.php">Mostruário</a></li>
    <li><a class="dropdown-item disabled" href="#">Cadastro</a></li>
  </ul>
</div> 

  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Santuário dos Games </h1>
            <?php require("Mostruário.php"); ?>
        </div>
    </div>
</div>

</body>
</html>
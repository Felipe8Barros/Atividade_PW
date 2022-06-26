<!DOCTYPE html>
<html lang="pt-br">

<?php

require("Conecta.php");

$sqlselect = " SELECT * FROM tb_jogos ";

$resp = mysqli_query($con, $sqlselect);

?>
<table class="table table-striped table-hover table-dark">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Desenvolver</th>
        <th>Categoria</th>
        <th>Loja</th>
        <th>Console</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        while($linha = mysqli_fetch_assoc($resp)) { ?>
            <tr>
                <td> <?php echo $linha['nome_jg'] ?> </td>
                <td> <?php echo $linha['desenvolvedor_jg'] ?> </td>
                <td> <?php echo $linha['categoria_jg'] ?> </td>
                <td> <?php echo $linha['loja_jg'] ?> </td>
                <td> <?php echo $linha['console_jg'] ?> </td>
                <td> 
                  <form action="Excluir.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $linha['id_jg']?>" />
                        <input type="submit" value="excluir" class="btn btn-danger"/>
                  </form> 
                </td>
            </tr>
    <?php } ?>    
    </tbody>
</table>
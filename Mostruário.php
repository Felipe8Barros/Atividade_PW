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
        <th><center>Nome</center></th>
        <th><center>Desenvolver</center></th>
        <th><center>Categoria</center></th>
        <th><center>Loja<center></th>
        <th><center>Console</center></th>
        <th><center></center></th>
      </tr>
    </thead>
    <tbody>
    <?php 
        while($linha = mysqli_fetch_assoc($resp)) { ?>
            <tr>
                <td><center> <?php echo $linha['nome_jg'] ?> </center></td>
                <td><center> <?php echo $linha['desenvolvedor_jg'] ?> <center></td>
                <td><center> <?php echo $linha['categoria_jg'] ?> </center></td>
                <td><center> <?php echo $linha['loja_jg'] ?> </center></td>
                <td><center> <?php echo $linha['console_jg'] ?> </center></td>
                <td><center> 
                  <form action="Excluir.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $linha['id_jg']?>"/>
                        <input type="submit" value="Excluir" class="btn btn-danger"/>
                  </form> 
                </center></td>
            </tr>
    <?php } ?>    
    </tbody>
</table>

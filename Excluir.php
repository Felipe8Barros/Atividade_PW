<?php

require("Conecta.php");

if(isset($_POST['id']))
{
    $id = $_POST['id'];
}
else
{
    echo "Informe o ID do usuário a ser apagado";
    echo "Exemplo: ";
    echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?id=2';
    echo '<a href="' . $link . '">' . $link . '</a>';
    exit();
}
$sqldelete = "DELETE FROM tb_jogos WHERE id_jg = $id";

$resp = mysqli_query($con, $sqldelete);

header("location: Mostrar.php");

?>
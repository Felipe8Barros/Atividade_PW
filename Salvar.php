<?php

require("Conecta.php");


extract($_POST);


$sqlinsert = "insert into tb_jogos (nome_jg, desenvolvedor_jg, categoria_jg, loja_jg, console_jg) values ('$nome', '$desenvolvedor', '$categoria', '$loja', '$console')";

    $resp = mysqli_query($con,$sqlinsert);

    if($resp)
    {
        header("location: Mostrar.php");
        // echo " Cadastro Finalizado!";
        // mysqli_close($con);
    }
    else 
    {   
        echo mysqli_connect_error();   
    }

?>
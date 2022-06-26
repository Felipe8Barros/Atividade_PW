<?php

require("Conecta.php");


$sqlinsert = "insert into tb_jogos (nome_jg, desenvolvedor_jg, categoria_jg, loja_jg, console_jg) values 
('Minecraft','Monjang','Sobrevivência','Xbox Games, Palystation Store','Desktop, Mobile, Xbox, Playstation, Nitendo Suíte'),
('CS GO','Valve Corporation','Estratégia','Steam','Desktop')";

    $resp = mysqli_query($con,$sqlinsert);

    if($resp)
    {
        echo " Cadastro Finalizado!";
        mysqli_close($con);
    }
    else 
    {   
        echo mysqli_connect_error();   
    }

?>
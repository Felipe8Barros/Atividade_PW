<?php

    session_start();
    if(!isset($_SESSION['usuario']))
    {
        if(isset($_SESSION['nome']) == false) {
            header("location: Login.php");
        }
            else
            {
                exit();
            }
    }

    if(!isset($_REQUEST['nome']))
    {
        header("location: PaginaInicial.php");
    }
    if($_REQUEST['nome'] == "admin" && $_REQUEST['senha'] == "nimda")
    {
        $_SESSION['usuario'] = "Administrador";
        header("location: PaginaInicial.php");
    }

?>

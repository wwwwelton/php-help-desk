<?php
    //gera um warning se não achar o script
    include("menu.php"); 

    //gera um fatal error se não achar o script e interrompe completamente o script
    require("menu.php"); 

    //'_ONCE' permite a inclusão do script uma única vez e gera um warning se não achar o script
    include_once("menu.php");

    //'_ONCE' permite a inclusão do script uma única vez e gera um fatal error se não achar o script e interrompe completamente o script
    require_once("menu.php"); 
?>

Conteúdo da página (início)
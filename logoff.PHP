<?php

    session_start();

    //remove índices de arrays (remover os índices da $_SESSION)
    //unset()

    //remove o índice apenas se existir
    //unset($_SESSION['x']);

    //destruir a variável de sessão
    //session_destroy()

    //será destruída a sessão, mas os valores ficam disponíveis até a próxima sessão
    //é comum forçar um redirecionamento apos session_destroy() para limpar as variáveis de $_SESSION 
    session_destroy();
    header('Location: index.php');

?>
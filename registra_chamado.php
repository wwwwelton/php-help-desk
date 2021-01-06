<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    session_start();

    //Manipulando o texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; //PHP_EOL indica que é o final da linha

    //cria o arquivo se não existir e abre para escrita 'a', coloca o ponteiro no final do arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //grava os dados no arquivo
    fwrite($arquivo, $texto); 

    //fecha o arquivo
    fclose($arquivo); 

    //echo $texto;
    header('Location: abrir_chamado.php');

?>
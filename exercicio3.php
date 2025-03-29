<?php 
    $nome = $_POST['nome'];
    $livro = $_POST['livro'];
    $usuario = $_POST['usuario'];
    $dataDevolucao = 12;

    if ($usuario === prof){
        $devolucao = 14;
    } else {
        $devolucao = 7;
    }

    echo $nome . " " . $livro . " "  ;
    
?>
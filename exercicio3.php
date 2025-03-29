<?php 
    date_default_timezone_set("America/Sao_Paulo");
    $nome = $_POST['nome'];
    $livro = $_POST['livro'];
    $usuario = $_POST['usuario'];
    $dataDevolucao = new DateTime();
    $dataAtual = new DateTime();

    if ($usuario === "prof"){
        $dataDevolucao->modify('+14 days');

        echo "O " . $usuario . " " . $nome . " pegou o livro " . $livro . " " . "<br>";
        echo "Data de entrega: " . $dataDevolucao->format("d/m/Y") . "<br>";
        echo "Data atual: " . $dataAtual->format("d/m/Y");
    } else {
        $dataDevolucao->modify('+7 days');

        
        echo "O " . $usuario . " " . $nome . " pegou o livro " . $livro . " " . "<br>";
        echo "Data de entrega: " . $dataDevolucao->format("d/m/Y") . "<br>";
        echo "Data atual: " . $dataAtual->format("d/m/Y");
    }
?>
<?php 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];

    if ($idade < 18){
        echo "Inscrição inválida";
    } else {
        if ($cidade === 'pelotas' || $cidade === 'rioGrande'){
            echo $nome . " Inscrição para Zona Sul";
        } else {
            echo $nome . " Inscrição para a Capital";
        }
    }
?>
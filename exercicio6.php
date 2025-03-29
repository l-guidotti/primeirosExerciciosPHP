<?php
    $nome = $_GET['name'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $media = 0;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    $mediaFormatada = number_format($media, 2);

    echo "A média do aluno " . $nome . " é " . $mediaFormatada;

?>
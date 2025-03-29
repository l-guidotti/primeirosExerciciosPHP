<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cartao = $_POST['cartao'];

    echo "Olá " . $nome . ", seu email é " . $email . "; Seu CPF é: " . $cpf . "; E a bandeira do seu cartão é: " . $cartao;
?>
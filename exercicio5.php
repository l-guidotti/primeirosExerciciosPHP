<?php
    if (isset($_POST['escolha'])) {
        echo "Linguagens escolhidas: <br>";
        
        foreach ($_POST['escolha']as $escolha) {
            echo htmlspecialchars($escolha) . "<br>";
        }
    } else {
        echo "Nenhuma linguagem escolhida.";
    }
?>
<?php
    $altura = $_POST['altura'];
    $sexo = $_POST['sexo'];
    $imc = 0;

    if($sexo === 'masculino'){
        $imc = (72.7 * $altura) - 58;
    } else {
        $imc = (62.1 * $altura) - 44.7;
    }

    echo $imc;

?>
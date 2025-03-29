<?php 
    $number = $_POST['number'];
    $soma = 0;

    if($number < 0){
        echo ('Número negativo');
        return;
    }

    for ($i=1; $i<$number; $i++){
        $soma += $i;
    }

    echo $soma;
?>
<?php
    echo "Qual numero é maior? \n" ;

    echo "Digite o primeiro numero:\n";
    $n1 = (float) readline();

    echo "Digite o segundo numero:\n";
    $n2 = (float) readline();
    
    
    switch($n1)
    {
        case ($n1 > $n2):
            echo "O 1° número(" . $n1 .") é maior!";
            break;
        case ($n1 < $n2):
            echo "O 2° número(" . $n2 .") é maior!";
            break;
        case ($n1 == $n2):
            echo "O 1° número(" . $n1 .") e o 2º numero(" . $n2 . ") são iguais!";
            break;
    } 
?>
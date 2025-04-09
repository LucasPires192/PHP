<?php
$p1 = "arara";
$p2 = "casa";

function verificarPalavra($palavra){
    $letras = str_split($palavra);
    $letras = array_reverse($letras);
    $letras = implode($letras);
    
    echo "A palavra $palavra "; 
    if($letras == $palavra){
        echo "é palidromo\n";  
    }else{
        echo "não é palidromo\n";
    }
}

verificarPalavra($p1);
verificarPalavra($p2);
?>
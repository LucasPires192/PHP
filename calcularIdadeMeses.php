<?php
    
    function calcularIdade($nasc){
        $hj = new DateTime();
        $nasc = DateTime::createFromFormat('d/m/Y', $nasc);
        
        $diferenca = $hj->diff($nasc);
        
        return($diferenca->y * 12 + $diferenca->m);
    }
    
    $nascimento = readLine("Digite sua data de nascimento(dd/mm/yyyy): ");
    
    echo "Você tem " . calcularIdade($nascimento) . " meses de idade!";
?>
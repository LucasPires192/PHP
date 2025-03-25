
<?php
    echo "Crie sua senha:\n";
    $senha = readline();
    
    echo "Faça login com a senha:\n";
    $login = readline();
    
    while($login != $senha){
        echo "Senha incorreta! Tente novamente.\n";
        echo "Faça login com a senha:\n";
        $login = readline();
        
    }
     echo "Acesso liberado!"
?>
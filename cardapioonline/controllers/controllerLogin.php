<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


        var_dump(
        "email: ",$email, 
        "senha: ",$senha, 
        );
    }
?>
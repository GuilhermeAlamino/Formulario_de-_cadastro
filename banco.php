<?php

    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $db = "novoteste";
    
    $cn = mysqli_connect( $servidor,$user,$senha,$db);
    
    if(mysqli_connect_errno()){
        die("Erro" . mysqli_connect_errno());
    }
    
    if(isset($_POST["nome"])){
        
        $nome        =   $_POST["nome"];
        $sobrenome   =   $_POST["sobrenome"];
        $email       =   $_POST["email"];
        $tipo        =   $_POST["tipo"];
        $celular     =   $_POST["celular"];
        $cpf         =   $_POST["cpf"];
        $senha       =   $_POST["senha"];

        $inserir = " INSERT INTO teste ";
        $inserir.= " ( nome, sobrenome, email, celular, tipo, cpf, senha ) ";
        $inserir.= " VALUES ";
        $inserir.= " ('$nome','$sobrenome','$email','$celular','$tipo','$cpf','$senha' ) ";
    
        $cn_db = mysqli_query($cn,$inserir);

        if(!$cn_db){
            die("errooooo");
        } else{

        }
    } 
    
    ?>
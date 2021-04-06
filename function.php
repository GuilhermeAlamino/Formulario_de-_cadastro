<?php

$tipousuario = $_GET['tipo'] ;

if ($tipousuario == 'clt'){
    $query = (" SELECT * FROM teste WHERE tipo = '{$tipousuario}' ");
    buscarDados($query);
}elseif ($tipousuario == 'pj'){
    $query = (" SELECT nome, sobrenome, email FROM teste WHERE tipo = '{$tipousuario}' " );    
    buscarDados($query);
}elseif ($tipousuario == 'autonomo'){
    $query = (" SELECT nome, sobrenome, tipo, cpf FROM teste WHERE tipo = '{$tipousuario}' ");
    buscarDados($query);
}


    function buscarDados($query){
        try{
            $viapdo = new PDO('mysql:host=localhost; dbname=novoteste', 'root', '');
            $viapdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $consultaraodb = $viapdo->query($query);

            echo json_encode($consultaraodb->fetchAll());

        }catch(PDOException $qualquercoisa){
            echo 'ERRO'. $qualquercoisa->getMessage();
        }
    }

/* minha lógica 

1- usar a mesma função 'buscaDados'
2- buscaDados vai receber uma query como parametro
3- a query será gerada junto com o tipo de usuário

 */
?>


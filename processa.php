<?php

    include 'cabecalho.php';


    if ($_GET) {
        $busca = $_GET['txt_busca'];

        if ($busca == ""){
            header('Location: index.php');
        }

        echo "Resultados da Busca<br>";
        echo " Cavalo encontrado: $busca <br>";
   

    }elseif ($_POST){
        $nome = $_POST['txt_nome'];
        $idade = $_POST['num_idade'];
        $valor = $_POST['num_valor'];
        $parcelas = $_POST['sel_parcelas'];
    }
        
 
?>
    


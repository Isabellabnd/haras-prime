<?php

    include_once 'cabecalho.php';

$busca = $_GET["txt_busca"]; 
$nome = $_POST["txt_nome"];
$idade = $_POST["num_idade"]; 
$valor = $_POST["num_valor"];
$parcelas = $_POST["sel_parcelas"]; 

    if ($parcelas == 1){

        echo "<h1>Você pagará R$ $valor</h1>";

    }elseif ($parcelas == 12) {
        $valor*1.05;

      echo "Você pagará R$ $valor ";

    }else {
        echo "Você pagará R$ $valor ";
    }
?>
    


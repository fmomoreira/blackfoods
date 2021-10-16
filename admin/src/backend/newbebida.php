
<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================
    $codpizza = 0;
    $promocao = $_POST['promocao'];
    $nomepizza = $_POST['nomebebida'];
    $valorgrande = $_POST['precobebida'];
    $valorbrotinho = 0;
    $ingredientes= 0;
    $tipopizza = $_POST['tipo'];
    $codproduto = $_POST['codproduto'];
    
    $status = $_POST['status'];



///tipo e se e doce ou salgado
    //0= salgado
    //1= doce

    //codigo produto e qual e o segmento alimento, bebida, etc...
    // 1 = pizza
    // 2 = esfiha 
    // 3 = bebida 
    


    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO cardapio";
    $inserir .= "(codigo_pizza, promocao, nomepizza, precopizza, precobrotinho, ingredientes, tipo, codproduto, status)";
    $inserir .= "VALUES";
    $inserir .= "('$codpizza', '$promocao','$nomepizza', '$valorgrande', '$valorbrotinho', '$ingredientes', '$tipopizza', '$codproduto','$status')";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Esfiha adicionada!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro, tente novamente!";
    }

  echo json_encode($retorno);





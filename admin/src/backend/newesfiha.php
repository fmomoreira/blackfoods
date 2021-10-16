
<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================
    $codpizza = $_POST['codesfiha'];
    $promocao = $_POST['promocao_esfiha'];
    $nomepizza = $_POST['nomeesfiha'];
    $valorgrande = $_POST['precoesfiha'];
    $valorbrotinho = 0;
    $ingredientes= $_POST['ingredientes'];
    $tipopizza = $_POST['tipo'];
    $codproduto = $_POST['codproduto'];
    
    $status = "ATIVO";
   
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




<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================
    $codpizza = $_POST['codesfiha'];
    $promocao = $_POST['promocao'];
    $nomepizza = $_POST['nomeesfiha'];
    $valorgrande = $_POST['precoesfiha'];
    $ingredientes= $_POST['ingredientes'];
    $tipopizza = $_POST['tipo'];
   
    
    $id= $_POST['id'];
    $status = $_POST['status'];;






  
    

   
    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "UPDATE `cardapio` SET codigo_pizza='$codpizza', promocao='$promocao', nomepizza='$nomepizza', precopizza='$valorgrande', ingredientes='$ingredientes', tipo='$tipopizza', status='$status' WHERE id=$id";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Esfiha Alterada!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro, tente novamente!";
    }

  echo json_encode($retorno);

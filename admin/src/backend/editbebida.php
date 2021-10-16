
<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================
    $codpizza = 0;
    $promocao = $_POST['promocao_bebida'];
    $nomepizza = $_POST['nomebebida'];
    $valorgrande = $_POST['precobebida'];
    $tipopizza = $_POST['tipo_bebida'];
    $id= $_POST['id'];
    $status = $_POST['status'];




///tipo e se e doce ou salgado
    //0= salgado
    //1= doce

    //codigo produto e qual e o segmento alimento, bebida, etc...
    // 1 = pizza
    // 2 = esfiha 
    // 3 = bebida 
    


    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "UPDATE `cardapio` SET codigo_pizza='$codpizza', promocao='$promocao', nomepizza='$nomepizza', precopizza='$valorgrande', tipo='$tipopizza', status='$status' WHERE id=$id";
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



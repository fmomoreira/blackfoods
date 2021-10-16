
<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================
    $codpizza = $_POST['codpizza'];
    $promocao = $_POST['promocao'];
    $nomepizza = $_POST['nomepizza'];
    $valorgrande = $_POST['precopizza'];
    $valorbrotinho = $_POST['precobrotinho'];
    $ingredientes= $_POST['ingredientes'];
    $tipopizza = $_POST['tipo'];
   
    
    $id= $_POST['id'];
    $status = $_POST['status'];;






   ///tipo e se e doce ou salgado
    //0= salgado
    //1= doce
    //3= nulo 

    //codigo produto e qual e o segmento alimento, bebida, etc...
    // 1 = pizza
    // 2 = esfiha 
    // 3 = bebida 
    
    

   
    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "UPDATE `cardapio` SET codigo_pizza='$codpizza', promocao='$promocao', nomepizza='$nomepizza', precopizza='$valorgrande', precobrotinho='$valorbrotinho', ingredientes='$ingredientes', tipo='$tipopizza', status='$status' WHERE id=$id";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Pizza Alterada!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro, tente novamente!";
    }

  echo json_encode($retorno);

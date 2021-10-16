
<?php

require('conecta.php');

//================= AGUARDAR POST DO FORMULARIO =====================

    $nome = "felipe";
    $email = "email";
    $cpf = "3123123123";
    $senha = "123";
    $confirmsenha = "dasdsd1d";
    $cep = "1231231";
    $rua = "qweqwew";
    $bairro = "eqwewq";
    $cidade = "qwqdqwd";
    $estado = "dasdsa";
    $status = "ativo";
    $nivelacesso = "1";
    

   

    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO usuarios";
    $inserir .= "(nome, email, cpf, senha, confirmsenha, cep, rua, bairro, cidade, estado, status, nivelacesso)";
    $inserir .= "VALUES";
    $inserir .= "('$nome', '$email', '$cpf', '$senha', '$confirmsenha', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$status', '$nivelacesso')";
    //$retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Nova pizza adicionada!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro, tente novamente!";
    }

  echo json_encode($retorno);



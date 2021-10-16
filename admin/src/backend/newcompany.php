
<?php

require("conecta.php");

//================= AGUARDAR POST DO FORMULARIO =====================
if (isset($_POST["nome"])) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $confirmsenha = $_POST["confirmsenha"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $rua = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $status = $_POST["status"];
    $nivelacesso = $_POST["nivel_de_acesso"];
    


    //============ INSERIR DADOS NO BANCO DE DADOS =====================   
    $inserir = "INSERT INTO usuarios";
    $inserir .= "(nome, email, cpf, senha, confirmsenha, cep, rua, bairro, cidade, estado, status, nivel_de_acesso)";
    $inserir .= "VALUES";
    $inserir .= "('$nome', '$email', '$cpf', '$senha', '$confirmsenha', '$cep', '$rua', '$bairro', '$cidade', $estado',  '$status', '$nivelacesso')";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if ($salvounobanco) {
        $retorno["sucesso"] = true;
        $retorno["menssagem"] = "Mensagem enviada com Sucesso!";
    } else {
        $retorno["sucesso"] = false;
        $retorno["menssagem"] = "Erro ao enviar mensagem!";
    }

    echo json_encode($retorno);
}

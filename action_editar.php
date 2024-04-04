<?php

require "config.php";

//como agora as informações não vem pela URL e sim pelo formulário
//o filter tem que ser do tipo POST

$id = filter_input(INPUT_POST, 'id');

//campos do sistema
$billing_nomecompleto = filter_input(INPUT_POST, 'billing_nomecompleto');
$billing_cpf = filter_input(INPUT_POST, 'billing_cpf');
$billing_email = filter_input(INPUT_POST, 'billing_email');
$billing_telefone = filter_input(INPUT_POST, 'billing_telefone');
$billing_cep = filter_input(INPUT_POST, 'billing_cep');
$billing_rua = filter_input(INPUT_POST, 'billing_rua');
$billing_estado = filter_input(INPUT_POST, 'billing_estado');
$billing_cidade = filter_input(INPUT_POST, 'billing_cidade');
$billing_bairro = filter_input(INPUT_POST, 'billing_bairro');
$billing_numero = filter_input(INPUT_POST, 'billing_numero');
$billing_complemento_andar = filter_input(INPUT_POST, 'billing_complemento_andar');
$billing_complemento_apartamento  = filter_input(INPUT_POST, 'billing_complemento_apartamento');
$billing_observacoes  = filter_input(INPUT_POST, 'billing_observacoes');



if ($id) {
    //$sql = $pdo->prepare("UPDATE clientes SET billing_nomecompleto = :billing_nomecompleto, billing_email = :billing_email WHERE id = :id");
    $sql = $pdo->prepare("UPDATE clientes SET billing_nomecompleto = :billing_nomecompleto, billing_cpf = :billing_cpf, billing_email = :billing_email, billing_telefone = :billing_telefone, billing_cep = :billing_cep, billing_rua = :billing_rua, billing_estado = :billing_estado, billing_cidade = :billing_cidade, billing_bairro = :billing_bairro, billing_numero = :billing_numero, billing_complemento_andar = :billing_complemento_andar, billing_complemento_apartamento = :billing_complemento_apartamento, billing_observacoes = :billing_observacoes WHERE id = :id");
    $sql->bindValue(':billing_nomecompleto', $billing_nomecompleto);
    $sql->bindValue(':billing_cpf', $billing_cpf);
    $sql->bindValue(':billing_email', $billing_email);
    $sql->bindValue(':billing_telefone', $billing_telefone);
    $sql->bindValue(':billing_cep', $billing_cep);
    $sql->bindValue(':billing_rua', $billing_rua);
    $sql->bindValue(':billing_estado', $billing_estado);
    $sql->bindValue(':billing_cidade', $billing_cidade);
    $sql->bindValue(':billing_bairro', $billing_bairro);
    $sql->bindValue(':billing_numero', $billing_numero);
    $sql->bindValue(':billing_complemento_andar', $billing_complemento_andar);
    $sql->bindValue(':billing_complemento_apartamento', $billing_complemento_apartamento);
    $sql->bindValue(':billing_observacoes', $billing_observacoes);
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("Location: listar.php");
    exit;
} else {
    header("Location: listar.php");
    exit;
}

<?php
require "config.php";

//$nome = filter_input(INPUT_POST, 'billing_nomecompleto');
//$email = filter_input(INPUT_POST, 'billing_email');
/*
`id` int(11) NOT NULL AUTO_INCREMENT,
`billing_nomecompleto` varchar(255) DEFAULT NULL,
`billing_cpf` varchar(20) DEFAULT NULL,
`billing_email` varchar(255) DEFAULT NULL,
`billing_telefone` varchar(10) DEFAULT NULL,
`billing_cep` varchar(10) DEFAULT NULL,
`billing_rua` varchar(255) DEFAULT NULL,
`billing_estado` varchar(255) DEFAULT NULL,
`billing_cidade` varchar(255) DEFAULT NULL,
`billing_bairro` varchar(255) DEFAULT NULL,
`billing_numero` varchar(10) DEFAULT NULL,
`billing_complemento_andar` varchar(10) DEFAULT NULL,
`billing_complemento_apartamento` varchar(50) DEFAULT NULL,
`billing_observacoes` varchar(255) DEFAULT '',
*/

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

//var_dump($billing_complemento_apartamento);
//die();
/*$billing_observacoes = filter_input(INPUT_POST, 'billing_observacoes');
*/

//$sql = $pdo->prepare("INSERT INTO clientes (billing_nomecompleto, billing_cpf, billing_email, billing_telefone, billing_cep, billing_rua, billing_estado, billing_cidade, billing_bairro, billing_numero, billing_complemento_andar, billing_complemento_apartamento, billing_observacoes) VALUES (:billing_nomecompleto,:billing_cpf,:billing_email,:billing_telefone,:billing_cep,:billing_rua,:billing_estado,:billing_cidade,:billing_bairro,:billing_numero,:billing_complemento_andar,:billing_complemento_apartamento,:billing_observacoes)");

$sql = $pdo->prepare("INSERT INTO clientes (billing_nomecompleto, billing_cpf, billing_email, billing_telefone, billing_cep, billing_rua, billing_estado, billing_cidade, billing_bairro,billing_numero,billing_complemento_andar,billing_complemento_apartamento,billing_observacoes) VALUES (:billing_nomecompleto,:billing_cpf,:billing_email,:billing_telefone,:billing_cep,:billing_rua,:billing_estado,:billing_cidade,:billing_bairro,:billing_numero,:billing_complemento_andar,:billing_complemento_apartamento,:billing_observacoes)");


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
$sql->execute();

header("Location: listar.php");

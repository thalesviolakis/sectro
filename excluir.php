<?php 

require "config.php";

//como agora as informações não vem pela URL e sim pelo formulário
//o filter tem que ser do tipo POST

$id = filter_input(INPUT_GET, 'id');

if ($id !== false && $id !== null) {
    $sql = $pdo->prepare("DELETE FROM clientes WHERE id = :id");
    if ($sql) {
       // $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->bindValue(':id', $id);
        $sql->execute();
        header("Location: listar.php");
        if ($sql->execute()) {
            header("Location: listar.php");
            exit;
        } else {
            // Tratamento de erro ao executar a consulta
            echo "Erro ao excluir o cliente.";
        }
    } else {
        // Tratamento de erro na preparação da consulta
        echo "Erro na preparação da consulta.";
    }
} else {
    // ID inválido
    echo "ID inválido.";
}
<?php include "header.php"; ?>
<!-- Page content wrapper-->

<div id="page-content-wrapper">
    <!-- Top navigation-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <button class="btn btn-primary" id="sidebarToggle">Menu</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>-->
    <!-- Page content-->

    <div class="container-fluid">
        <h1>Lista de Clientes</h1>
        <div class="form-inline">
            <form action="listar.php">
                <div class="form-group mb-2">
                    <input type="text" name="nome" class="form-control float-left" placeholder="Insira um nome">
                </div>
                <button type="submit" class="btn btn-primary float-left" id="buscar">Buscar</button>
            </form>

        </div>
        <?php

        //carregando arquivo de conexão com banco de dados 
        require "config.php";
        $postnome = filter_input(INPUT_GET, 'nome');

        //var_dump($postnome);
        $lista = [];

        if ($postnome) {
            // Query com a cláusula WHERE
            $sql = 'SELECT * FROM clientes WHERE billing_nomecompleto = :nome';
            // Preparação da query
            $stmt = $pdo->prepare($sql);
            // Bind do parâmetro
            $stmt->bindParam(':nome', $postnome, PDO::PARAM_STR);
            // Execução da query
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        if ($postnome == "") {
            $sql = $pdo->query("SELECT * FROM clientes");
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        ?>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th></th>
            </tr>
            <?php foreach ($lista as $usuario) : ?>
                <tr>
                    <td>
                        <?= $usuario['id']; ?>
                    </td>
                    <td>
                        <?= $usuario['billing_nomecompleto']; ?>
                    </td>
                    <td>
                        <?= $usuario['billing_email']; ?>
                    </td>
                    <td>
                        <?= $usuario['billing_telefone']; ?>
                    </td>
                    <td><a href="editar.php?id=<?= $usuario['id']; ?>"><button type="button" class="btn btn-primary">Editar</button></a>&nbsp;<a href="excluir.php?id=<?= $usuario['id']; ?>"><button type=" button" class="btn btn-warning">Excluir</button></a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>
</div>
</body>

</html>
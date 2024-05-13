<?php

require "config.php";
$clientes = [];
//recebemos do campo get url 
$id = filter_input(INPUT_GET, 'id');

//caso houver id, realiza o select
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    //se achou um valor no banco
    if ($sql->rowCount() > 0) {
        $clientes = $sql->fetch(PDO::FETCH_ASSOC);
        //caso nao tenha registro volte para index
    } else {
        header("Location: listar.php");
        exit;
    }
    //caso não tenha ID, volta para index
} else {
    header("Location: listar.php");
}

?>

<?php require_once("header.php"); ?>
<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">Menu</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        </div>
    </nav>
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Editando Cliente</h1>


        <form method="POST" action="action_editar.php" class="needs-validation" novalidate>
            <input type="hidden" name="id" value="<?= $clientes["id"]; ?>" />
            <?php include("inc/fields.php"); ?>
            <button class="btn btn-primary" type="submit">Atualizar</button>
        </form>
    </div>
</div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/validacao.js"></script>
</body>

</html>
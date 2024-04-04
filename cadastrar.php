<?php include "header.php"; ?>
<!-- Page content wrapper-->
<script src="js/validacao.js"></script>

<div id="page-content-wrapper">
    <!-- Page content-->
    <div class="container-fluid">
        <h1 class="mt-4">Novo Cliente2</h1>

        <form method="post" action="action_cadastrar.php" class="needs-validation" novalidate>
            <?php include("inc/fields.php"); ?>
            <button class="btn btn-primary" type="submit" value="Salvar">Enviar</button>
        </form>



    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
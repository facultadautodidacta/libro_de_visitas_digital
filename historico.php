<?php
    include "server/Visitas.php";
    include "header.php"; 
?>

<div class="container">
    <?php include "menu.php"; ?>
    <div class="row">
        <h3>Historico de visitantes</h3>
        <p>Presiona F3 para buscar</p>
        <div class="col s12">
            <?php include "listado_visitantes_historico.php"; ?>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
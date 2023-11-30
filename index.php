<?php session_start();
    include "server/Visitas.php";
    include "header.php"; 
?>

<div class="container">
    <?php include "menu.php"; ?>
    <form action="server/agregar.php" method="post">
        <div class="row">
            <h3>Escribe tus datos visitante</h3>
            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="paterno" id="paterno">
                <label for="paterno">Apellido Paterno</label>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="materno" id="materno">
                <label for="materno">Apellido Materno</label>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nombre" id="nombre">
                <label for="nombre">Nombre</label>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">comment</i>
                <input type="text" name="motivo" id="motivo">
                <label for="motivo">Motivo</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <button class="waves-effect waves-light btn">
                    <i class="material-icons left">save</i>
                    Capturar
                </button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col s12">
            <?php include "listado_visitantes_diario.php"; ?>
        </div>
    </div>
</div>

<?php 
    include "footer.php";
    include "mensajes.php"; 
?>
    

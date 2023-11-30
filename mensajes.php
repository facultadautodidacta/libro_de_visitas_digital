<?php 

    if (isset($_SESSION['mensaje'])) {
        $mensaje = $_SESSION['mensaje'];
        unset($_SESSION['mensaje']);
        $alerta = '';
        $titulo = '';

        if ($mensaje != 'exito') {
            $titulo = 'Falta informacion!';
            $alerta = 'info';
        } else if ($mensaje == 'error') {
            $titulo = 'Fallo el servidor!';
            $alerta = 'error';
        } else {
            $mensaje = 'Agregado correctamente!';
            $titulo = 'Exito!';
            $alerta = 'success';
        }
?>

        <script>
            const mensaje = '<?php echo $mensaje; ?>';
            const titulo = '<?php echo $titulo; ?>';
            const alerta = '<?php echo $alerta; ?>';

            butterup.toast({
                title : titulo,
                message : mensaje,
                type : alerta,
                icon : true
            });

        </script>
<?php 
    }

?>
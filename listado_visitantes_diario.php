
<?php 
    $visitas = new Visitas();
    $items = $visitas->mostrarDia();
?>

<table class="striped">
    <caption>Listado de visitantes hoy</caption>
    <thead>
        <tr>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Motivo</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item) :?>
        <tr>
            <td><?php echo $item['paterno'] ?></td>
            <td><?php echo $item['materno'] ?></td>
            <td><?php echo $item['nombre'] ?></td>
            <td><?php echo $item['motivo'] ?></td>
            <td><?php echo $item['fecha'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
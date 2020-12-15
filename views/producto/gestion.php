<h1>Gestion de Productos</h1>


<a href="<?=base_url?>producto/crear" class="button button_small">
    Crear Producto
</a>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete') :?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete') :?>
    <strong class="alert_red">El producto NO se ha creado correctamente</strong>
<?php endif ; ?>

<?php Utils::deleteSession('producto'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete') :?>
    <strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete') :?>
    <strong class="alert_red">El producto NO se ha eliminado correctamente</strong>
<?php endif ; ?>

<?php Utils::deleteSession('delete'); ?>

<table >
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>Acciones</th>

    </tr>
    <?php while($pro = $productos->fetch_object()) :?>
        <tr>
            <td>
                <?=$pro->id?>
            </td>
            <td>
                <?=$pro->nombre?>
            </td>
            <td>
                <?=$pro->precio?>
            </td>
            <td>
                <?=$pro->stock?>
            </td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button_gestion">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button_gestion button_red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile ; ?>

</table>
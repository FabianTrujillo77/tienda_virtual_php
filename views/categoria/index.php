<h1>Gestionar Categorias</h1>

<a href="<?=base_url?>Categoria/crear" class="button button_small">
    Crear Categorìa
</a>

<table >
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
    </tr>
    <?php while($cat = $categorias->fetch_object()) :?>
        <tr>
            <td>
                <?=$cat->id?>
            </td>
            <td>
                <?=$cat->nombre?>
            </td>
        </tr>
    <?php endwhile ; ?>

</table>
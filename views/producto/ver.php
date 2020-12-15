<?php if(isset($product)) : ?>
    <h1><?=$product->nombre?></h1>

    <div id="detail_product">
        <div class="image">
            <?php if($product->imagen != null) : ?>
                <img src="<?=base_url?>uploads/images<?=$product->imagen?>" alt="" >
            <?php else :?>
                <img src="<?=base_url?>assets/img/logo.png" alt="">
            <?php endif ;?>
        </div>

        <div class="data">
            <p class="description"><?=$product->descripcion?></p>
            <p class="price"><?=$product->precio?> $</p>

            <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a> 
        </div>
    </div>

<?php else : ?>   
    <h1>El producto no existe</h1>
<?php endif ; ?>
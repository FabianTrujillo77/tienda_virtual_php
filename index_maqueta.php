<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tienda de camisetas</title>
</head>
<body>

<div id="container">

    <!-- Cabecera -->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camisa.png" alt="camisa logo">
            <a href="index.php">
                Tienda de camisetas
            </a>
        </div>
    </header>

    <!-- menu -->
    <nav id="menu">
        <ul>
            <li>
                <a href="#">
                    Inicio
                </a>
            </li>
            <li>
                <a href="#">
                    Categoria 1
                </a>
            </li>
            <li>
                <a href="#">
                    Categoria 2
                </a>
            </li>
            <li>
                <a href="#">
                    Categoria 3
                </a>
            </li>
            <li>
                <a href="#">
                    Categoria 4
                </a>
            </li>
            <li>
                <a href="#">
                    Categoria 5
                </a>
            </li>
        </ul>
    </nav>


    <div id="content">

        <!-- Barra lateral -->
        <aside id="lateral" >
            <div id="login" class="block_aside">
                <h3>Entrar a la web</h3>
                <form action="#" method ="post">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Enviar">
                </form>
                <ul>
                    <li><a href="#">Mis Pedidos</a></li>
                    <li><a href="#">Gestionar Pedidos</a></li>
                    <li><a href="#">Gestionar Categorias</a></li>
                </ul>

            </div>
        </aside>

            
        <!-- Contenido central -->

        <div id="central">
            <h1>Producto Destacados</h1>
            <div class="product">
                <img src="assets/img/camisa.png" alt="">
                <h2>Camisa negra manga larga</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camisa.png" alt="">
                <h2>Camisa negra manga larga</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camisa.png" alt="">
                <h2>Camisa negra manga larga</h2>
                <p>30 euros</p>
                <a href="" class="button">Comprar</a>
            </div>
        </div> 
    </div>

    <!-- Footer -->
    <footer id="footer">
        <p>Desarrollado por Fabian Trujillo Web &copy; <?=date('Y')?></p>
    </footer>

</div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description:" content="El mejor courier rapido y efectivo, aprendes a importar sin intermediarios.">
    <meta name="author" content="mashacorp-2022">
    <meta name="DC.Languague" schemet="rfc1766" content="spanish">
    <meta property="og:locale" content="es_EC">
    <meta property="og:type" content="website">
    <meta property="og:title" content="GC_BOX">
    <meta property="og:description" content="El mejor courier rapido y efectivo, aprendes a importar sin intermediarios.">
    <meta property="og:url" content="https://gc-box.gruporevilla.world/">
    <meta property="og:site_name" content="Gc-box Courier">
    <link rel="shortcut icon" href="img/logo_gcbox.png">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- api fontawsome -->
    <script src="https://kit.fontawesome.com/36e9f60aba.js" crossorigin="anonymous"></script>
    <!-- integracion de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Gc-box Courier</title>
</head>

<body class="principal">
<!-- navbar de web site -->
    <button class="navbar-burger" onclick="toggleMenu()"></button>
    <nav class="navbar1">
        <a 
            href="" 
            class="navbar-logo1">
            <i class="fa-solid fa-house"></i>
        </a>
        <a 
            href="/index.php" 
            class="navbar-logo1">
            <i class="fa-solid fa-people-group"></i> 
            Empresas
        </a>
        <a 
            href="src/contactos.php" 
            class="navbar-logo1">
            <i class="fa-sharp fa-solid fa-address-book"></i>
        </a>
    </nav>
    <nav class="menu">
        <a href="#" style="animation-delay: 0.1s">Servicios</a>
        <a href="#" style="animation-delay: 0.2s">Iniciar</a>
        <a href="#" style="animation-delay: 0.3s">Services</a>
        <a href="#" style="animation-delay: 0.4s">Products</a>
        <a href="#" style="animation-delay: 0.5s">Contact</a>
    </nav>
<!-- inicio del cuerpo de la pagina -->
<section class="body1">
    <!-- tarjeta de informacion -->
    <div class="card1">
        <img src="img/img_gcbox2.png"  />
        <div>
            <h2 class="titulo1">Hey!!! bienvenido</h2>
            <br>
            <h3>Con la garantia de Grupo Revilla</h3>
            <br>
            <p>
                La forma mas fácil de importar, directamente de las mejores tiendas del Mundo. 
            </p>
            <br>
            <button>
                Conoce nuestras ofertas!!!
            </button>
        </div>
    </div>
    <div class="card2">
        <a 
            href="../src/login.php" 
            class="btn btn-primary btn-lg m-4" 
            tabindex="-1" role="button" 
            aria-disabled="true">
                Ingresar a mi casilla
        </a>
        <a 
            href="src/servicios.php" 
            class="btn btn-primary btn-lg m-4" 
            tabindex="-1" 
            role="button" 
            aria-disabled="true">
                Servicios 
        </a>
        <a 
            href="src/cotizador.php" 
            class="btn btn-primary btn-lg m-4" 
            tabindex="-1" 
            role="button" 
            aria-disabled="true">
                Cortizador
        </a>
    </div>
</section>
<!-- inicio del footer -->
    <footer class="footer">

    </footer>
<!-- script de animacion del boton del menu. -->
    <script type="text/javascript">
        const toggleMenu = () => {
            document.body.classList.toggle("open");
        };
    </script>
</body>
</html>

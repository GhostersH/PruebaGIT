<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de autos</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo  $inicio  ? 'inicio' : ''; ?>">

        <div class="contenedor contenido-header">

            <div class="barra">
                <a href="/">

                    <img src="/build/img/logoPrueba2.png" alt="logo de vehiculos" width="100" height="100">

                </a>
                <div class="mobile-menu">


                    <img src="/build/img/barras.svg" alt="icono menu resposive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="foro.php">Foro</a>
                        <a href="anuncio.php">Anuncios</a>
                        <a href="contacto.php">Contactenos</a>
                    </nav>
                </div>


            </div>

            <?php if ($inicio) : ?>
                <h1>Venta de autos de LUJO! (Freelancer) </h1>
            <?php endif; ?>
        </div>

    </header>
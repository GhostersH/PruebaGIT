<?php

require 'includes/funciones.php';

incluirTemplate('header');



?>

<main class="contenedor seccion ">
    <h1> Foro </h1>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog1.webp" type="image/webp">
                <source srcset="build/img/blog1.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog" height="250" width="200">
            </picture>
        </div>

        <div class="texto-entrada">

            <a href="entrada.php">
                <h4>

                    Mejora el motor de tu auto!
                </h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>

                <p>consejos para hacer tu motor mas rapido con bajo presupuesto</p>
            </a>
        </div>

    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog2.webp" type="image/webp">
                <source srcset="build/img/blog2.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog" height="250" width="200">
            </picture>
        </div>

        <div class="texto-entrada">

            <a href="entrada.php">
                <h4>

                    Lava tu auto rapido
                </h4>
                <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>

                <p class="informacion-meta">consejos para limpiar tu auto nuevo!</p>
            </a>
        </div>

    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="Texto entrada blog" height="250" width="200">
            </picture>
        </div>

        <div class="texto-entrada">

            <a href="entrada.php">
                <h4>

                    La mejor gasolinera del pais para autos de lujo!
                </h4>
                <p class="informacion-meta">Escrito el: <span>10/02/2019</span> por <span>Admin 4</span></p>

                <p>Rutas para la mejor gasolinera del pais</p>
            </a>
        </div>

    </article>

    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="Texto entrada blog" height="250" width="200">
            </picture>
        </div>

        <div class="texto-entrada">

            <a href="entrada.php">
                <h4>

                    Como poner aceite a tu auto nuevo
                </h4>
                <p class="informacion-meta">Escrito el: <span>03/11/2020</span> por <span>Admin</span></p>

                <p>consejos para poner aceite a tu auto</p>
            </a>
        </div>

    </article>
</main>

<?php 
    incluirTemplate('footer');
    
    ?>
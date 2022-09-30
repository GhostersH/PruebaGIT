<?php 

require 'includes/funciones.php';

incluirTemplate ('header');



?>

    <main class="contenedor seccion">
        <h1> Conoce sobre nosotros </h1>
        <div class="contenido-nosotros">

            <div class="imagen">

                <picture>

                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">

                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    30 anios de experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ea, aliquam delectus maxime in alias
                    ad soluta tempore harum officiis, dolores obcaecati veniam illo beatae fuga quisquam a et
                    laboriosam.orem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ea, aliquam delectus
                    maxime in alias
                    ad soluta tempore harum officiis, dolores obcaecati veniam illo beatae fuga quisquam a et
                    laboriosam.orem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ea, aliquam delectus
                    maxime in alias
                    ad soluta tempore harum officiis, dolores obcaecati veniam illo beatae fuga quisquam a et
                    laboriosam.</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ea, aliquam delectus maxime in alias
                    ad soluta tempore harum officiis, dolores obcaecati veniam illo beatae fuga quisquam a et
                    laboriosam.orem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat ea, aliquam delectus
                    maxime in alias
                    ad soluta tempore harum officiis, dolores obcaecati veniam illo beatae fuga quisquam a et
                    laboriosam.orem ipsum dolor sit amet consectetur, adipisicing elit. </p>

            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1> Mas sobre nosotros</h1>
        <div class="iconos-nosotros">

            <div class="icono">

                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reiciendis aspernatur fugiat nam beatae
                    doloremque quasi, totam veniam possimus distinctio! Molestiae soluta quis aliquid repellendus iure
                    tenetur reiciendis illo quo.</p>
            </div>
            <div class="icono">

                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reiciendis aspernatur fugiat nam beatae
                    doloremque quasi, totam veniam possimus distinctio! Molestiae soluta quis aliquid repellendus iure
                    tenetur reiciendis illo quo.</p>
            </div>
            <div class="icono">

                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reiciendis aspernatur fugiat nam beatae
                    doloremque quasi, totam veniam possimus distinctio! Molestiae soluta quis aliquid repellendus iure
                    tenetur reiciendis illo quo.</p>
            </div>
        </div>
    </section>


    <?php 
    incluirTemplate('footer');
    
    ?>

 
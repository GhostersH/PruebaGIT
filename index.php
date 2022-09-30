<?php

require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);



?>

<main class="contenedor seccion">
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
</main>

<section class="seccion contenedor">

    <h2> Autos y motos a tu gusto!</h2>
    <div class="contenedor-anuncios">

        <div class="anuncio">

            <picture>
                <source srcset="build/img/anuncio.webp" type="image/webp">
                <source srcset="build/img/anuncio.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncio.jpg" alt="anuncio" height="250" width="200">
            </picture>
            <div class="contenido-anuncio">
                <h3>Auto de lujo rojo</h3>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p class="precio">$30.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/iconokilometros.png" alt="icono speed">
                        <p>0</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/carDoorIcono.png" alt="icono puertas">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/gasIcono.png" alt="icono speed">
                        <p>10</p>
                    </li>

                </ul>

                <a href="anuncios.php" class="boton-negro-block">

                    Ver vehiculo
                </a>

            </div>

        </div>

        <div class="anuncio">

            <picture>
                <source srcset="build/img/anuncioCarroClasico.webp" type="image/webp">
                <source srcset="build/img/anuncioCarroClasico.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncioCarroClasico.jpg" alt="anuncio" height="250" width="200">
            </picture>
            <div class="contenido-anuncio">
                <h3>Auto de lujo clasico</h3>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p class="precio">$30.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/iconokilometros.png" alt="icono speed">
                        <p>0</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/carDoorIcono.png" alt="icono puertas">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/gasIcono.png" alt="icono speed">
                        <p>10</p>
                    </li>

                </ul>

                <a href="anuncios.php" class="boton-negro-block">

                    Ver vehiculo
                </a>

            </div>

        </div>


        <div class="anuncio">

            <picture>
                <source srcset="build/img/anuncioCarroAzul.webp" type="image/webp">
                <source srcset="build/img/anuncioCarroAzul.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/anuncioCarroAzul.jpg" alt="anuncio" height="250" width="200">
            </picture>
            <div class="contenido-anuncio">
                <h3>Auto de azul corvete</h3>
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <p class="precio">$30.000</p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="build/img/iconokilometros.png" alt="icono speed">
                        <p>0</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/carDoorIcono.png" alt="icono puertas">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="build/img/gasIcono.png" alt="icono speed">
                        <p>10</p>
                    </li>

                </ul>

                <a href="anuncios.php" class="boton-negro-block">

                    Ver vehiculo
                </a>

            </div>

        </div>

    </div>

    <div class="alinear-derecha">
        <a href="anuncio.php" class="boton-verde">Ver todas</a>

    </div>

</section>

<section class="imagen-contacto">
    <h2>Encuentra el auto de tus suenios</h2>
    <p>Llena con tus datos el formulario y un asesor se contactara contigo en menos de 48 horas!</p>
    <a href="contacto.php" class="boton-negro">

        Contactanos
    </a>

</section>


<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro blog!</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">

                <a href="foro.php">
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
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">

                <a href="foro.php">
                    <h4>

                        Lava tu auto rapido
                    </h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>

                    <p>consejos para limpiar tu auto nuevo!</p>
                </a>
            </div>

        </article>
    </section>

    <section class="testimoniales">

        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laudantium error fugiat
                asperiores distinctio harum, ex nemo maxime ipsa, veniam perferendis doloribus, magni similique
                placeat? Saepe ea adipisci sapiente quisquam.

            </blockquote>
            <p>-Random</p>
        </div>
    </section>
</div>


<?php 
    incluirTemplate('footer');
    
    ?>
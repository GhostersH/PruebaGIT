<?php 

require 'includes/funciones.php';

incluirTemplate ('header');



?>

    <main class="contenedor seccion contenido-centrado">
        <h1> Auto de lujo rojo </h1>
        <picture>
            <source srcset="build/img/anuncio.webp" type="image/webp">
            <source srcset="build/img/anuncio.jpg" type="image/jpeg">
            <img loadig="lazy " src="build/img/anuncio.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">

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

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor laborum aperiam architecto expedita
                magnam, dignissimos provident vero. Ducimus nobis soluta odio a, quia nulla perspiciatis. Et, aperiam?
                Placeat, repudiandae nesciunt.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi impedit voluptas quaerat suscipit
                reiciendis commodi rem, numquam iusto, possimus, non architecto nihil magni in ullam sed soluta maxime
                saepe aspernatur.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi impedit voluptas quaerat suscipit
                reiciendis commodi rem, numquam iusto, possimus, non architecto nihil magni in ullam sed soluta maxime
                saepe aspernatur.</p>
        </div>
    </main>

    <?php 
    incluirTemplate('footer');
    
    ?>

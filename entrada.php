<?php

require 'includes/funciones.php';

incluirTemplate('header');



?>

<main class="contenedor seccion contenido-centrado">
    <h1> Prueba de entrada del foro </h1>

    <picture>
        <source srcset="build/img/blog1.webp" type="image/webp">
        <source srcset="build/img/blog1.jpg" type="image/jpeg">
        <img loadig="lazy " src="build/img/blog1.jpg" alt="imagen de la propiedad">
    </picture>
    <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por <span>Admin</span></p>

    <div class="resumen-propiedad">



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
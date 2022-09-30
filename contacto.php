<?php

require 'includes/funciones.php';

incluirTemplate('header');



?>
<main class="contenedor seccion">
    <h1> Contactanos </h1>
    <picture>
        <source srcset="build/img/encuentra.webp" type="image/webp">
        <source srcset="build/img/encuentra.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/encuentra.png" alt="imagen contacto">

    </picture>

    <h2>Llene el formulario de contacto</h2>

    <form class="formulario">
        <fieldset>

            <legend>Informacion personal</legend>
            <label for="nombre">Nombre</label>
            <input type="text" placeholder="Tu nombre" id="nombre">
            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu nombre" id="email">
            <label for="telf">Telefono</label>
            <input type="tel" placeholder="Tu nombre" id="telf">
            <label for="mensaje">Mensaje</label>
            <textarea name="" id="mensaje" cols="30"></textarea>



        </fieldset>

        <fieldset>

            <legend>Informacion sobre la propiedad</legend>
            <label for="opciones">Vende o compra: </label>
            <select id="opciones">
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>

            </select>
            <label for="presupuesto">Precio O Presupuesto</label>
            <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto">

        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <p>Como desea ser contactado </p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-email">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-email">

            </div>

            <p>Si eligio telefono, por favor ingrese fecha y hora para contartarlo/a</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">
            <label for="fecha">Hora:</label>
            <input type="Time" id="hora" min="09:00" max="18:00">
        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">


    </form>
</main>

<?php
incluirTemplate('footer');

?>
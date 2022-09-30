<?php

require '../../includes/config/database.php';

$db = conectarDB();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $kilometros = $_POST['kilometros'];
    $puertas = $_POST['puertas'];
    $gasolina = $_POST['gasolina'];
    $vendedores_id = $_POST['vendedor'];

    // INSERTAR EN LA DATABASE

    $query = " INSERT INTO vehiculos (titulo,precio, descripcion,kilometros,puertas,gasolina,vendedores_id ) 
    VALUES ('$titulo','$precio','$descripcion','$kilometros','$puertas','$gasolina','$vendedores_id')";

    //echo $query;

    $resultado = mysqli_query($db,$query);

    if($resultado){
echo "Insertado Correctamente ";


    }



}


require '../../includes/funciones.php';
incluirTemplate('header');

?>

<main class="contenedor seccion">

    <h1>Crear</h1>

    <a href="/admin" class="boton boton-negro">
        Volver
    </a>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>

            <legend>Informacion General</legend>

            <label for="titulo"> Titulo: </label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo vehiculo">

            <label for="precio"> Precio: </label>
            <input type="number" id="precio" name="precio" placeholder="Precio del vehiculo">

            <label for="imagen"> Imagen: </label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion"> Descripcion: </label>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion propiedad</legend>

            <label for="kilometros"> kilometros: </label>
            <input type="number" id="kilometros" name="kilometros" placeholder="EJ: 1000" min="1" max="50000">

            <label for="puertas"> Puertas: </label>
            <input type="number" id="puertas" name="puertas" placeholder="EJ:2" min="1" max="5 ">

            <label for="gasolina"> Gasolina: </label>
            <input type="number" id="gasolina" name="gasolina" placeholder="EJ:1000" min="1" max="1000 ">


        </fieldset>


        <fieldset>

            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value="1">Steeven</option>
                <option value="2">Karol</option>
            </select>


        </fieldset>

        <input type="submit" value="Crear vehiculo" class="boton boton-negro">



    </form>

</main>

<?php

incluirTemplate('footer');

?>
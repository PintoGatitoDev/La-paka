<?php
if (!isset($_GET["id"])) {
    header("Location: index.php");
}
$id = $_GET["id"];
?>
<?php include("header.php"); ?>
<section class="seccion">
    <?php
    $productos = json_decode(file_get_contents("prendas.json"), true);
    $producto = $productos[$id];
    //var_dump($producto);
    ?>
    <div class="imagen_producto">
        <img src="<?php echo $producto['url_img']; ?>" alt="">
    </div>

    <div class="datos_producto">
        <h2>Datos del producto</h2>
        <table id="datosProducto">
            <tbody>
                <tr>
                    <td>Nombre: </td>
                    <td><?php echo $producto["nombre"];?></td>
                </tr>
                <tr>
                    <td>Precio: </td>
                    <td><?php echo $producto["precio"];?></td>
                </tr>
                <tr>
                    <td>Marca: </td>
                    <td><?php echo $producto["marca"];?></td>
                </tr>
                <tr>
                    <td>Temporada: </td>
                    <td><?php echo $producto["temporada"];?></td>
                </tr>
                <tr>
                    <td>Descripcion: </td>
                    <td><?php echo $producto["descripcion"];?></td>
                </tr>
                <tr>
                    <td>Talla: </td>
                    <td><?php echo $producto["talla"];?></td>
                </tr>
                <tr>
                    <td>Valoracion: </td>
                    <td><?php echo $producto["valoracion"];?></td>
                </tr>
                <tr>
                    <td>Composicion: </td>
                    <td><?php echo $producto["composicion"];?></td>
                </tr>
                <tr>
                    <td>Existencias: </td>
                    <td><?php echo $producto["existencias"];?></td>
                </tr>
            </tbody>
        </table>

        <a href="#" class="boton_gris">Comprar</a>
    </div>
</section>
<?php include("footer.php"); ?>
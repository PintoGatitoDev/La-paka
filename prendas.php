<?php include "/header.php"; ?>
<section class="seccion">
    <section class="contenido">
        <?php

        // Carga el archivo JSON
        $productos = json_decode(file_get_contents("prendas.json"), true);
        $i = 0;
        foreach ($productos as $producto) { ?>
            <div class="carta">
                <a href="prenda.php?id=<?php echo $i; ?>">
                    <img src="<?php echo $producto["url_img"]; ?>" alt="">
                    <p>
                        <?php echo $producto['nombre']; ?>
                    </p>
                </a>
            </div>
            <?php $i++;
        } ?>
    </section>
</section>

<?php include "/footer.php"; ?>
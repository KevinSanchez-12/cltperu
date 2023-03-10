<!DOCTYPE html>
<html lang="es">
<?php include 'components/head.php'?>

<body>
    <?php include 'components/menu.php'?>
    <section class="mensaje container">
        <div class="center">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </div>
        <h1 class="titulo">El usuario ya existe</h1>
        <div class="btn">
            <a href="<?php echo $link?>" class="btn-enviar">Regresar</a>
        </div>
    </section>
    <?php include 'components/footer.php'?>
    <?php include 'components/script.php'?>
</body>

</html>
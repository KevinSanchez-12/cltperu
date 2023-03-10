<!DOCTYPE html>
<html lang="es">
<?php 
    include 'database/bd.php';
    $id = $_GET['id'];
    $noticia = "SELECT * FROM noticias WHERE id = $id";
?>
<?php include 'components/head.php'?>
<?php include 'database/bd.php'?>

<body>
    <?php include 'components/menu.php'?>
    <section id="body" class="detalles container">
        <?php $resultado= mysqli_query($conexion, $noticia);
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <img class="banner" src="assets/img/noticias/<?php echo $row["banner"];?>" alt="<?php echo $row["titulo"];?>">
        <h1 class="titulo"><?php echo $row["titulo"];?></h1>
        <p class="fecha">
            <i class="fa fa-calendar-o" aria-hidden="true"></i>
            <?php echo $row["fechaPublicacion"];?>
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <?php echo $row["horaPublicacion"];?>
            &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <?php echo $row["autor"];?>
        </p>
        <p class="contenido"><?php echo $row["contenido"];?></p>
        <p class="palabrasClave"><b>Palabras clave:</b><span><?php echo $row["palabrasClave"];?></span></p>
        <?php }?>
    </section>
    <h3>¿Te gustó este contenido?</h3>
    <div class="accion center">
        <i class="fa fa-print" onclick="javascript:imprim1(body)" aria-hidden="true"></i>
        <i class="fa fa-share" id='getlink' href='javascript:void();' aria-hidden="true"></i>
    </div>
    <?php include 'components/footer.php'?>
    <?php include 'components/script.php'?>
</body>

</html>
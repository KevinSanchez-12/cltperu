<?php
    $noticia = "SELECT * FROM noticias";
    $publicacion = "SELECT * FROM publicaciones";
?>
<h1 id="noticias" class="titulo">Noticias</h1>
<section class="noticias container">
    <?php $resultado= mysqli_query($conexion, $noticia);
    while($row=mysqli_fetch_assoc($resultado)){ ?>
    <div class="item">
        <img src="assets/img/noticias/<?php echo $row["banner"];?>" alt="<?php echo $row["titulo"];?>">
        <div class="box">
            <div class="titulo">
                <h2><?php echo $row["titulo"];?></h2>
            </div>
            <div class="resumen">
                <p><?php echo $row["contenido"];?></p>
            </div>
            <a href="noticia?id=<?php echo $row["id"]?>">Seguir leyendo <i class="fa fa-angle-right"></i> </a>
        </div>
    </div>
    <?php }?>
</section>
<h1 id="informes" class="titulo">Publicación de informes</h1>
<section class="noticias container">
    <?php $resultado= mysqli_query($conexion, $publicacion);
    while($row=mysqli_fetch_assoc($resultado)){ ?>
    <div class="item">
        <img src="assets/img/publicaciones/<?php echo $row["banner"];?>" alt="<?php echo $row["titulo"];?>">
        <div class="box">
            <div class="titulo">
                <h2><?php echo $row["titulo"];?></h2>
            </div>
            <div class="resumen">
                <p><?php echo $row["contenido"];?></p>
            </div>
            <a href="publicacion?id=<?php echo $row["id"]?>">Seguir leyendo <i class="fa fa-angle-right"></i> </a>
        </div>
    </div>
    <?php }?>
</section>
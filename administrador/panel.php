<?php
include 'database/bd.php';
session_start();
if (!isset($_SESSION['id']) && !isset($_SESSION['dni']) && !isset(($_SESSION['contrasena']))) {
    header('Location: administrador/panel');
}
$iduser=$_SESSION['id'];
    $sql= "SELECT * FROM administrador WHERE id='$iduser'";
    $resultado=$conexion->query($sql);
    $row = $resultado->fetch_assoc();
    

 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLT Perú</title>
    <link rel="icon" href="../assets/img/logo/logoico.png">
    <script src="https://kit.fontawesome.com/70656af24f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
    <link href="../assets/css/alertify.min.css?1.6" rel="stylesheet" />
    <script src="../assets/js/alertify.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/administrador.css?1.4">
</head>

<body>
    <?php include '../components/menuAdmin.php' ?>
    <section class="colegiados">
   
    <!-- <?php $resultado= mysqli_query($conexion, $colegiado);
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <h1><?php echo $row["nombres"];?></h1>
             <?php }?> -->
    </section>
</body>

</html>
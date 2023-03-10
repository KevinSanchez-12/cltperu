<?php
    include 'database/bd.php';
    $mensaje = "";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['dni']) && isset(($_SESSION['contrasena']))){
        header ('Location: administrador/panel');
    }
    if(isset($_POST['dni']) && isset($_POST['contrasena'])){
        session_start();
        $dni = $_POST['dni'];
        $contrasena = $_POST['contrasena'];
        $query = "SELECT * FROM administrador WHERE dni = '$dni' AND contrasena = '$contrasena'";
        $result = mysqli_query($conexion, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['dni'] = $row['dni'];
            $_SESSION['contrasena'] = $row['contrasena'];
            header ('Location: administrador/panel');
        }else{
            $mensaje = "DNI o contraseña incorrecta";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">

<?php include 'components/head.php' ?>

<body>
    <section class="loginAdmin">
        <div class="box">
            <b>Iniciar Sesión</b>
            <p>Ingrese su <span>DNI y contraseña</span></p>
            <form action="intranet" method="POST" class="center">
                <input name="dni" class="input-text" type="text" placeholder="DNI" require maxlength="8" minlength="8">
                <input name="contrasena" class="input-text" type="password" placeholder="Contraseña" require>
                <p><?php echo $mensaje?></p>
                <button type="submit" class="btn-enviar">Ingresar</button>
            </form>
        </div>
    </section>
</body>

</html>
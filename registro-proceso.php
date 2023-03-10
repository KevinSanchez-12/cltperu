<?php 
    include 'database/bd.php';
    foreach ($_FILES["documentos"]["error"] as $clave => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nombre_tmp = $_FILES["documentos"]["tmp_name"][$clave];
            $nombre = basename($_FILES["documentos"]["name"][$clave]);
            move_uploaded_file($nombre_tmp, "assets/documentos/"."$nombre");
        }
    }
    $ruta = $_FILES["documentos"]["name"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $colegiatura = $_POST["colegiatura"];
    $celular = $_POST["celular"];
    $titulo = $_POST["titulo"];
    $region = $_POST["region"];
    $correo = $_POST["correo"];
    $dni = $_POST["dni"];
    $fechaIncorporacion = date("d-m-Y");
    $fechaExpiracion = date("d-m-Y", strtotime("+1 year"));
    $estado = "Habilitado";
    $espacio1 = "";
    $espacio2 = "";

    $conexion = new mysqli($servidor,$usuario,$contrasena,$baseDeDatos); 

    $sql = "SELECT * FROM colegiados WHERE dni = '$dni'";
    if($resultado = mysqli_query($conexion, $sql)){
        $verificador = mysqli_num_rows($resultado);
    }

    if($verificador > 0){
        echo "<script>
            window.location.href='error';
            </script>";
    }else{
        $datos_documento = "INSERT INTO  colegiados (nombres, apellidos, colegiatura, celular, titulo, region, correo, dni, solicitud, ficha, declaracion, cv, copiaDni, foto, fechaIncorporacion, fechaExpiracion, estado, espacio1, espacio2) 
        VALUES ('$nombres', '$apellidos', '$colegiatura', '$celular', '$titulo', '$region', '$correo', '$dni', '$ruta[0]', '$ruta[1]', '$ruta[2]', '$ruta[3]', '$ruta[4]', '$ruta[5]', '$fechaIncorporacion', '$fechaExpiracion', '$estado', '$espacio1', '$espacio2')";
        $resultado_documento = mysqli_query($conexion, $datos_documento);
        if ($resultado_documento) {
            echo "<script>
                window.location.href='pasarela/minimalEmbeddedForm';
                </script>";
        }
    }     
?>
<!DOCTYPE html>
<html lang="es">

<?php include 'components/head.php' ?>
<?php include 'database/bd.php' ?>

<body>
    <section class="colegiados">
        <div class="box">
            <b>Plataforma para búsqueda de colegiados</b>
            <p>Busca por <span>DNI</span></p>
            <form method="POST" class="center">
                <input class="input-text" name="PalabraClave" id="inlineFormInput" type="text" placeholder="Escribe aquí" required minlength="8" maxlength="8">
                <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
                <button type="submit" class="btn-enviar">buscar</button>
            </form>
            <?php
                if (!empty($_POST)) {
                    $aKeyword = explode(" ", $_POST['PalabraClave']);
                    $query = "SELECT * FROM colegiados WHERE dni  like '" . $aKeyword[0] . "'";
                    for ($i = 1; $i < count($aKeyword); $i++) {
                        if (!empty($aKeyword[$i])) {
                            $query .= " OR id like '%" . $aKeyword[$i] . "%'";
                        }
                    }
                    $result = $conexion->query($query);
                    echo "<h1 class='word-sucess'>Resultados:</h1>";
                    if (mysqli_num_rows($result) > 0) {
                        $row_count = 0;
                        while ($row = $result->fetch_assoc()) {
                            $row_count++;
                            echo "<div class='box-resultado'>";
                                echo "<table border='1'>";
                                    echo "<tbody>";
                                        echo "<tr>";
                                            echo "<td class='head'>N° Colegiatura</td>";
                                            echo "<td class='head'>Foto</td>";
                                            echo "<td class='head'>DNI</td>";
                                            echo "<td class='head'>Nombres</td>";
                                            echo "<td class='head'>Apellidos</td>";
                                            echo "<td class='head'>Celular</td>";
                                            echo "<td class='head'>Correo</td>";
                                            echo "<td class='head'>Título</td>";
                                            echo "<td class='head'>Región</td>";
                                            echo "<td class='head'>Fecha de Incorporación</td>";
                                            echo "<td class='head'>Fecha de Expiración</td>";
                                            echo "<td class='head'>Estado</td>";
                                            echo "<td class='head'>Carnet Digital</td>";
                                            echo "<td class='head'>Certificado de Colegiatura</td>";
                                            echo "<td class='head'>Certificado de Habilitación</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                            echo "<td>" . $row['colegiatura'] . "</td>";
                                            echo "<td><img src='assets/documentos/" . $row['foto'] . "'></td>";
                                            echo "<td>" . $row['dni'] . "</td>";
                                            echo "<td>" . $row['nombres'] . "</td>";
                                            echo "<td>" . $row['apellidos'] . "</td>";
                                            echo "<td>" . $row['celular'] . "</td>";
                                            echo "<td>" . $row['correo'] . "</td>";
                                            echo "<td>" . $row['titulo'] . "</td>";
                                            echo "<td>" . $row['region'] . "</td>";
                                            echo "<td>" . $row['fechaIncorporacion'] . "</td>";
                                            echo "<td>" . $row['fechaExpiracion'] . "</td>";
                                            echo "<td>" . $row['estado'] . "</td>";
                                            echo "<td><a href='carnetDigital?dni=".$row['dni']."' target='_blank'><i class='fa fa-eye'></i></a></td>";
                                            echo "<td><a href='certificadoColegiatura?dni=".$row['dni']."' target='_blank'><i class='fa fa-eye'></i></a></td>";
                                            echo "<td><a href='certificadoHabilitacion?dni=".$row['dni']."' target='_blank'><i class='fa fa-eye'></i></a></td>";
                                        echo "</tr>";
                                    echo "</tbody>";
                                echo "</table>";
                            echo "</div>";
                        }
                    } else {
                        echo "<h1 class='word-fail'>No se encontraron resultados</h1>";
                    }
                }
                ?>
        </div>
    </section>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
</html>
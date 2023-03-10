    <h1 id="requisitos" class="titulo">Requisitos para colegiatura</h1>
    <form action="registro-proceso" method="post" enctype="multipart/form-data" class="requisitos container">
        <section class="center">
            <div>
                <label for="nombre">Nombres<span>*</span></label>
                <input class="input-text" type="text" name="nombres" id="nombres" placeholder="Escriba aquí" required>
            </div>
            <div>
                <label for="apellidos">Apellidos<span>*</span></label>
                <input class="input-text" type="text" name="apellidos" id="apellidos" placeholder="Escriba aquí"
                    required>
        </section>
        <section class="center">
            <div>
                <label for="colegiatura">N° Colegiatura<span>*</span></label>
                <input class="input-text" type="text" name="colegiatura" id="colegiatura" placeholder="Escriba aquí"
                    required>
            </div>
            <div>
                <label for="celular">N° Celular<span>*</span></label>
                <input class="input-text" type="text" name="celular" id="celular" placeholder="Escriba aquí" required>
            </div>
        </section>
        <section class="center">
            <div>
                <label for="titulo">Titulo profesional<span>*</span></label>
                <input class="input-text" type="text" name="titulo" id="titulo" placeholder="Escriba aquí" required>
            </div>
            <div>
                <label for="region">Región procedencia<span>*</span></label>
                <input class="input-text" type="text" name="region" id="region" placeholder="Escriba aquí" required>
            </div>
        </section>
        <section class="center">
            <div>
                <label for="correo">Correo<span>*</span></label>
                <input class="input-text" type="email" name="correo" id="correo" placeholder="Escriba aquí" required>
            </div>
            <div>
                <label for="dni">DNI<span>*</span></label>
                <input class="input-text" type="text" name="dni" id="dni" placeholder="Escriba aquí" maxlength="8"
                    minlength="8" required>
            </div>
        </section>
        <section class="center">
            <div>
                <label>Solicitud CLT<span>*</span></label>
                <input name="documentos[]" class="input-file" id="solicitud" type="file" onchange="return validarA()"
                    required>
                <button type="button" onclick="document.getElementById('solicitud').click()" class="boton-file">
                    <p id="btnsolicitud">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
            <div>
                <label>Ficha de inscripción<span>*</span></label>
                <input name="documentos[]" class="input-file" id="ficha" type="file" onchange="return validarB()"
                    required>
                <button type="button" onclick="document.getElementById('ficha').click()" class="boton-file">
                    <p id="btnficha">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
        </section>
        <section class="center">
            <div>
                <label>Declaración jurada<span>*</span></label>
                <input name="documentos[]" class="input-file" id="declaracion" type="file" onchange="return validarC()"
                    required>
                <button type="button" onclick="document.getElementById('declaracion').click()" class="boton-file">
                    <p id="btndeclaracion">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
            <div>
                <label>CV<span>*</span></label>
                <input name="documentos[]" class="input-file" id="cv" type="file" onchange="return validarD()" required>
                <button type="button" onclick="document.getElementById('cv').click()" class="boton-file">
                    <p id="btncv">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
        </section>
        <section class="center">
            <div>
                <label>Copia DNI<span>*</span></label>
                <input name="documentos[]" class="input-file" id="copia" type="file" onchange="return validarE()"
                    required>
                <button type="button" onclick="document.getElementById('copia').click()" class="boton-file">
                    <p id="btncopia">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
            <div>
                <label>Foto<span>*</span></label>
                <input name="documentos[]" class="input-file" id="foto" type="file" onchange="return validarF()"
                    required>
                <button type="button" onclick="document.getElementById('foto').click()" class="boton-file">
                    <p id="btnfoto">Subir archivo</p><i class="fa fa-upload"></i>
                </button>
            </div>
        </section>
        <button class="btn-enviar" type="submit">siguiente paso</button>
        <h1 id="mensaje"></h1>
    </form>
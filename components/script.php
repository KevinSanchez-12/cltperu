<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    autoplay: {
        delay: 5000
    },
    mousewheel: true,
    keyboard: true,
});
</script>
<script>
var swiper = new Swiper(".myConvenios", {
    slidesPerView: 5,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    loop: true,
    autoplay: {
        delay: 5000
    },
});
</script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/modal.js"></script>
<script type="text/javascript">
function validarA() {
    var archivo = document.getElementById('solicitud');
    var boton = document.getElementById('btnsolicitud');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.pdf)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .pdf');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function validarB() {
    var archivo = document.getElementById('ficha');
    var boton = document.getElementById('btnficha');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.pdf)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .pdf');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function validarC() {
    var archivo = document.getElementById('declaracion');
    var boton = document.getElementById('btndeclaracion');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.pdf)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .pdf');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function validarD() {
    var archivo = document.getElementById('cv');
    var boton = document.getElementById('btncv');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.pdf)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .pdf');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function validarE() {
    var archivo = document.getElementById('copia');
    var boton = document.getElementById('btncopia');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.pdf)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .pdf');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function validarF() {
    var archivo = document.getElementById('foto');
    var boton = document.getElementById('btnfoto');
    var archivoRuta = archivo.value;
    var extPermitidas = /(.png)$/i;
    if (!extPermitidas.exec(archivoRuta)) {
        alertify.error('Solo se admiten archivos con extension .png');
        archivo.value = '';
        boton.innerHTML = '<p>Subir archivo</p>';
        return false;
    } else {
        if (archivo.files && archivo.files[0]) {
            var visor = new FileReader();
            visor.onload = function(e) {
                alertify.success('Archivo subido correctamente');
                boton.innerHTML = '<p>Completado</p>';
            };
            visor.readAsDataURL(archivo.files[0]);
        }
    }
}

function imprim1(body) {
    var printContents = document.getElementById('body').innerHTML;
    w = window.open();
    w.document.write(printContents);
    w.document.close();
    w.focus();
    w.print();
    w.close();
    return true;
}

var boton = document.getElementById('getlink');
boton.addEventListener('click', function(e) {
    if (boton.id == 'getlink') {
        var aux = document.createElement('input');
        aux.setAttribute('value', window.location.href);
        document.body.appendChild(aux);
        aux.select();
        try {
            document.execCommand('copy');
            var aviso = document.createElement('div');
            aviso.setAttribute('id', 'aviso');
            aviso.style.cssText =
                'position:fixed; z-index: 9999999;color:#fff; bottom: 10px;right: 10px;padding: 10px 20px; background: #5D9500;border-radius: 5px;transition: .3s;';
            aviso.innerHTML = 'Copiado al portapapeles';
            document.body.appendChild(aviso);
            document.load = setTimeout('document.body.removeChild(aviso)', 2000);
            document.load = setTimeout('boton.id = "getlink"', 2500);
            boton.id = '';
        } catch (e) {
            alert('Your browser does not support the copy function');
        }
        document.body.removeChild(aux);
    }
});
</script>
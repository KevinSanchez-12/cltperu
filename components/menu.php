<section class="box-menu">
    <nav class="menu center">
        <div class="box container center">
            <ul class="item-a">
                <li><a href="<?php echo $link?>"><img src="assets/img/logo/logo.png"></a></li>
            </ul>
            <ul id="menu" class="item-b center">
                <section class="btn-menu-close">
                    <i onclick="cerrarMenu();" class="fa fa-close"></i>
                </section>
                <div class="center">
                    <li><a href="<?php echo $link?>#nosotros"><span>nosotros</span></a></li>
                    <li><a href="<?php echo $link?>#noticias"><span>noticias</span></a></li>
                    <li><a href="<?php echo $link?>#informes"><span>informes</span></a></li>
                    <li><a href="<?php echo $link?>#directiva"><span>directiva</span></a></li>
                    <li><a href="<?php echo $link?>#footer"><span>contacto</span></a></li>
                    <li class="latest"><a target="_blank" href="colegiados">colegiados</a></li>
                </div>
            </ul>
            <div class="btn-menu center">
                <i onclick="mostrarMenu();" class="fa fa-bars"></i>
            </div>
        </div>
    </nav>
</section>
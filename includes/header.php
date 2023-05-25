<!-- HEADER INICIA -->
    <div class="header">
      <div class="header-top-bar">
        <div class="container cont-header-top">
          <ul class="top-bar-contacto">
            <li>
              <a href="mailto:ventas@glama.com.mx" target="_blank">
                <img src="img/email-top-header.svg" class="icon-top-bar">ventas@glama.com.mx
              </a>
            </li>
            <li>
              <a href="tel:555692444">
                <img src="img/call-top-header.svg" class="icon-top-bar">(55) 56992444
              </a>
            </li>
          </ul>
          <ul class="top-bar-sesion-sn">
          <?php
            if(isset($_SESSION['id'])){
            ?>
             <li class="sesion-btn"><span class="cerrarsesion"><a href="lib/logout.php">Cerrar Sesión</a></span><img src="img/user-top-header.svg" class="icon-top-bar"><marquee><?php print $_SESSION['nombre']; ?></marquee></li>
            <?php
            }
            else{
            ?>
             <li class="sesion-btn"><img src="img/user-top-header.svg" class="icon-top-bar"><a href="#" id="registrobtn">Regístrate</a> / <a href="#" id="iniciosesionbtn">Inciar Sesión</a></li>
            <?php
            }
            ?>
            <li>
              <a href="https://www.linkedin.com/company/productos-glama/" target="_blank">
              <img src="img/in-top-header.svg" class="icon-top-bar">
              </a>
              <a href="https://www.facebook.com/productosglama" target="_blank">
              <img src="img/fb-top-header.svg" class="icon-top-bar">
              </a>
              <a href="https://www.youtube.com/channel/UCHUObKTim84bZz_qcanryuw" target="_blank">
              <img src="img/yt-top-header.svg" class="icon-top-bar">
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header-bottom container">
        <a href="index.php">
          <img src="img/logo.png" class="logo-header">
        </a>
        <img src="img/menu.svg" class="btn-menu">
        <ul class="nav-header">
          <li id="conocenos">Conócenos</li>
          <li id="conocenos2">Conócenos</li>
          <li id="productos"><a href="productos.php">Productos</a></li>
          <li id="contacto"><a href="contacto.php">Contacto</a></li>
          <li id="sostenibilidad">Sostenibilidad</li>
          <li id="sostenibilidad2">Sostenibilidad</li>
          <?php
            if(isset($_SESSION['id'])){
          ?>
          <li class="opt-sesion-movil" style="color:#333333;">Bienvenido: <marquee><?php print $_SESSION['nombre'];?></marquee></li>
          <li class="cerrarsesion"><a href="lib/logout.php">Cerrar Sesión</a></li>
          <?php
            }
            else{
          ?>
          <li class="opt-sesion-movil" style="color:#333333;"><a href="#" id="iniciosesionbtnmovil">Iniciar Sesión</a>/ <a href="#" id="registrobtnmovil">Registrarse</a></li>
          <?php
            }
          ?>
        </ul>
      </div>
      <!-- INICIA SUB MENU CONOCENOS -->
      <div class="submenu-conocenos">
        <div id="back-menu-submenu"></div>
        <div class="container">
          <div class="row">
            <div class="col-3 cotizar-ahora-menu pt-4">
              Tenemos el producto ideal para ti
              <a href="productos.php"><div class="btn-cotizar-sm-conocenos">Ver más</div></a>
            </div>
            <div class="col-9 pt-4 submenu-concenos-nav">
              <ul class="menu-conocenos-submenu">
                <li id="quehacemos">Qué hacemos</li>
                <li id="trayectoria">Trayectoria</li>
                <li id="vision">Visión, Misión y pautas estratégicas</li>
                <li id="dondeestamos">Dónde estamos</li>
                <li id="nuestragente">Nuestro equipo</li>
                <li id="cetificaciones">Certificaciones y estándares</li>
                <li id="filiales">Filiales</li>
                <li id="analisis">Análisis de la industria</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- TERMINA SUB MENU CONOCENOS -->
      <!-- INICIA SUB MENU SOSTENIBILIDAD -->
      <div class="submenu-sostenibilidad">
        <div id="back-menu-submenu"></div>
        <div class="container">
          <div class="row">
            <div class="col-3 cotizar-ahora-menu pt-4">
              Crear una cuenta personalizada, obtén beneficios al instante.
              <div class="btn-cotizar-sm-sostenibilidad">Registrarse ahora</div>
            </div>
            <div class="col-9 pt-4 submenu-concenos-nav">
              <ul class="menu-sostenibilidad-submenu">
                <li id="sustentabilidad">Sustentabilidad circular</li>
                <li id="metas">Metas sostenibles de la empresa</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- TERMINA SUB MENU SOSTENIBILIDAD -->
    </div>
<!-- HEADER TERMINA -->

  <div class="overlay-pop-sesion">
    <div class="cont-form-sesion">
    <div class="btn-close-form">X</div>
    <h5 class="text-center pt-4" id="titleform"></h5>
    <form class="pt-2 pl-3 pr-3 text-center" id="formRegistro">
      <div class="form-group">
        <input type="text" class="form-control" id="nombrereg" name="nombrereg" placeholder="Nombre">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="emailreg" name="emailreg" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="empresareg" name="empresareg" placeholder="Empresa">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="contrasenareg" name="contrasenareg" placeholder="Contraseña">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="contrasenaconfirmreg" name="contrasenaconfirmreg" placeholder="Confirmar Contraseña">
      </div>
      <div class="form-check pb-3">
        <input type="checkbox" class="form-check-input" id="aceptoAviso" name="aceptoAviso">
        <label class="form-check-label" for="aceptoAviso">Acepto el <a href="pdf/Aviso-privacidad-GLAMA.pdf" target="_blank">Aviso de privacidad</a></label>
      </div>
      <input type="button" class="btn btn-form" id="sendregistro" value="REGISTRARME">
    </form>

    <form class="pt-2 pl-3 pr-3 text-center" id="formInicioSesion">
      <div class="form-group">
        <input type="email" class="form-control" id="emailsesion" name="emailsesion" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="contrasenasesion" name="contrasenasesion" placeholder="Contraseña">
      </div>
      <div class="form-group text-left" style="color:#08b37a; cursor:pointer; font-size:13px;">
        <span id="btnRecuperar">Recuperar contraseña</span>
      </div>
      <input type="button" class="btn btn-form" id="sendiniciosesion" value="INICIAR SESIÓN">
    </form>
    <form class="pt-2 pl-3 pr-3 text-center" id="formRecupera">
      <div class="form-group">
        <input type="email" class="form-control" id="emailrecupera" name="emailrecupera" placeholder="Email">
      </div>
      <input type="button" class="btn btn-form" id="sendrecupera" value="RECUPERAR">
    </form>
    </div>
  </div>
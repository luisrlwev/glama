<!-- HEADER INICIA -->
    <div class="header">
      <div class="header-top-bar">
        <div class="container cont-header-top">
          <ul class="top-bar-sesion-sn">

          </ul>
        </div>
      </div>
      <div class="header-bottom container">
        <a href="index.php">
          <img src="../img/logo.png" class="logo-header">
        </a>
        <img src="img/menu.svg" class="btn-menu">
        <ul class="nav-header">
          <li id="conocenos">Conócenos</li>
          <li id="conocenos2">Conócenos</li>
          <li id="productos"><a href="productos.php">Productos</a></li>
          <li id="contacto"><a href="contacto.php">Contacto</a></li>
          <li id="sostenibilidad">Sostenibilidad</li>
          <li id="sostenibilidad2">Sostenibilidad</li>
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
              Crear un cuenta personalizada, obtén beneficios al instante.
              <a href="productos.php"><div class="btn-cotizar-sm-sostenibilidad">Registrarse ahora</div></a>
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
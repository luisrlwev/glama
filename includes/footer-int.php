     <!-- INICIA FOOTER -->
     <div class="container-fluid footer pt-5">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-2 text-center logo-cont-footer">
             <img src="../img/logo.png" class="logo-footer">
           </div>
           <div class="col-2 col-footer">
            Plásticos 27, Santa Clara Coatitla, C.P. 55540,
            Ecatepec de Morelos<br>
            Estado de México<br>
            <a href="mailto:ventas@glama.com.mx" target="_blank">ventas@glama.com.mx</a><br>
            <a href="tel:5556992444">(55) 56992444</a>
           </div>
           <div class="col-2 col-footer">
             <p class="mb-0 title-footer">Mapa del Sitio</p>
             <p>
              <span class="item-mps"><a href="../conocenos.php">Conócenos</a></span>
              <span class="item-mps"><a href="../productos.php">Productos</a></span>
              <span class="item-mps"><a href="../contacto.php">Contacto</a></span>
              <span class="item-mps"><a href="../sostenibilidad.php">Sostenibilidad</a></span>
              </p>
           </div>
           <div class="col-2 col-footer">
              <p class="mb-0 title-footer">
               Redes sociales
              </p>
              <a href="https://www.linkedin.com/company/productos-glama/" target="_blank">
                <img src="../img/in-footer.svg" class="icon-top-bar">
              </a>
              <a href="https://www.facebook.com/productosglama" target="_blank">
                <img src="../img/fb-footer.svg" class="icon-top-bar">
              </a>
              <a href="https://www.youtube.com/channel/UCHUObKTim84bZz_qcanryuw" target="_blank">
                <img src="../img/yt-footer.svg" class="icon-top-bar">
              </a>
           </div>
           <div class="col-2 col-footer">
           <?php
            if(isset($_SESSION['id'])){}
            else{
            ?>
            <a href="#" id="registrobtnfooter">Registrarse</a><br>
            <a href="#" id="iniciosesionbtnfooter">Inciar sesión</a>
            <?php
            }
            ?>
           </div>
         </div>
       </div>
       <div class="footer-legales text-center">
       <a href="pdf/politica-cookies-GLAMA.pdf" target="_blank">Políticas de Cookies</a> / <a href="pdf/Aviso-privacidad-GLAMA.pdf" target="_blank">Aviso Legal/Privacidad</a>
       </div>
    </div>
    <!-- TERMINA FOOTER -->
    <?php
    if(isset($_SESSION['id'])){
    ?>
    <a href="mensaje-box.php">
      <div class="btn-msjbox">
      </div>
    </a>
    <a href="https://zoom.us/join" target="_blank">
      <div class="btn-zoom">
      </div>
    </a>
    <?php
    }
    else{}
    ?>
    
    <a href="https://api.whatsapp.com/send?phone=5215510667761" target="_blank">
      <div class="btn-wa">
      </div>
    </a>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
          <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v8.0'
              });
            };

            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

          <!-- Your Chat Plugin code -->
          <div class="fb-customerchat"
            attribution=setup_tool
            page_id="171784259599882"
      theme_color="#08b37a"
      logged_in_greeting="Hola, soy el Asistente Virtual de Productos Glama."
      logged_out_greeting="Hola, soy el Asistente Virtual de Productos Glama.">
      </div>
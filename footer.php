
<footer class="bg_img" data-background="assets/images/footer/footer-bg.png">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4 mb--50">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget-about">
                        <h4 class="title text-white">Acerca de Ceri</h4>
                        <p class="text-white">Assertively develop team driven niche marketis and
                            revolutionary servicesre Synergistically parallel task
                            ntrinsicly reintermediate best credibly.</p>
                        <ul class="contact">
                            <li><i class="fas fa-headphones-alt text-white"></i><a href="Tel:3122235788" class="text-white">312-223-5788
                                </a></li>
                            <li class="text-white"><i class="fas fa-home text-white"></i>054048, Rionegro, Antioquia Glorieta antiguas empanadas caucanas, via Llanogrande la Ceja</li>
                            <li class="text-white"><i class="fas fa-globe-asia text-white"></i><a href="www.cerifundacion.com"  class="text-white">www.cerifundacion.com </a></li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/fundacion.ceri/" class="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/cerifundacion/" class="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send/?phone=573122235788&text&type=phone_number&app_absent=0" class="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget-blog">
                        <h4 class="title text-white">Recientes publicaciones</h4>
                        <ul class="footer-blog">
                            <li>
                                <div class="content">
                                    <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/cerifundacion/" data-instgrm-version="13"></blockquote>


                                    <!-- Script para cargar el widget de Instagram -->
                                    <script async src="https://www.instagram.com/embed.js"></script>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pl-xl-4 " id="footer">
                    <div class="footer-widget widgt-form">
                        <h4 class="title text-white">Recibe nuestras noticias</h4>
                        <p class="text-white">Ingresa tu correo electrónico y obten las últimas noticias o eventos de Ceri</p>
                        <?php
                        include 'assets/PHP/addSuscriptor.php';?>
                      <form action="#footer" method="post" class="was-validated" enctype="multipart/form-data">
                            <input type="text" placeholder="Ingresar correo eléctronico" name="emailSuscriptor" class="m-1" required>
                          
                                <input type="submit" name="addSuscriptor" class=" btn-success m-1" value="Registrarme ahora!" require>
                                          
                                <span> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>
                <script>
                    document.write(new Date().getFullYear());
                </script> &copy; Copyright Made by <a href="https://www.agenciaeaglesoftware.com/" target="_BLANK">Agencia de Desarrollo Eagle Software</a> - Todos los derechos reservados.
            </p>
            </p>
        </div>
    </div>
</footer>
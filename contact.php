<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
</head>

<body>


    <!-- ==========Preloader Overlay Starts Here========== -->
    <div class="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <div class="scrollToTop"><i class="fas fa-angle-up"></i></div>
    <div class="overlay"></div>
    <div class="overlayTwo"></div>
    <!-- ==========Preloader Overlay Ends Here========== -->

    <!-- ==========Header Section Starts Here========== -->
    <header>
        <?php include 'header.php'; ?>
        <?php include 'navbar.php'; ?>
    </header>
    <!-- ==========Header Section Ends Here========== -->

    <!-- ===========Header Search=========== -->
    <div class="header-form">
        <div class="bg-lay">
            <div class="cross">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <form class="form-container">
            <input type="text" placeholder="Input Your Search" name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <!-- ===========Header Search=========== -->

    <!-- ===========Header Cart=========== -->
    <?php include 'car.php'; ?>>
    <!-- ===========Header Cart=========== -->

    <!-- ==========Banner Section Starts Here========== -->
    <section class="page-header bg_img" data-background="./assets/images/banner/contact-banner.jpg">
        <div class="container">
            <div class="page-header-content">
                <h1 class="title text-white">Contáctanos</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index" class="text-white">Inicio</a>
                    </li>
                    <li class="text-white">
                        Contacto
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner Section Ends Here========== -->


    <!-- ==========Contact Section Starts Here========== -->
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="contact-form-area">
                <h4 class="title" id="titulo">Déjanos un mensaje</h4>
                <label for="titulo" class="text-center text-danger">Estimado usuario, tenga en cuenta que todos los campos son
                    obligatorios y que sus datos están siendo protegidos por nuestra Política de Tratamiento de Datos Personales.
                </label>
                <br>  <br>
                <form id="form">

                    <div class="field">
                        <label for="name">Nombre completo: </label>
                        <input type="text" name="name" id="name" placeholder="Escriba aquí su nombre completo" required>
                    </div>
                    <div class="field">
                        <label for="email">Correo electrónico:</label>
                        <input type="text" name="email" id="email" placeholder="ejemplo@ejemplo.com" required>
                    </div>
                    <div class="field">
                        <label for="phone">Teléfono:</label>
                        <input type="text" name="phone" id="phone" placeholder="Escriba aquí su teléfono" required>
                    </div>
                    <div class="field">
                        <label for="subject">Asunto:</label>
                        <input type="text" name="subject" id="subject" placeholder="Escriba aquí el asunto del correo" required>
                    </div>
                    <div class="field">
                        <label for="message">Mensaje:</label>
                        <textarea type="text" name="message" id="message" placeholder="Escriba aquí su pregunta, queja, reclamo o solicitud" cols="10" required></textarea>
                    </div>

                    <input type="submit" id="button" value="ENVIAR MENSAJE">
                </form>

                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                <script type="text/javascript">
                    emailjs.init('L6c3MKdoKV4zSFHxa')
                </script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                <script type="text/javascript">
                    emailjs.init('L6c3MKdoKV4zSFHxa')
                </script>
            </div>
        </div>
    </section>
    <!-- ==========Contact Section Ends Here========== -->


    <!-- ==========Map Section Starts Here========== -->
    <div class="map-section pos-rel">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.006573603966!2d-75.3944308!3d6.1298166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f57cef28a25%3A0x60004af29d7d58c5!2sFundaci%C3%B3n%20CERI%20centro%20acu%C3%A1tico%20de%20rehabilitaci%C3%B3n%20integral!5e0!3m2!1ses-419!2sco!4v1703723073345!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="contact-area padding-bottom padding-top pt-lg-0 pb-lg-0">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/01.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Edades permitidas</h6>
                            <ul>
                                <li>A partir de los 3 meses</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/02.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Ubicación</h6>
                            <ul>
                                <li>054048, Rionegro, Antioquia Glorieta antiguas empanadas caucanas, via Llanogrande la Ceja</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/03.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Horario</h6>
                            <ul>
                                <li>Lunes - Sabado</li>
                                <li>08.00 am – 05.00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-thumb">
                            <img src="assets/images/contact/04.png" alt="contact">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Teléfono y correo</h6>
                            <ul>
                                <li><a href="Tel:3122235788">312-223-5788</a></li>
                                <li><a href="Mailto:centrodeestimulacionceri@gmail.com ">centrodeestimulacionceri@gmail.com </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Map Section Ends Here========== -->

    <!-- ==========Footer Section Starts Here========== -->
    <?php include 'footer.php'; ?>
    <!-- ==========Footer Section Ends Here========== -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="assets/js/map.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        const btn = document.getElementById('button');

        document.getElementById('form')
            .addEventListener('submit', function(event) {
                event.preventDefault();

                btn.value = 'Enviando...';

                const serviceID = 'default_service';
                const templateID = 'template_8j9sz0c';

                emailjs.sendForm(serviceID, templateID, this)
                    .then(() => {
                        btn.value = 'ENVIAR MENSAJE';
                        alert('Mensaje enviado con éxito!');
                    }, (err) => {
                        btn.value = 'ENVIAR MENSAJE';
                        alert(JSON.stringify(err));
                    });
            });
    </script>
</body>

</html>
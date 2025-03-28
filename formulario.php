<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.ionos.mx';
        $mail->SMTPAuth = true;
        $mail->Username = 'alio@alio.mx';
        $mail->Password = 'Alio2953$'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587; 

        $mail->setFrom('alio@alio.mx', 'Alio');
        $mail->addAddress('alio@alio.mx', 'Alio');
        $mail->Subject = $subject;
        $mail->Body    = "<strong>Nombre:</strong> " . $name . "<br>" .
                         "<strong>Correo:</strong> " . $email . "<br>" .
                         "<strong>Motivo:</strong> " . $subject . "<br>" .
                         "<strong>Mensaje:</strong> <br>" . nl2br($message);

        $mail->isHTML(true);
        $mail->send();
        
        echo 'El mensaje ha sido enviado correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <style>
    header .social-links a:last-child {
      opacity: 0;
      pointer-events: all;
    }
  </style>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alio Corporativo Legal S.C.</title>
  <meta name="description" content="Nuestro corporativo está en Guadalajara, Jalisco y contamos con 8 sucursales más, cubriendo el bajío del país.">
  <meta name="keywords" content="Alio, alio, Alio Corporativo Legal, Alio Corporativo Legal">

  <!-- Favicons -->
  <link href="assets/img/extras/icono.png" rel="icon" type="image/png" sizes="32x32">
  <link href="assets/img/extras/icono.png" rel="apple-touch-icon" type="image/png" sizes="180x180">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contacto@alio.mx">contacto@alio.mx</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><a href="tel:3310570848">33 1057 0848</a></i>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
          <!-- <a href="https://x.com/?mx=2" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a> -->
          <a href="https://www.facebook.com/aliocorporativolegal" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/aliocorporativo/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
          <!-- <a href="https://www.linkedin.com/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a> -->
          <a href="assets/img/Bolsa de trabajo/callcenter/easteregg.mp4" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        </div>

      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/extras/icono.png" alt="">
          <h1 class="sitename">Alio</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Inicio</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#coverage">Cobertura</a></li>
            <li><a href="#offices">Sucursales</a></li>
            <li><a href="#contact">Contacto</a></li>
            <li class="dropdown"><a><span>Bolsa de trabajo</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a class="active" href="callcenter.html"><span>Call Center</span></a></li>
                <li><a href="juridico.html"><span>Jurídico</span></i></a>
              </ul>
            </li>

          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">
    
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/extras/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <h2>Bienvenido a <br> Alio Corporativo Legal S.C.</h2>
            <p>Somos un corporativo especializado en la cobranza de créditos.</p>
            <a href="#about" class="btn-get-started">Iniciemos</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Nosotros<br></span>
        <h2>Nosotros<br></h2>
       <!--  <p>Alio Corporativo Legal S.C.</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/extras/trabajo.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Alio Corporativo Legal S.C.</h3>
            <br>
              <p class="fst-italic">
                Nace en el año de 2005 en la ciudad de Guadalajara, Jalisco como una firma de abogados altamente preparados y especializados en materia de litigio civil y mercantil; en 2007 adicional a la solución de conflictos legales, empezamos a prestar servicios de Cobranza Pre Legal y Legal para la recuperación de cartera vencida, así como servicios especializados de Investigación y/o Verificación de datos para el otorgamiento de Créditos.
              </p>
            <br>
            <a href="#" class="read-more"><span>Ver más</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Nuestros principios</span>
        <h2>Nuestros principios</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-4 g-lg-0">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3 class="text-center">Misión</h3>
              <p class="fst-italic">Proveer a nuestros clientes, soluciones prácticas, profesionales y eficientes en cobranza, verificación de datos y litigio especializado en materia civil, mercantil, patrimonial y penal, así como brindar un excelente servicio a nuestros clientes atendiendo a sus necesidades reales, superando sus expectativas bajo los principios de honestidad, responsabilidad y calidad.</p>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">
              <h3 class="text-center">Valores</h3>
              <div class="d-flex justify-content-center">
                <ul class="list-center">
                  <li><i class="bi bi-check"></i> <span>Honestidad</span></li>
                  <li><i class="bi bi-check"></i> <span>Responsabilidad</span></li>
                  <li><i class="bi bi-check"></i> <span>Calidad</span></li>
                </ul>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3 class="text-center">Visión</h3>
              <p class="fst-italic">Brindar un servicio especializado y eficaz respaldado por un equipo de profesionales altamente capacitados, alcanzando los más altos beneficios para nuestros clientes.</p>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/ipejal.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/infonavit.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/nr1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/sicrea.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/ipejal.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/infonavit.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/nr1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/sicrea.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Servicios</span>
        <h2>Servicios</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-newspaper"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Litigios</h3>
              </a>
              <p>Nuestros servicios abarcan en el ámbito del litigio la elaboración de demandas, atención y seguimiento de todo tipo de juicios civiles y mercantiles</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-search"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Investigación crediticia</h3>
              </a>
              <p>Realizamos investigaciónes a clientes que adquiriran un nuevo crédito, reunimos la información histórica por medio del análisis que se usa como base para predecir la conducta futura del mismo.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-card-checklist"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Administración y recuperación de cartera.</h3>
              </a>
              <p>Servicio de cobranza Judicial y Extrajudicial</p>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="coverage" class="call-to-action section dark-background">

      <img src="assets/img/extras/cta-bg.jpg" class="img-call-to-action" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Cobertura</h3>
              <p>Nuestro corporativo está en Guadalajara, Jalisco y contamos con 13 sucursales más, cubriendo el bajío del país.</p>
              <img class="img-fluid mx-auto d-block" src="assets/img/extras/mapa1.png" style="padding-top: 25px; width: 60%;">
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <section id="offices" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Sucursales</span>
        <h2>Sucursales</h2>

      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-buildings"></i>
              </div>
              <a class="stretched-link">
                <h3>Ciudad de México</h3>
                <h4><span>Oficina</span></h4>
              </a>
              <p>Patricio Sanz #1609, Torre B, Piso 8,<br> Col. Del Valle Sur, Alcaldía Benito Juarez,<br> Ciudad de Mexico, CDMX C.P 03100.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <a class="stretched-link">
                <h3>Jalisco</h3>
                <h4><span>Matriz</span></h4>
              </a>
              <p> Guadalajara, Jalisco.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-buildings"></i>
              </div>
              <a class="stretched-link">
                <h3>Aguascalientes</h3>
                <h4><span>Oficina</span></h4>
              </a>
              <p>Diego Fernandez Villa #309, Fracc. Prados Del Sur, Aguascalientes, Aguascalientes, C.P. 20280.</p>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Contacto</span>
        <h2>Contacto</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Dirección</h3>
              <p>Av. Topacio 2953, Col. Bosques de la Victoria, Guadalajara, Jal.</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Teléfono</h3>
              <p class="text-center">33 1057 0848 <br> Ext: 800 - 807</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Correo</h3>
              <p>contacto@alio.mx</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.6572352011576!2d-103.39743672414244!3d20.642823600921066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428adc9021f6f7d%3A0x24b387cdce2a888c!2sAlio%20Corporativo%20Legal!5e0!3m2!1ses-419!2smx!4v1734123186467!5m2!1ses-419!2smx" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
 
          <div class="col-lg-6">
            <form action="forms/formulario.php" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nombre" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Correo" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Motivo" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Comentarios" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Cargando...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje ha sido enviado</div>

                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="index.html" class="logo sitename text-center">Alio Corporativo Legal S.C.</a>
            <div class="footer-contact pt-3">
              <p>Av. Topacio 2953, Col. Bosques de la Victoria</p>
              <p>Guadalajara, Jal.</p>
              <p class="mt-3"><strong>Telefono:</strong> <span>33 1057 0848<br><strong>Ext: </strong>800 - 807</span></p>
              <p><strong>Correo:</strong> <span>contacto@alio.mx</span></p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Servicios</h4>
          <ul>
            <li><a href="#services">Litigio</a></li>
            <li><a href="#services">Consultoria Legal</a></li>
            <li><a href="#services">Investigación Crediticia</a></li>
            <li><a href="#services">Recuperación de Cartera</a></li>
            <li><a href="#services">Administración de Cartera</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Links Útiles</h4>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#about">Nosotros</a></li>
            <li><a href="formulario.html">Formulario</a></li>
            <li><a href="avisodeprivacidad.pdf" target="_blank">Políticas de Privacidad</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Bolsa de Trabajo</h4>
          <ul>
            <li><a href="juridico.html">Jurídico</a></li>
            <li><a href="callcenter.html">Call Center</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Alio Corporativo Legal S.C. 2025.</span><span> Todos los derechos reservados.</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        Edited by <a href="#">Alio T.I.</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Start of HubSpot Embed Code -->
    <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/48547158.js"></script> -->
  <!-- End of HubSpot Embed Code -->

  <!-- Start of Collect.chat Embed Code -->
    <script>(function(w, d) { w.CollectId = "67818cd1c45f1404d5f758c9"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
  <!-- End of Collect.chat Embed Code -->


</body>

</html>
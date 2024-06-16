<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Creative Tech - Digital Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="web development, mobile development, IT consulting, social media management, graphic design, video editing">
  <meta name="description" content="Creative Tech is a digital agency that provides web and mobile application development, IT consulting, social media management, graphic design, and video editing services.">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('landing-page/img/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('landing-page/img/apple-touch-icon.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{ asset('landing-page/lib/bootstrap/css/bootstrap.min.css') }}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{ asset('landing-page/lib/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/animate/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/owlcarousel/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landing-page/lib/magnific-popup/magnific-popup.css') }}">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ asset('landing-page/css/style.css') }}">

</head>

<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Creative<span>Tech</span></a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-content">
      <h2>Building Your <span>Digital</span> Future!</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('landing-page/img/about.png') }}" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>About Creative Tech</h2>
            <h3>We are a digital agency dedicated to helping clients achieve success in the digital era.</h3>
          </div>
        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2>Our Services</h2>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInLeft">
          <div class="icon"><i class="fa fa-laptop"></i></div>
          <h4 class="title"><a href="#">Web and Mobile Application Development</a></h4>
          <p class="description">Developing responsive and high-performance web and mobile applications to meet your business needs.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInRight">
          <div class="icon"><i class="fa fa-cogs"></i></div>
          <h4 class="title"><a href="#">IT Consulting</a></h4>
          <p class="description">Providing IT consulting to help you strategize technology that aligns with your business goals.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-users"></i></div>
          <h4 class="title"><a href="#">Social Media Management</a></h4>
          <p class="description">Managing and enhancing your social media presence to increase engagement and brand awareness.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-pencil"></i></div>
          <h4 class="title"><a href="#">Graphic Design</a></h4>
          <p class="description">Creating innovative and captivating graphic designs that communicate with your target audience.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-video-camera"></i></div>
          <h4 class="title"><a href="#">Video Editing</a></h4>
          <p class="description">Providing professional video editing services for various promotional and commercial purposes.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInLeft" data-wow-delay="0.4s">
          <div class="icon"><i class="fa fa-cube"></i></div>
          <h4 class="title"><a href="#">3D Modelling</a></h4>
          <p class="description">Providing high-quality and realistic 3D modeling services for various industry needs.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="box wow fadeInRight" data-wow-delay="0.4s">
          <div class="icon"><i class="fa fa-film"></i></div>
          <h4 class="title"><a href="#">Animator</a></h4>
          <p class="description">Offering professional animation services for various projects, from advertisements to animated films.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #services -->
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Clients</h2>
          <p>We are proud to have worked with various clients from different industries, delivering innovative and effective digital solutions.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="{{ asset('landing-page/img/clients/client-1.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-2.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-3.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-4.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-5.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-6.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-7.png') }}" alt="">
          <img src="{{ asset('landing-page/img/clients/client-8.png') }}" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Portfolio</h2>
          <p>Discover various projects we have worked on and how we helped our clients achieve their digital goals.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/project1.png') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/project1.png') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 1</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/project2.png') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/project2.png') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 2</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/3.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/3.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 3</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/4.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/4.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 4</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/5.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/5.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 5</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/6.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/6.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 6</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/7.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/7.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 7</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="{{ asset('landing-page/img/portfolio/8.jpg') }}" class="portfolio-popup">
                <img src="{{ asset('landing-page/img/portfolio/8.jpg') }}" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Project 8</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Testimonials Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Hear what our clients have to say about their experience working with Creative Tech and how we helped them achieve their digital goals.</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('landing-page/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Creative Tech has provided highly effective solutions for our digital needs. Their team is responsive and highly skilled.
                <img src="{{ asset('landing-page/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('landing-page/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('landing-page/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Working with Creative Tech has brought significant digital transformation to our company. They truly understand our needs.
                <img src="{{ asset('landing-page/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('landing-page/img/testimonial-2.jpg') }}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('landing-page/img/quote-sign-left.png') }}" class="quote-sign-left" alt="">
                Creative Tech provides outstanding service. They are very professional and always deliver results that exceed our expectations.
                <img src="{{ asset('landing-page/img/quote-sign-right.png') }}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('landing-page/img/testimonial-3.jpg') }}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('landing-page/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                The Creative Tech team is very dedicated and experienced. They helped us optimize our business processes through innovative digital solutions.
                <img src="{{ asset('landing-page/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('landing-page/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="{{ asset('landing-page/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                Creative Tech has been a very valuable partner for us. They not only provide technical solutions but also effective digital marketing strategies.
                <img src="{{ asset('landing-page/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
              </p>
              <img src="{{ asset('landing-page/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Join the Digital Revolution</h3>
            <p class="cta-text"> Don't miss the opportunity to transform your business with cutting-edge digital solutions from Creative Tech. Contact us today!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Join Now</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
<section id="team" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Our Team</h2>
      <p>The Creative Tech team consists of dedicated and experienced professionals in their respective fields, ready to help you achieve your digital goals.</p>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="pic"><img src="{{ asset('landing-page/img/diki.jpg')}}" alt="" class="img-fluid"></div>
            <div class="details">
              <h4>Diki Ardika</h4>
              <span>Programmer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="pic"><img src="{{ asset('landing-page/img/pais.jpg')}}" alt="" class="img-fluid"></div>
            <div class="details">
              <h4>Muhammad Faiz</h4>
              <span>Marketing</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="pic"><img src="{{ asset('landing-page/img/febri2.png')}}" alt="" class="img-fluid"></div>
            <div class="details">
              <h4>Febri NB</h4>
              <span>UI UX Designer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="pic"><img src="{{ asset('landing-page/img/diksan.jpg')}}" alt="" class="img-fluid"></div>
            <div class="details">
              <h4>Dikhsan Tibong</h4>
              <span>Programmer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- #team -->
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Kontak Kami</h2>
          <p>Jika Anda memiliki pertanyaan atau ingin memulai proyek dengan kami, jangan ragu untuk menghubungi kami. Tim Creative Tech siap membantu Anda.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nomor Telepon</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.123456789012!2d122.518462!3d-3.977978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98e1234567890%3A0x1234567890abcdef!2sKendari%2C+Sulawesi+Tenggara%2C+Indonesia!5e0!3m2!1sen!2sid!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Anda"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Hak Cipta <strong>Creative Tech</strong>. Semua Hak Dilindungi
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('landing-page/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{ asset('landing-page/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/magnific-popup/magnific-popup.min.js')}}"></script>
  <script src="{{ asset('landing-page/lib/sticky/sticky.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('landing-page/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('landing-page/js/main.js')}}"></script>

</body>
</html>

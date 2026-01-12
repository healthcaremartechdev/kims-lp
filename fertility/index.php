<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIMSHEALTH</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fontawsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Cusome css -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/responsive.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NPDG225B');
  </script>
  <!-- End Google Tag Manager -->

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPDG225B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img src="image/logo.png" alt="" class="img-fluid header-logo">
          </div>
          <div class="col-lg-8 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-lg-4 col-md-4 my-auto">
                <div class="d-flex align-items-center gap-2">
                  <div class="header_icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="header-widget">
                    <div class="header-widget-title">CALL US</div>
                    <div class="header-widget-text">
                      <a href="tel:04714712800" class="text-decoration-none text-black">04714712800</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 my-auto">
                <div class="d-flex align-items-center gap-2">
                  <div class="header_icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="header-widget">
                    <div class="header-widget-title">LOCATION</div>
                    <div class="header-widget-text">Anayara P.O, Trivandrum, Kerala</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 text-end pe-lg-0">
                <a href="#" class="btn header_btn"> Book an appointment </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-menu mobileMenuBar" id="menuHeader">
      <div class="container">
        <nav class="header-menu-container">
          <div class="navbar-brand ps-1">
            <a href="#">
              <img src="image/logo.png" alt="" class="img-fluid">
            </a>
          </div>
          <div class="mobile_primary" id="primary-nav">
            <ul class="menu-navigation" id="menu-main-navigation-1">
              <li><a href="#overview" class="anchor-menu">KIMS Fertility Clinic</a></li>
              <li><a href="#expert" class="anchor-menu">Our Experts</a></li>
              <li><a href="#service" class="anchor-menu">Our Services</a></li>
              <li><a href="#speciality" class="anchor-menu">Why Choose Us</a></li>
              <li><a href="#about" class="anchor-menu">About Us</a></li>
              <li><a href="#faq" class="anchor-menu">FAQs</a></li>
            </ul>
          </div>
          <div class="menu-button">
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
            <span class="toggle-bar"></span>
          </div>
        </nav>
      </div>
    </div>
  </header>



  <main class="main">

    <section class="banner-section" id="bannerSection">
      <img src="image/banner.jpg" alt="" class="img-fluid w-100 d-lg-block d-md-none d-none">
      <img src="image/banner.jpg" alt="" class="img-fluid w-100 d-lg-none d-md-block d-block">
      <div class="container formSection">
        <div class="row">
          <div class="col-lg-7">
            <div class="h-100"></div>
          </div>
          <div class="col-lg-5">
            <div class="banner-form">
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold fs-6"><a href="tel:04714712800" class="text-decoration-none text-color">04714712800</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post"  onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Fertility">
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile Number"
                      pattern="[0-9]{10}" title="Should be 10 digit number"
                      oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                      minlength="10" maxlength="10" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <textarea name="message" rows="2" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="col-lg-12 form-group">
                    <div class="g-recaptcha" data-sitekey="6LfZd-gqAAAAADrfVAT6kawPPQWdvsk_SwFOxN59"></div>
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="submit" value="Submit" class="btn submit-btn">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-section pt-60" id="overview">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-md-6 mb-lg-0 mb-3">
            <div class="sec-title">
              <h2>KIMSHEALTH Fertility Clinic</h2>
              <p>Your Path to Parenthood</p>
            </div>
            <div class="overview-content">
              <p>KIMSHEALTH Fertility Clinic is a leading center for reproductive health, offering comprehensive services to help individuals and couples realize their dream of parenthood. Located within the KIMSHEALTH network, the clinic is equipped with state-of-the-art technology and staffed by experienced fertility specialists, embryologists, and support staff dedicated to providing personalized care. The clinic offers a wide range of fertility treatments, including In Vitro Fertilization (IVF), Intrauterine Insemination (IUI), egg and sperm donation, fertility preservation, and more. Each treatment plan is tailored to meet the unique needs of the patients, ensuring the highest chances of success. KIMSHEALTH Fertility Clinic is committed to maintaining the highest standards of medical care, with a strong emphasis on patient comfort and confidentiality. The clinic also provides counseling and emotional support services, recognizing the challenges that come with fertility treatments. With a focus on innovation, compassion, and excellence, KIMSHEALTH Fertility Clinic is a trusted partner in the journey to parenthood.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="overview-rightbox">
              <img src="image/fertility-feature.jpg" alt="" class="img-fluid">
            </div>
            <div class="video-item">
              <iframe width="100%" height="250" src="https://www.youtube.com/embed/74CKP9AbqLY" title="Management of Fertility Issues" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-xl-5 col-lg-5 pe-lg-5 mb-lg-0 mb-3">
            <img src="image/feature2.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-xl-7 col-lg-7">
            <div class="sec-title">
              <h2>Unlock a World of Possibilities with IVF</h2>
              <p>Benifits of IVF Treatment.</p>
            </div>
            <div class="overview-content list-icons">
              <p class="mb-2">Experience the advantages of IVF treatment at KIMSHEALTH Fertility Clinic, where advanced technology,
                personalized care, and expert fertility specialists work together to support your journey to parenthood with
                the highest success rates.</p>
              <p class="mb-2">Explore some essential benefits of IVF Treatment</p>
              <ul>
                <li><strong>Increased Chances of Conception: </strong> IVF offers higher success rates, particularly for
                  couples facing fertility challenges, helping to achieve pregnancy when other methods may not work.</li>
                <li><strong>Controlled and Personalized Process: </strong> IIVF allows precise control over fertilization
                  and embryo development, offering customized treatment plans tailored to each couple's
                  specific needs.</li>
                <li><strong>Genetic Screening: </strong>IVF enables preimplantation genetic testing (PGT) to screen embryos
                  for genetic disorders, ensuring healthier pregnancies and reducing the risk of inherited
                  conditions.</li>
                <li><strong>Options for Family Building: </strong>IVF provides options for a wide range of individuals,
                  including same-sex couples, single parents, and those facing infertility due to age or medical conditions.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-bg" id="expert">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-6 col-lg-6 mb-lg-0 mb-3">
            <div class="sec-title">
              <h2>Our Experts</h2>
              <p>Expert Team Ensuring Superior Patient Care.</p>
            </div>
            <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/doctor1.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Sneha Ann Abraham</h3>
                  <p>Consultant, Fertility Clinic</p>
                  <h4>MBBS, DGO, MS, FRM</h4>
                  <a href="#" class="btn btn-primary rounded-5"> Request An Appointment </a>
                </div>
              </div>
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/doctor2.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Rabeeh Valiyathodi</h3>
                  <p>Consultant, Fertility Clinic</p>
                  <h4>MBBS, DGO, DNB, FRM, DRM</h4>
                  <a href="#" class="btn btn-primary rounded-5"> Request An Appointment </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 my-lg-auto">
            <div class="sec-title">
              <h2>Our Services</h2>
            </div>
            <div class="service-wrapper service-list">
              <ul>
                <li>Fertility Evaluation <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>In Vitro Fertilization (IVF) <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Intracytoplasmic Sperm Injection (ICSI) <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Intrauterine Insemination (IUI) <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Fertility-Enhancing Surgeries <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Donor Programs <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Donor Programs <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
                <li>Preimplantation Genetic Testing (PGT) <span class="arrow-icon"><img src="image/right-arrow.png" alt="" class="img-fluid"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section speciality-section" id="speciality">
      <div class="container">
        <div class="text-center gray_bg outer-box-speciality">
          <div class="sec-title">
            <h2>Why Choose Us</h2>
            <p>Customized Fertility Solutions for Your Journey to Parenthood</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="owl-carousel owl-theme stage-margin mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Experience</h5>
                        <div class="under-line"></div>
                        <p>With over 15 years of experience, we have successfully helped thousands of couples achieve their dream of pregnancy.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Expert Team</h5>
                        <div class="under-line"></div>
                        <p>Our highly qualified team includes fertility specialists, reproductive endocrinologists, embryologists, nurses, and support staff who work collaboratively to provide you with the best care.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>State-of-the-Art Technology</h5>
                        <div class="under-line"></div>
                        <p>We invest in cutting-edge technology, ensuring that you have access to the latest advancements in reproductive medicine.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-section" id="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-5 col-lg-5">
            <div class="about-left-box">
              <img src="image/hospital.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-xl-6 col-lg-7 mt-lg-0 mt-5">
            <div class="sec-title">
              <h2>About KIMSHEALTH Trivandrum</h2>
              <p>One of The Best Multi-specialty Hospital in Kerala.</p>
            </div>
            <div class="counter-box counter-section mb-4">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 mb-lg-0 mb-3">
                  <div class="counter-item">
                    <h2><span class="counter">22</span>+</h2>
                    <p>Hospitals & Medical Centres</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-lg-0 mb-3">
                  <div class="counter-item">
                    <h2><span class="counter">900</span>+</h2>
                    <p>Doctors</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-lg-0 mb-3">
                  <div class="counter-item">
                    <h2><span class="counter">2000</span>+</h2>
                    <p>Nurses</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-lg-0 mb-3">
                  <div class="counter-item">
                    <h2><span class="counter">1800</span>+</h2>
                    <p>Beds</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="right-context-box">
              <p>KIMSHEALTH hospital earns trust through excellence in care, backed by a legacy of expertise and innovation. Trust KIMSHEALTH because of its renowned expertise, state-of-the-art facilities, and commitment to patient care. With a legacy of excellence in healthcare, KIMSHEALTH prioritizes safety, innovation, and compassionate treatment. Accredited by top medical bodies, KIMSHEALTH upholds rigorous standards, ensuring reliable, holistic healthcare solutions. Your well-being is our paramount concern.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="owl-carousel owl-theme item-slider">
              <div class="slide-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/FpRtcgeQPpU" title="പുരുഷ വന്ധ്യതയ്ക്ക് എപ്പോഴാണ് മരുന്നുകൾ കഴിക്കേണ്ടത് ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="slide-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/21ueZoYXJPA" title="IVF നെ എളുപ്പത്തിൽ മനസ്സിലാക്കാം - Dr. Rabeeh Valiyathodi, KIMSHEALTH" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="slide-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/VQ3PDVxgBt8" title="വന്ധ്യത ഒരു രോഗമായി കാണേണ്ടതില്ല! Infertility | Fertility Issues | KIMSHEALTH" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section faq-section" id="faq">
      <div class="container">
        <div class="sec-title">
          <h2>Frequently Asked Questions</h2>
        </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                aria-expanded="true" aria-controls="collapse1">
                <span>What is infertility, and when should I seek help?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Infertility is the inability to conceive after a year of regular, unprotected intercourse. If you're over 35, or if you suspect any problems like menstrual issues or sexual problems, seeking help after six months or earlier is advisable.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What exactly happens in the Fertility clinic? When a couple comes to the clinic, what are the processes?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae sequi iste alias minima esse voluptates, repudiandae culpa, facere placeat omnis, officia consectetur perspiciatis consequatur impedit mollitia nemo molestiae laboriosam ea.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What are the basic tests? What information are you gaining by doing this test?</span>
              </button>
            </h2>

            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae sequi iste alias minima esse voluptates, repudiandae culpa, facere placeat omnis, officia consectetur perspiciatis consequatur impedit mollitia nemo molestiae laboriosam ea.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>





  <footer class="footer">
    <div class="container pt-2 pb-lg-2 pb-5">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright © <span class="text-white current-year"></span>. KIMSHEALTH. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="sticky-bar">
    <a href="tel:04714712800"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
  </div>

  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
      </div>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="js/script.js"></script>
	
	<script>
	    function validateCaptcha() {
        var response = grecaptcha.getResponse(); // Get the user's response from reCAPTCHA

        if (response.length === 0) {
            // No response from reCAPTCHA
            alert("Please complete the reCAPTCHA.");
            return false;
        } else {
            return true;
        }
    }
	</script>

</body>

</html>
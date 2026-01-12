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
                    <div style="color: #666666; font-size: 14px; line-height: 16px;">CALL US</div>
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:04714712800">04714712800</a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 my-auto">
                <div class="d-flex align-items-center gap-2">
                  <div class="header_icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="header-widget">
                    <div style="color: #666666; font-size: 14px; line-height: 16px;">LOCATION</div>
                    <div style="font-size: 14px; font-weight: 600;">Anayara P.O, Trivandrum, Kerala</div>
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
              <li><a href="#about" class="anchor-menu">About Us</a></li>
              <li><a href="#speciality" class="anchor-menu">Our Specialities</a></li>
              <li><a href="#conditionTreatment" class="anchor-menu">Conditions & Treatments</a></li>
              <li><a href="#expert" class="anchor-menu">Our Experts</a></li>
              <li><a href="#testimonial" class="anchor-menu">Testimonials</a></li>
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
      <img src="image/mobile-banner.jpg" alt="" class="img-fluid w-100 d-lg-none d-md-block d-block">
      <div class="container formSection ">
        <div class="row">
          <div class="col-lg-7">
            <div class="h-100"></div>
          </div>
          <div class="col-lg-5">
            <div class="banner-form">
              <!-- <h6></h6> -->
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold text-color fs-6"><a href="tel:04714712800">04714712800</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post"  onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Nephrology">
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

    <section class="section about-section pt-60" id="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6 col-md-6 mb-lg-0 mb-3">
            <div class="sec-title">
              <h2>KIMSHEALTH Nephrology Institute</h2>
              <p>One Of The Best Nephro Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH in Kerala is a renowned center for nephrology, offering comprehensive care for
                kidney-related disorders. The department is equipped with state-of-the-art facilities and a team of
                highly skilled nephrologists, urologists, transplant surgeons, and dialysis technicians. Our services
                include diagnosis and management of kidney diseases, hypertension-related kidney disorders, kidney
                transplants, dialysis (hemodialysis and peritoneal dialysis), and preventive nephrology care. The centre
                is known for its advanced dialysis units, including facilities for continuous renal replacement therapy
                (CRRT) and kidney transplant programs that adhere to international standards. Patients benefit from
                personalized treatment plans, multidisciplinary care, and ongoing support to manage kidney health and
                improve overall quality of life.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/A4gtgVFZoBk"
                  title="A success story of kidney transplant at KIMSHEALTH" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/jTPJWlg94PY"
                  title="Kidney Transplant" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/GDpWdMoXbqQ"
                  title="കിഡ്നി മാറ്റിവയ്ക്കൽ  ശസ്ത്രക്രിയയുടെ വിജയത്തെ കുറിച്ച് ഡോക്ടർ വിശദീകരിക്കുന്നു"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/JnG3yAwCeSc"
                  title="When is the best time to get a transplant and how long does the transplanted kidney last?|Dr. Satish"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section speciality-section" id="speciality">
      <div class="container">
        <div class="text-center gray_bg outer-box-speciality">
          <div class="sec-title">
            <h2>Our Specialities</h2>
            <p>Specialized Care For Nephro-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pediatric Urology</h5>
                        <div class="under-line"></div>
                        <p> Specializes in diagnosing and treating urinary and genital issues in children, including
                          congenital abnormalities, bedwetting, and urinary tract infections.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Urologic Oncology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnosing and treating cancers of the urinary tract and male reproductive system,
                          such as bladder and prostate cancers.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Female Urology</h5>
                        <div class="under-line"></div>
                        <p>Addresses urinary tract disorders unique to women, including urinary incontinence, pelvic
                          organ prolapse, and recurrent urinary tract infections.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Neurourology</h5>
                        <div class="under-line"></div>
                        <p>Deals with urinary tract problems related to neurological conditions like spinal cord injury
                          or multiple sclerosis, managing issues such as neurogenic bladder.</p>
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

    <section class="section condition-treatment condition-bg" id="conditionTreatment">
      <div class="container">
        <div class="sec-title">
          <h2>Conditions and Treatments</h2>
          <p>Unwavering Healthcare Excellence, Every Time.</p>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#diseases" data-bs-toggle="tab">Diseases</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#treatment" data-bs-toggle="tab">Treatments</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="diseases">
                  <div class="owl-carousel owl-theme condition-slider dots-morphing">
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Chronic Kidney Disease (CKD)</h2>
                          <div class="span-line"></div>
                          <p>A progressive condition where kidney function gradually declines over time, often leading
                            to complications such as high blood pressure, anemia, and bone disease.</p>
                          <p class="full-details d-none">A progressive condition where kidney function gradually
                            declines over time, often leading to complications such as high blood pressure, anemia, and
                            bone disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Acute Kidney Injury (AKI)</h2>
                          <div class="span-line"></div>
                          <p>Sudden loss of kidney function, usually resulting from conditions such as dehydration,
                            severe infection, or medication side effects.</p>
                          <p class="full-details d-none">Sudden loss of kidney function, usually resulting from
                            conditions such as dehydration, severe infection, or medication side effects.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Polycystic Kidney Disease (PKD)</h2>
                          <div class="span-line"></div>
                          <p>A genetic disorder characterized by the growth of numerous cysts in the kidneys, which can
                            lead to kidney failure over time.</p>
                          <p class="full-details d-none">A genetic disorder characterized by the growth of numerous
                            cysts in the kidneys, which can lead to kidney failure over time.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Glomerulonephritis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the glomeruli, the tiny blood vessels in the kidneys that filter waste and
                            excess fluid from the blood, leading to kidney damage and impaired function.</p>
                          <p class="full-details d-none">Inflammation of the glomeruli, the tiny blood vessels in the
                            kidneys that filter waste and excess fluid from the blood, leading to kidney damage and
                            impaired function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Kidney Stones (Nephrolithiasis)</h2>
                          <div class="span-line"></div>
                          <p>Hard deposits of minerals and salts that form in the kidneys and can cause severe pain when
                            they pass through the urinary tract.</p>
                          <p class="full-details d-none">Hard deposits of minerals and salts that form in the kidneys
                            and can cause severe pain when they pass through the urinary tract.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Urinary Tract Infections (UTIs)</h2>
                          <div class="span-line"></div>
                          <p>Infections of the urinary tract, including the kidneys, bladder, and urethra, often caused
                            by bacteria and leading to symptoms such as pain, burning during urination, and frequent
                            urination.</p>
                          <p class="full-details d-none">Infections of the urinary tract, including the kidneys,
                            bladder, and urethra, often caused by bacteria and leading to symptoms such as pain, burning
                            during urination, and frequent urination.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hydronephrosis</h2>
                          <div class="span-line"></div>
                          <p>Swelling of the kidney due to a build-up of urine caused by blockage of the urinary tract,
                            leading to symptoms such as flank pain, urinary tract infections, and kidney damage.</p>
                          <p class="full-details d-none">Swelling of the kidney due to a build-up of urine caused by
                            blockage of the urinary tract, leading to symptoms such as flank pain, urinary tract
                            infections, and kidney damage.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Nephrotic Syndrome</h2>
                          <div class="span-line"></div>
                          <p>A group of symptoms including proteinuria (excessive protein in the urine), edema
                            (swelling), hypoalbuminemia (low levels of albumin in the blood), and hyperlipidemia (high
                            levels of fats in the blood), often caused by damage to the glomeruli.</p>
                          <p class="full-details d-none">A group of symptoms including proteinuria (excessive protein in
                            the urine), edema (swelling), hypoalbuminemia (low levels of albumin in the blood), and
                            hyperlipidemia (high levels of fats in the blood), often caused by damage to the glomeruli.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="tab-pane" id="treatment">
                  <div class="owl-carousel owl-theme condition-slider dots-morphing">
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Renal Transplantation</h2>
                          <div class="span-line"></div>
                          <p>Renal transplantation is a surgical procedure where a healthy kidney from a donor is
                            transplanted into a recipient with kidney failure, offering improved quality of life.</p>
                          <p class="full-details d-none">Renal transplantation is a surgical procedure where a healthy
                            kidney from a donor is transplanted into a recipient with kidney failure, offering improved
                            quality of life.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>CKD</h2>
                          <div class="span-line"></div>
                          <p>Chronic Kidney Disease (CKD) is a progressive condition where kidney function declines over
                            time, often leading to complications such as high blood pressure and cardiovascular disease.
                          </p>
                          <p class="full-details d-none">Chronic Kidney Disease (CKD) is a progressive condition where
                            kidney function declines over time, often leading to complications such as high blood
                            pressure and cardiovascular disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Pancreas & Kidney Transplant</h2>
                          <div class="span-line"></div>
                          <p>A combined pancreas and kidney transplant is a surgical procedure performed to treat
                            diabetes and kidney failure simultaneously, offering patients improved insulin production
                            and kidney function.</p>
                          <p class="full-details d-none">A combined pancreas and kidney transplant is a surgical
                            procedure performed to treat diabetes and kidney failure simultaneously, offering patients
                            improved insulin production and kidney function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Hemodialysis</h2>
                          <div class="span-line"></div>
                          <p>Hemodialysis is a treatment for kidney failure that involves filtering waste products and
                            excess fluid from the blood using a dialysis machine, typically performed several times a
                            week in a clinical setting.</p>

                          <p class="full-details d-none">Hemodialysis is a treatment for kidney failure that involves
                            filtering waste products and excess fluid from the blood using a dialysis machine, typically
                            performed several times a week in a clinical setting.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Peritoneal dialysis</h2>
                          <div class="span-line"></div>
                          <p>Peritoneal dialysis is a treatment for kidney failure that involves using the lining of the
                            abdomen (peritoneum) as a natural filter to remove waste products and excess fluid from the
                            body, often performed at home.</p>
                          <p class="full-details d-none">Peritoneal dialysis is a treatment for kidney failure that
                            involves using the lining of the abdomen (peritoneum) as a natural filter to remove waste
                            products and excess fluid from the body, often performed at home.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Hemodiafiltration</h2>
                          <div class="span-line"></div>
                          <p>A hemodiafiltration is an advanced form of hemodialysis that combines the principles of
                            hemodialysis and hemofiltration, offering improved removal of waste products and toxins from
                            the blood.</p>
                          <p class="full-details d-none">A hemodiafiltration is an advanced form of hemodialysis that
                            combines the principles of hemodialysis and hemofiltration, offering improved removal of
                            waste products and toxins from the blood.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>AV fistula formation</h2>
                          <div class="span-line"></div>
                          <p>AV fistula formation is a surgical procedure to create a connection between an artery and a
                            vein in the arm, providing long-term access to hemodialysis treatments in patients with
                            kidney failure.</p>
                          <p class="full-details d-none">AV fistula formation is a surgical procedure to create a
                            connection between an artery and a vein in the arm, providing long-term access to
                            hemodialysis treatments in patients with kidney failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Urinalysis</h2>
                          <div class="span-line"></div>
                          <p>Urinalysis is a diagnostic test that examines the physical, chemical, and microscopic
                            properties of urine to assess kidney function and detect abnormalities such as infections or
                            kidney disease.</p>
                          <p class="full-details d-none">Urinalysis is a diagnostic test that examines the physical,
                            chemical, and microscopic properties of urine to assess kidney function and detect
                            abnormalities such as infections or kidney disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
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

    <section class="section section-bg" id="expert">
      <div class="container">
        <div class="sec-title">
          <h2>Our Experts</h2>
          <p>Expert Team Ensuring Superior Patient Care.</p>
        </div>

        <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-satheesh.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Satish Balan</h3>
              <p>Consultant</p>
              <h4>DM , DNB </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-praveen-muraleedharan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Praveen Murlidharan</h3>
              <p>Medical Superintendent & Senior Consultant </p>
              <h4>MD, DM, DNB, MBBS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_vinayak.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinayak M</h3>
              <p>Consultant</p>
              <h4>ESE Nephrology, MD, DM, DNB, MBBS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_prasad_nair.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Prasad Nair</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, MRCP, FRCP (London) </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- testimonials -->
    <section class="section testimonial-section testimonial-bg" id="testimonial">
      <div class="container">
        <div class="sec-title">
          <h2>Testimonials</h2>
          <p>The Voice of Our Patients!</p>
        </div>
        <div class="owl-carousel owl-theme mb-0 testimonial-slider dots-morphing mt-5">
          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Naveena </h3>
                <p>Trivandrum, India</p>
              </div>
              <div class="ms-3 rating">
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
              </div>
            </div>
            <div class="testimonial-person">
              <img src="image/woman.png" alt="" class="img-dluid">
            </div>
            <p>Dr. Satish Balan's expertise and compassionate care at KIMSHEALTH Trivandrum were invaluable in my
              kidney treatment, providing thorough guidance and support throughout. Highly recommended for nephrology
              care."</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Bernard Bewesy </h3>
                <p>Rockford, UK</p>
              </div>
              <div class="ms-3 rating">
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
                <i class="fa-solid fa-star text-color-primary"></i>
              </div>
            </div>
            <div class="testimonial-person">
              <img src="image/woman.png" alt="" class="img-dluid">
            </div>
            <p>Dr. Vinayak M's exceptional expertise and compassionate care at KIMSHEALTH were instrumental in my
              nephrology treatment, providing thorough guidance and support throughout. Highly recommended for kidney
              health.</p>
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
                <span>What is nephrology?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Nephrology is the branch of medicine that focuses on the study and treatment of kidney diseases.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What are common kidney diseases?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common kidney diseases include chronic kidney disease, kidney stones, urinary tract infections, and
                  glomerulonephritis.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What are the symptoms of kidney problems?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Symptoms may include changes in urine output, swelling in the ankles or face, fatigue, nausea, and
                  high blood pressure.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What are the early signs of kidney disease?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Early signs of kidney disease may include changes in urination (frequency, color, and volume),
                  swelling in the legs or ankles, fatigue, nausea, and changes in appetite.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How often should kidney function be monitored?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Kidney function should be monitored regularly, especially for individuals with risk factors for
                  kidney disease, as early detection and treatment can help slow or prevent progression.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>How are kidney diseases diagnosed?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Diagnosis typically involves urine tests, blood tests, imaging studies like ultrasounds or CT scans,
                  and sometimes kidney biopsies.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>When do I need to see a Nephrologist?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>See a nephrologist for symptoms like changes in urination, swelling, fatigue, or uncontrolled blood
                  pressure, especially with kidney disease, diabetes, or high blood pressure history. Also, consider
                  family history or abnormal kidney function tests.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="footer">
    <div class="container pt-3 pb-lg-2 pb-5">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright © 2024. KIMSHOSPITAL. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

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

  <div class="sticky-bar">
    <a href="tel:04714712800"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
  </div>

  <!-- jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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
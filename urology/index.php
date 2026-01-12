<?php
session_start();

// Define available operations
$operators = ['+', '-', '*', '/'];
$operator = $operators[array_rand($operators)];

// Generate numbers based on operator
switch ($operator) {
    case '+':
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $answer = $num1 + $num2;
        break;
    case '-':
        $num1 = rand(10, 30);
        $num2 = rand(1, $num1); // Ensure non-negative result
        $answer = $num1 - $num2;
        break;
    case '*':
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $answer = $num1 * $num2;
        break;
    case '/':
        $num2 = rand(1, 10);
        $answer = rand(1, 10);
        $num1 = $num2 * $answer; // Ensure clean division
        break;
}

// Store the answer in session
$_SESSION['captcha_answer'] = $answer;
$_SESSION['captcha_question'] = "$num1 $operator $num2";
?>

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
              <form action="mailer.php" method="post" >
                <input type="hidden" name="speciality" value="Urology">
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
                  <div class="col-lg-12 input-group mb-3">
											
						<label>Solve: <strong><?php echo $_SESSION['captcha_question']; ?> =</strong> </label>
    					<input type="text" name="captcha" class="form-control" required>
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
              <h2>KIMSHEALTH Urology Institute</h2>
              <p>One Of The Best Urology Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>The Urology department at KIMSHEALTH provides a one-stop solution to diseases related to the urinary
                tract, whether it is cancer, prostate-related issues, stones, birth defects, neurologic afflictions of
                the urinary tract, pediatric urologic problems, etc. The urology experts at KIMSHEALTH are also adept in
                managing problems related to the sexual and reproductive functions of men. KIMSHEALTH is one of the few
                hospitals in the state with a urogynaecology clinic that deals with urinary problems in women. Our
                doctors use innovative medical technology to perform surgeries and minimally invasive procedures to
                treat their patients with a wide variety of urologic problems. KIMSHEALTH takes pride in providing
                quality healthcare with compassion and competence.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/3HoxcaIhQ2U"
                  title="Prostate Disease Management" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/t0Kd_dj-4Vo"
                  title="Are there any long term consequences of having a kidney stone?| Dr. Renu Thomas | KIMS Hospital"
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
            <p>Specialized Care For Kidney-Related Conditions, Diagnostics, and Treatments.</p>
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
                        <p>Specializes in diagnosing and treating urinary and genital issues in children, including
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
                        <h5>Neurourology: </h5>
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
                          <h2>Urinary incontinence</h2>
                          <div class="span-line"></div>
                          <p>Urinary incontinence is the involuntary leakage of urine. It can result from weakened
                            pelvic floor muscles, nerve damage, or underlying medical conditions, leading to
                            difficulties controlling urine flow and impacting quality of life.</p>
                          <p class="full-details d-none">Urinary incontinence is the involuntary leakage of urine. It
                            can result from weakened pelvic floor muscles, nerve damage, or underlying medical
                            conditions, leading to difficulties controlling urine flow and impacting quality of life.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Erectile dysfunction</h2>
                          <div class="span-line"></div>
                          <p>Erectile dysfunction is the inability to achieve or maintain an erection sufficient for
                            sexual intercourse. It can be caused by physical factors such as vascular disease, or
                            diabetes, or psychological factors like stress or anxiety.</p>
                          <p class="full-details d-none">Erectile dysfunction is the inability to achieve or maintain an
                            erection sufficient for sexual intercourse. It can be caused by physical factors such as
                            vascular disease, or diabetes, or psychological factors like stress or anxiety.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Urinary Tract Infections</h2>
                          <div class="span-line"></div>
                          <p>Urinary tract infections (UTIs) occur when bacteria enter the urinary tract, leading to
                            inflammation and infection. Symptoms include frequent urination, a burning sensation during
                            urination, and cloudy or bloody urine. Treatment typically involves antibiotics.</p>
                          <p class="full-details d-none">Urinary tract infections (UTIs) occur when bacteria enter the
                            urinary tract, leading to inflammation and infection. Symptoms include frequent urination, a
                            burning sensation during urination, and cloudy or bloody urine. Treatment typically involves
                            antibiotics.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Enlarged prostate</h2>
                          <div class="span-line"></div>
                          <p>An enlarged prostate, or benign prostatic hyperplasia (BPH), is a common condition in aging
                            men. It can cause urinary symptoms such as frequent urination, weak urine stream, and
                            difficulty emptying the bladder due to the prostate pressing against the urethra.</p>
                          <p class="full-details d-none">An enlarged prostate, or benign prostatic hyperplasia (BPH), is
                            a common condition in aging men. It can cause urinary symptoms such as frequent urination,
                            weak urine stream, and difficulty emptying the bladder due to the prostate pressing against
                            the urethra.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Kidney stones</h2>
                          <div class="span-line"></div>
                          <p>Kidney stones are hard deposits that form in the kidneys and can cause severe pain when
                            they pass through the urinary tract. They are often caused by dehydration, a diet high in
                            certain minerals, or underlying medical conditions.</p>
                          <p class="full-details d-none">Kidney stones are hard deposits that form in the kidneys and
                            can cause severe pain when they pass through the urinary tract. They are often caused by
                            dehydration, a diet high in certain minerals, or underlying medical conditions.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Overactive bladder</h2>
                          <div class="span-line"></div>
                          <p>Overactive bladder is a condition characterized by a sudden, strong urge to urinate, often
                            accompanied by urinary frequency and urgency. It can disrupt daily activities and quality of
                            life, but treatment options are available, including medication and bladder training.</p>
                          <p class="full-details d-none">Overactive bladder is a condition characterized by a sudden,
                            strong urge to urinate, often accompanied by urinary frequency and urgency. It can disrupt
                            daily activities and quality of life, but treatment options are available, including
                            medication and bladder training.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Prostate cancer</h2>
                          <div class="span-line"></div>
                          <p>Prostate cancer is cancer that develops in the prostate gland, a walnut-sized organ in men.
                            It may cause urinary symptoms, erectile dysfunction, or have no symptoms in the early
                            stages. Treatment options include surgery, radiation therapy, and hormone therapy.</p>
                          <p class="full-details d-none">Prostate cancer is cancer that develops in the prostate gland,
                            a walnut-sized organ in men. It may cause urinary symptoms, erectile dysfunction, or have no
                            symptoms in the early stages. Treatment options include surgery, radiation therapy, and
                            hormone therapy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Prostatitis</h2>
                          <div class="span-line"></div>
                          <p>Prostatitis is inflammation of the prostate gland, often caused by bacterial infection.
                            Symptoms may include pain or discomfort in the pelvic area, difficulty urinating, and
                            flu-like symptoms. Treatment depends on the underlying cause and may include antibiotics and
                            pain management.</p>
                          <p class="full-details d-none">Prostatitis is inflammation of the prostate gland, often caused
                            by bacterial infection. Symptoms may include pain or discomfort in the pelvic area,
                            difficulty urinating, and flu-like symptoms. Treatment depends on the underlying cause and
                            may include antibiotics and pain management.</p>
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
                          <h2>Prostate Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Prostate surgeries involve procedures to treat conditions like benign prostatic hyperplasia
                            (BPH) or prostate cancer. Common surgeries include transurethral resection of the prostate
                            (TURP) or robotic-assisted prostatectomy, aimed at relieving urinary symptoms or removing
                            cancerous tissue.</p>
                          <p class="full-details d-none">Prostate surgeries involve procedures to treat conditions like
                            benign prostatic hyperplasia (BPH) or prostate cancer. Common surgeries include
                            transurethral
                            resection of the prostate (TURP) or robotic-assisted prostatectomy, aimed at relieving
                            urinary
                            symptoms or removing cancerous tissue.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Kidney Stones</h2>
                          <div class="span-line"></div>
                          <p>Kidney stone procedures involve treatments to break down or remove kidney stones, such as
                            lithotripsy, ureteroscopy, or percutaneous nephrolithotomy. These procedures aim to
                            alleviate
                            pain and prevent complications associated with kidney stones.</p>
                          <p class="full-details d-none">Kidney stone procedures involve treatments to break down or
                            remove kidney stones, such as lithotripsy, ureteroscopy, or percutaneous nephrolithotomy.
                            These procedures aim to alleviate pain and prevent complications associated with kidney
                            stones.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Urogynec Procedures</h2>
                          <div class="span-line"></div>
                          <p>Urogynecologic procedures address pelvic floor disorders in women, including pelvic organ
                            prolapse or urinary incontinence. Surgeries like pelvic organ prolapse repair or
                            mid-urethral
                            sling placement aim to restore pelvic support and improve bladder control.</p>
                          <p class="full-details d-none">Urogynecologic procedures address pelvic floor disorders in
                            women, including pelvic organ prolapse or urinary incontinence. Surgeries like pelvic organ
                            prolapse repair or mid-urethral sling placement aim to restore pelvic support and improve
                            bladder control.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Andrology</h2>
                          <div class="span-line"></div>
                          <p>Andrology encompasses medical and surgical treatments for male reproductive health issues,
                            such as erectile dysfunction, male infertility, or Peyronie's disease. Surgeries may include
                            penile prosthesis implantation or varicocele repair to restore fertility or sexual function.
                          </p>
                          <p class="full-details d-none">Andrology encompasses medical and surgical treatments for male
                            reproductive health issues, such as erectile dysfunction, male infertility, or Peyronie's
                            disease. Surgeries may include penile prosthesis implantation or varicocele repair to
                            restore
                            fertility or sexual function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Female Urinary Incontinence - TVT / TVTO</h2>
                          <div class="span-line"></div>
                          <p>Tension-free vaginal tape (TVT) or tension-free vaginal tape obturator (TVTO) procedures
                            are
                            surgical treatments for female urinary incontinence. These minimally invasive surgeries
                            involve placing a mesh sling to support the urethra and improve bladder control, reducing
                            urinary leakage.</p>
                          <p class="full-details d-none">Tension-free vaginal tape (TVT) or tension-free vaginal tape
                            obturator (TVTO) procedures are surgical treatments for female urinary incontinence. These
                            minimally invasive surgeries involve placing a mesh sling to support the urethra and improve
                            bladder control, reducing urinary leakage.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Cystoscopy</h2>
                          <div class="span-line"></div>
                          <p>Cystoscopy is a procedure to examine the bladder and urethra using a thin tube with a
                            camera.
                            It helps diagnose urinary tract conditions such as bladder tumors or urethral blockages.</p>
                          <p class="full-details d-none">Cystoscopy is a procedure to examine the bladder and urethra
                            using a thin tube with a camera. It helps diagnose urinary tract conditions such as bladder
                            tumors or urethral blockages.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Vasectomy</h2>
                          <div class="span-line"></div>
                          <p>Vasectomy is a surgical procedure for male sterilization, involving the cutting or sealing
                            of
                            the vas deferens to prevent sperm from reaching semen, thus rendering the person permanently
                            unable to father children.</p>
                          <p class="full-details d-none">Vasectomy is a surgical procedure for male sterilization,
                            involving the cutting or sealing of the vas deferens to prevent sperm from reaching semen,
                            thus rendering the person permanently unable to father children.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Ureteroscopy</h2>
                          <div class="span-line"></div>
                          <p>Ureteroscopy is a minimally invasive procedure to examine and treat the ureter and kidneys
                            using a thin, flexible tube with a camera. It's used to diagnose and remove kidney stones or
                            treat other urinary tract conditions.</p>
                          <p class="full-details d-none">Ureteroscopy is a minimally invasive procedure to examine and
                            treat the ureter and kidneys using a thin, flexible tube with a camera. It's used to
                            diagnose
                            and remove kidney stones or treat other urinary tract conditions.</p>
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
              <img src="image/dr-renu-thomas.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Renu Thomas</h3>
              <p>Senior Consultant and Coordinator</p>
              <h4>MBBS, MS (General Surgery), DNB ( General Surgery), MCh ( Urology)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-shyam-k-ramesh.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Syam K Ramesh</h3>
              <p>Hon. Senior Consultant</p>
              <h4>MBBS, M S (General Surgery), M.Ch (Urology)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-sudhin.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sudin S R</h3>
              <p>Consultant</p>
              <h4>MBBS, MS (General Surgery), MCh (Urology)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_nithya_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Nithya R</h3>
              <p>Consultant</p>
              <h4>MBBS, MS (ENT), Government Medical College, Vadodara, DNB, National Board of Examination, New Delhi,
                Post Doctoral Fellowship in Pediatric ENT in CMC Vellore</h4>
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
            <p>Dr. Syam K Ramesh at KIMSHEALTH provides outstanding urological care. His expertise and compassionate
              approach inspire confidence and comfort, earning him a high recommendation for urology services.</p>
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
            <p>Dr. Renu Thomas, a urology specialist at KIMSHEALTH Trivandrum, delivers exemplary care. Her expertise
              and compassionate approach ensure patients feel confident and comfortable throughout their treatment.
              Highly recommended.</p>
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
            <p>I found the urology department at KIMSHEALTH Trivandrum to be exceptional. The specialists offered
              thorough care, and their patient-centered approach ensured I felt well-supported during my treatment. I
              highly recommend their services.</p>
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
                <span>What is urology?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Urology is the medical specialty focused on diagnosing and treating disorders of the urinary tract
                  and male reproductive system.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What conditions do urologists treat?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Urologists treat a wide range of conditions, including urinary tract infections, kidney stones,
                  prostate problems, erectile dysfunction, and urinary incontinence.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What happens during a urological exam?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>A urological exam may involve a physical examination, urine tests, imaging studies like ultrasounds
                  or CT scans, and specialized tests such as cystoscopy or urodynamic testing.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What causes urinary tract infections (UTIs)?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                  UTIs are typically caused by bacteria entering the urinary tract through the urethra and multiplying
                  in the bladder. Factors such as sexual activity, urinary catheterization, or certain medical
                  conditions can increase the risk of UTIs.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>Can urinary tract infections (UTIs) be prevented?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>UTIs can often be prevented by staying hydrated, practicing good hygiene, urinating after
                  intercourse, and avoiding irritating substances like perfumed products or harsh soaps.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>What should I expect during treatment for urological conditions?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Treatment for urological conditions will depend on the specific diagnosis but may include medication,
                  lifestyle changes, minimally invasive procedures, or surgery. Your urologist will discuss the best
                  treatment plan for your individual needs.</p>
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
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
                <input type="hidden" name="speciality" value="Gynecology">
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
              <h2>KIMSHEALTH Gynaecology Institute</h2>
              <p>One Of The Best Gynae Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>The KIMSHEALTH Department of Obstetrics and Gynecology encompasses two vital sub-specialties:
                Obstetrics, which covers pregnancy care, childbirth, and the subsequent postpartum period, and
                Gynecology, providing comprehensive healthcare for the female reproductive system. Our team of doctors,
                known for their expertise and compassion, ensures the highest quality care for mothers and babies. With
                a focus on personalized attention and advanced medical technologies, KIMSHEALTH Obstetrics and
                Gynecology stands as a premier center for women's health. From prenatal consultations to labor and
                delivery support and routine gynecological screenings to complex surgeries, we are committed to
                providing comprehensive and compassionate care to every patient we serve. </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/lJgMk7KddZ4"
                  title="KIMSHEALTH Centre for Mother and Baby" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/mNbofTWhscc"
                  title="What are the symptoms of a high risk pregnancy | Dr. Vidyalekshmi R. | KIMS Hospital"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/6CaZeb0AZk8"
                  title="24-Week Preterm Miracle: Uma&#39;s Heartfelt Testimonial | KIMSHEALTH" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/VQ3PDVxgBt8"
                  title="വന്ധ്യത ഒരു രോഗമായി കാണേണ്ടതില്ല! Infertility | Fertility Issues | KIMSHEALTH" frameborder="0"
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
            <p>Specialized Care For Gynae-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Gynaecological Oncology</h5>
                        <div class="under-line"></div>
                        <p>Specializes in diagnosing and treating cancers of the female reproductive system, such as
                          ovarian and cervical cancer.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Maternal and Foetal Medicine</h5>
                        <div class="under-line"></div>
                        <p>Focuses on the health of pregnant women and their unborn babies, managing high-risk
                          pregnancies.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Reproductive Medicine</h5>
                        <div class="under-line"></div>
                        <p>Deals with fertility issues and reproductive health, offering treatments like IVF, IUI, and
                          hormone therapy.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Urogynaecology</h5>
                        <div class="under-line"></div>
                        <p>Addresses pelvic floor disorders and urinary incontinence in women, providing surgical and
                          non-surgical treatments for bladder and pelvic organ prolapse.</p>
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
                          <h2>Endometriosis</h2>
                          <div class="span-line"></div>
                          <p>Tissue similar to uterine lining grows outside the uterus, causing pain and possible
                            infertility. Treatment options include medication, surgery, or assisted reproductive
                            technologies.</p>
                          <p class="full-details d-none">Tissue similar to uterine lining grows outside the uterus,
                            causing pain and possible infertility. Treatment options include medication, surgery, or
                            assisted reproductive technologies.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Polycystic Ovary Syndrome (PCOS)</h2>
                          <div class="span-line"></div>
                          <p>Hormonal disorder causing enlarged ovaries with cysts, irregular periods, and potential
                            infertility. Management focuses on symptom relief and improving fertility.</p>
                          <p class="full-details d-none">Hormonal disorder causing enlarged ovaries with cysts,
                            irregular periods, and potential infertility. Management focuses on symptom relief and
                            improving fertility.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Fibroids</h2>
                          <div class="span-line"></div>
                          <p>Noncancerous uterine growths lead to heavy bleeding, pelvic pain, and pressure on nearby
                            organs. Treatment varies based on symptoms and patient preferences.</p>
                          <p class="full-details d-none">Noncancerous uterine growths lead to heavy bleeding, pelvic
                            pain, and pressure on nearby organs. Treatment varies based on symptoms and patient
                            preferences.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Pelvic Inflammatory Disease (PID)</h2>
                          <div class="span-line"></div>
                          <p>Infection of female reproductive organs causes pelvic pain and fertility issues. Treatment
                            involves antibiotics and addressing underlying causes like sexually transmitted infections.
                          </p>
                          <p class="full-details d-none">Infection of female reproductive organs causes pelvic pain and
                            fertility issues. Treatment involves antibiotics and addressing underlying causes like
                            sexually transmitted infections.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Ovarian Cysts</h2>
                          <div class="span-line"></div>
                          <p>Fluid-filled sacs on ovaries cause pelvic pain, bloating, and menstrual changes. Treatment
                            depends on size, symptoms, and risk of complications.</p>
                          <p class="full-details d-none">Fluid-filled sacs on ovaries cause pelvic pain, bloating, and
                            menstrual changes. Treatment depends on size, symptoms, and risk of complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Vaginal Infections</h2>
                          <div class="span-line"></div>
                          <p>Yeast infections, bacterial vaginosis, and trichomoniasis cause itching, burning, and
                            abnormal discharge. Treatment includes antifungal or antibacterial medications.</p>
                          <p class="full-details d-none">Yeast infections, bacterial vaginosis, and trichomoniasis cause
                            itching, burning, and abnormal discharge. Treatment includes antifungal or antibacterial
                            medications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Menstrual Disorders</h2>
                          <div class="span-line"></div>
                          <p>Irregular periods, heavy bleeding (menorrhagia), and absence of menstruation (amenorrhea)
                            require evaluation for underlying causes and may be managed with medication or hormonal
                            therapy.</p>
                          <p class="full-details d-none">Irregular periods, heavy bleeding (menorrhagia), and absence of
                            menstruation (amenorrhea) require evaluation for underlying causes and may be managed with
                            medication or hormonal therapy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Urinary Incontinence</h2>
                          <div class="span-line"></div>
                          <p>Involuntary urine leakage, often due to weakened pelvic floor muscles or hormonal changes.
                            Treatment includes pelvic floor exercises, medications, or surgical procedures.</p>
                          <p class="full-details d-none">Involuntary urine leakage, often due to weakened pelvic floor
                            muscles or hormonal changes. Treatment includes pelvic floor exercises, medications, or
                            surgical procedures.</p>
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
                          <h2>IVF</h2>
                          <div class="span-line"></div>
                          <p>IVF (In Vitro Fertilization) is a fertility treatment where eggs are fertilized outside the
                            body and then implanted into the uterus. It offers hope to couples struggling with
                            infertility by facilitating conception through assisted reproductive technology.</p>
                          <p class="full-details d-none">IVF (In Vitro Fertilization) is a fertility treatment where
                            eggs are fertilized outside the body and then implanted into the uterus. It offers hope to
                            couples struggling with infertility by facilitating conception through assisted reproductive
                            technology.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>MI Gynec Surgeries </h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive gynecological surgeries employ advanced techniques to address various
                            conditions, such as hysterectomy, cystocele repair, and myomectomy, ensuring effective
                            treatment with reduced recovery time and minimized complications.</p>
                          <p class="full-details d-none">Minimally invasive gynecological surgeries employ advanced
                            techniques to address various conditions, such as hysterectomy, cystocele repair, and
                            myomectomy, ensuring effective treatment with reduced recovery time and minimized
                            complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hysterectomy</h2>
                          <div class="span-line"></div>
                          <p>Hysterectomy, a common gynecological procedure, involves the surgical removal of the
                            uterus. It may be performed for various reasons, including treating cancer, fibroids, or
                            persistent pelvic pain.</p>
                          <p class="full-details d-none">Hysterectomy, a common gynecological procedure, involves the
                            surgical removal of the uterus. It may be performed for various reasons, including treating
                            cancer, fibroids, or persistent pelvic pain.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Cystocele Repair </h2>
                          <div class="span-line"></div>
                          <p>Cystocele repair is a surgical procedure aimed at correcting a cystocele, a condition where
                            the bladder protrudes into the vagina. It restores pelvic support, relieving symptoms such
                            as urinary incontinence and pelvic pressure.</p>
                          <p class="full-details d-none">Cystocele repair is a surgical procedure aimed at correcting a
                            cystocele, a condition where the bladder protrudes into the vagina. It restores pelvic
                            support, relieving symptoms such as urinary incontinence and pelvic pressure.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Prolapse Repair </h2>
                          <div class="span-line"></div>
                          <p>Prolapse repair surgery aims to correct pelvic organ prolapse, restoring the organs to
                            their proper position. It addresses symptoms like pelvic pressure and urinary incontinence,
                            improving quality of life.
                          </p>
                          <p class="full-details d-none">Prolapse repair surgery aims to correct pelvic organ prolapse,
                            restoring the organs to their proper position. It addresses symptoms like pelvic pressure
                            and urinary incontinence, improving quality of life.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Myomectomy </h2>
                          <div class="span-line"></div>
                          <p>It is a surgical procedure to remove uterine fibroids while preserving the uterus. It's
                            performed to alleviate symptoms like heavy menstrual bleeding and pelvic pain, often
                            enabling future pregnancy.</p>
                          <p class="full-details d-none">It is a surgical procedure to remove uterine fibroids while
                            preserving the uterus. It's performed to alleviate symptoms like heavy menstrual bleeding
                            and pelvic pain, often enabling future pregnancy.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>TAH | TLH </h2>
                          <div class="span-line"></div>
                          <p>Total abdominal hysterectomy (TAH) and total laparoscopic hysterectomy (TLH) are procedures
                            to remove the uterus. TAH involves open surgery, while TLH is minimally invasive, offering
                            faster recovery and fewer complications.</p>
                          <p class="full-details d-none">Total abdominal hysterectomy (TAH) and total laparoscopic
                            hysterectomy (TLH) are procedures to remove the uterus. TAH involves open surgery, while TLH
                            is minimally invasive, offering faster recovery and fewer complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Lap Ovarian </h2>
                          <div class="span-line"></div>
                          <p>Laparoscopic ovarian surgery involves minimally invasive techniques to address ovarian
                            conditions such as cysts or tumors. It offers quicker recovery and reduced scarring compared
                            to traditional open surgery methods.</p>
                          <p class="full-details d-none">Laparoscopic ovarian surgery involves minimally invasive
                            techniques to address ovarian conditions such as cysts or tumors. It offers quicker recovery
                            and reduced scarring compared to traditional open surgery methods.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>• Cystectomy</h2>
                          <div class="span-line"></div>
                          <p>Cystectomy is the surgical removal of the bladder, often performed to treat bladder cancer.
                            It may involve partial or complete removal, with reconstruction techniques employed to
                            maintain urinary function.</p>
                          <p class="full-details d-none">Cystectomy is the surgical removal of the bladder, often
                            performed to treat bladder cancer. It may involve partial or complete removal, with
                            reconstruction techniques employed to maintain urinary function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Adenomyomectomy</h2>
                          <div class="span-line"></div>
                          <p>Adenomyomectomy is a surgical procedure to remove adenomyosis-affected tissue from the
                            uterus while preserving organ function. It aims to alleviate symptoms like heavy menstrual
                            bleeding and pelvic pain.</p>
                          <p class="full-details d-none">Adenomyomectomy is a surgical procedure to remove
                            adenomyosis-affected tissue from the uterus while preserving organ function. It aims to
                            alleviate symptoms like heavy menstrual bleeding and pelvic pain.</p>
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
              <img src="image/dr-shyamala-devi.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Syamala Devi P K</h3>
              <p>Hon. Sr. Consultant</p>
              <h4>MBBS, DGO, MD</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-rafeekha.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Rafeekha P</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, DGO, DNB Obstetrics and Gynaecology, MNAMS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-roshni-ambat.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Roshini Ambat</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, DGO, MD</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_lumiya_malik_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Lumiya Malik</h3>
              <p>Consultant</p>
              <h4>MBBS, DGO, DNB Training</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vinoo-balakrishnan.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinoo Balakrishnan</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, DGO, M.D, DipNB, MRCOG The Republic of Ireland., MRCPI The Republic of Ireland, FRCOG Royal
                college of Obstetricians and Gynecologists, London, UK, MIS - Training from coombe Hospital Dublin
                Ireland</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_valsamma_chacko_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Valsamma Chacko</h3>
              <p>Hon. Sr. Consultant</p>
              <h4>MBBS, MD in Obstetrics Gynaecology, Diploma in Gynecology and Obstetrics</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-bindu-purushottaman.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Bindu Purushothaman</h3>
              <p>Consultant</p>
              <h4>Fellowship in Minimal Access Surgery (FMAS), MD(O&G), DGO, MBBS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-sajith-mohan.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sajith Mohan R</h3>
              <p>Consultant</p>
              <h4>MBBS, DNB National Board of Examination, Fellowship in Minimal Invasive surgery</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_cinu_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Cinu A Nair</h3>
              <p>-</p>
              <h4>MBBS, DGO,DNB, MNAMS, FMAS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_neetha_ravindranathan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Neeta Ravindranathan</h3>
              <p>Consultant</p>
              <h4>Bachelor of Medicine and Surgery (MBBS) - Government TD Medical College Alappuzha, Kerala – 2000,
                Diplomate of National Board (DNB) for Obstetrics & Gynaecology - National Board of Examinations New
                Delhi – 2012</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_geetha_p_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Geetha P</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, MRCOG (UK), FRCOG (UK)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_shyja_jv_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. J V Shyja</h3>
              <p>Consultant</p>
              <h4>M.B.B.S, MS, DNB (OBSTETRICS & GYNAECOLOGY)</h4>
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
            <p>Dr. Valsamma Chacko specializes in obstetrics and gynecology. Her exceptional expertise, compassionate
              care, and personalized approach make her a top choice for women's health services.</p>
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
            <p>My experience with the gynecology department at KIMSHEALTH Trivandrum was exceptional. The team there was
              caring and skilled, with modern facilities focused on patient well-being. I highly recommend them for
              women's health needs.</p>
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
                <span>What is gynecology?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>It's the medical specialty focusing on women's reproductive health, covering areas like menstruation,
                  pregnancy, fertility, and menopause.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>When should I start seeing a gynecologist?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Around age 13-15 or when sexually active, for routine check-ups, contraception, or addressing any
                  concerns.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What are common gynecological conditions?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>These include menstrual irregularities, pelvic pain, infections (like yeast or bacterial vaginosis),
                  fibroids, and endometriosis.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What is a Pap smear and how often should I have one?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>It's a cervical cancer screening test recommended every 3 years for women aged 21-65, involving a
                  sample collection from the cervix.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How do I prepare for my first gynecological visit?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Bring your medical history, list of medications, and any questions or concerns you have.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer class="footer">
    <div class="container pt-3 pb-2">
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
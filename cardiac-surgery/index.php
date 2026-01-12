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
              <div class="col-lg-4 col-md-4 text-end">
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
                <span class="text-lg fw-bold fs-6 text-color"><a href="tel:04714712800">04714712800</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post"  onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Cardiac Surgery">
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
              <h2>KIMSHEALTH Cardiac Surgery Institute</h2>
              <p>One Of The Best Cardiac Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>
                At KIMSHEALTH, our Cardiac Surgery department provides advanced and comprehensive care for patients
                with heart conditions. Led by a team of highly skilled surgeons and supported by state-of-the-art
                facilities, we specialize in a wide range of cardiac procedures, including coronary artery bypass
                grafting, valve repair or replacement, congenital heart defect correction, and minimally invasive
                cardiac surgery. With a focus on innovation, safety, and patient-centered care, we strive to achieve the
                best possible outcomes for our patients, restoring cardiac health and improving quality of life. We are
                known for excellence in cardiac surgery and compassionate patient care.
              </p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/Cnd0uXHiRNY"
                  title="ബൈ പാസ് സർജറിയെ കുറിച്ച് നിങ്ങൾ അറിയേണ്ടതെല്ലാം" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/TzmjZhjFOAs"
                  title="സ്കോളിയോസിസിനെ തോൽപിച്ച് വീണ്ടും ചിലങ്കയണിഞ്ഞ ഭവ്യാ വിജയൻ | Scoliosis Awareness Series"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/AEFe3xKlkYQ"
                  title="പരിരക്ഷിക്കാം സ്വന്തം ഹൃദയത്തെ" frameborder="0"
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
            <p>Specialized Care For Heart-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Cardiothoracic Surgery</h5>
                        <div class="under-line"></div>
                        <p>Focuses on surgeries of the heart, lungs, and other thoracic organs to treat complex cardiac
                          conditions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pediatric Cardiac Surgery</h5>
                        <div class="under-line"></div>
                        <p>Specializes in corrective procedures for congenital heart defects in infants, children, and
                          adolescents.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Minimally Invasive Cardiac Surgery</h5>
                        <div class="under-line"></div>
                        <p>Utilizes advanced techniques to perform heart surgeries through small incisions, reducing
                          recovery time and complications.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Transplant Cardiac Surgery</h5>
                        <div class="under-line"></div>
                        <p> Involves heart transplant procedures, replacing a diseased heart with a healthy donor heart
                          to restore cardiac function.</p>
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
                          <h2>Coronary Artery Disease (CAD)</h2>
                          <div class="span-line"></div>
                          <p>Atherosclerosis narrows coronary arteries, impairing blood flow to the heart, often
                            requiring bypass surgery or stenting to restore circulation and prevent heart attacks.</p>
                          <p class="full-details d-none">Atherosclerosis narrows coronary arteries, impairing blood flow
                            to the heart, often requiring bypass surgery or stenting to restore circulation and prevent
                            heart attacks.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Valvular Heart Disease</h2>
                          <div class="span-line"></div>
                          <p>Dysfunction of heart valves due to stenosis or regurgitation necessitates repair or
                            replacement surgeries to restore proper blood flow and prevent heart failure.</p>
                          <p class="full-details d-none">Dysfunction of heart valves due to stenosis or regurgitation
                            necessitates repair or replacement surgeries to restore proper blood flow and prevent heart
                            failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Congenital Heart Defects</h2>
                          <div class="span-line"></div>
                          <p>Structural abnormalities present at birth require surgical correction to improve heart
                            function and prevent complications, particularly in pediatric patients.</p>
                          <p class="full-details d-none">Structural abnormalities present at birth require surgical
                            correction to improve heart function and prevent complications, particularly in pediatric
                            patients.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Aortic Aneurysm</h2>
                          <div class="span-line"></div>
                          <p>Weakening of the aortic wall leads to bulging or rupture, necessitating surgical repair or
                            replacement to prevent life-threatening hemorrhage or dissection.</p>
                          <p class="full-details d-none">Weakening of the aortic wall leads to bulging or rupture,
                            necessitating surgical repair or replacement to prevent life-threatening hemorrhage or
                            dissection.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Arrhythmias</h2>
                          <div class="span-line"></div>
                          <p>Irregular heart rhythms such as atrial fibrillation may require surgical procedures like
                            ablation to restore normal cardiac rhythm and prevent stroke or heart failure.</p>
                          <p class="full-details d-none">Irregular heart rhythms such as atrial fibrillation may require
                            surgical procedures like ablation to restore normal cardiac rhythm and prevent stroke or
                            heart failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Heart Failure</h2>
                          <div class="span-line"></div>
                          <p>Severe impairment of heart function due to various causes may require surgical
                            interventions such as ventricular assist devices or heart transplantation for management.
                          </p>
                          <p class="full-details d-none">Severe impairment of heart function due to various causes may
                            require surgical interventions such as ventricular assist devices or heart transplantation
                            for management.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Cardiomyopathy</h2>
                          <div class="span-line"></div>
                          <p>Structural or functional abnormalities of the heart muscle may necessitate surgery to
                            alleviate symptoms, improve cardiac function, and prevent progression to heart failure.</p>
                          <p class="full-details d-none">Structural or functional abnormalities of the heart muscle may
                            necessitate surgery to alleviate symptoms, improve cardiac function, and prevent progression
                            to heart failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Endocarditis</h2>
                          <div class="span-line"></div>
                          <p>Infection of the heart valves or inner lining of the heart requires surgical intervention
                            to remove infected tissue, repair or replace damaged valves, and prevent systemic
                            complications.</p>
                          <p class="full-details d-none">Infection of the heart valves or inner lining of the heart
                            requires surgical intervention to remove infected tissue, repair or replace damaged valves,
                            and prevent systemic complications.</p>
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
                          <h2>Coronary Artery Bypass Grafting (CABG)</h2>
                          <div class="span-line"></div>
                          <p>Redirects blood flow around blocked coronary arteries using grafts, relieving chest pain
                            and reducing the risk of heart attack.</p>
                          <p class="full-details d-none">Redirects blood flow around blocked coronary arteries using
                            grafts, relieving chest pain and reducing the risk of heart attack.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Valve Repair/Replacement</h2>
                          <div class="span-line"></div>
                          <p>Surgical correction of dysfunctional heart valves restores proper blood flow, alleviating
                            symptoms and preventing complications like heart failure.</p>
                          <p class="full-details d-none">Surgical correction of dysfunctional heart valves restores
                            proper blood flow, alleviating symptoms and preventing complications like heart failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>VATS</h2>
                          <div class="span-line"></div>
                          <p>Video-assisted thoracic surgery (VATS) utilizes a small camera and specialized instruments
                            inserted through tiny incisions to perform lung and chest surgeries, reducing pain,
                            scarring, and recovery time compared to traditional open procedures.</p>
                          <p class="full-details d-none">Video-assisted thoracic surgery (VATS) utilizes a small camera
                            and specialized instruments inserted through tiny incisions to perform lung and chest
                            surgeries, reducing pain, scarring, and recovery time compared to traditional open
                            procedures.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Minimally invasive cardiac surgeries</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive cardiac surgeries employ small incisions and specialized instruments to
                            perform procedures like valve repair, bypass, and arrhythmia correction, resulting in
                            reduced pain, scarring, and faster recovery.</p>
                          <p class="full-details d-none">Minimally invasive cardiac surgeries employ small incisions and
                            specialized instruments to perform procedures like valve repair, bypass, and arrhythmia
                            correction, resulting in reduced pain, scarring, and faster recovery.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Atrial Septal Defect (ASD)</h2>
                          <div class="span-line"></div>
                          <p>An abnormal opening in the wall separating the heart's upper chambers, causing blood to
                            flow between them, leading to heart enlargement and increased risk of stroke.</p>
                          <p class="full-details d-none">An abnormal opening in the wall separating the heart's upper
                            chambers, causing blood to flow between them, leading to heart enlargement and increased
                            risk of stroke.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Ventricular Septal Defect (VSD)</h2>
                          <div class="span-line"></div>
                          <p>A hole in the wall between the heart's lower chambers, allowing oxygen-rich and oxygen-poor
                            blood to mix, increasing pressure in the lungs and leading to heart failure.</p>
                          <p class="full-details d-none">A hole in the wall between the heart's lower chambers, allowing
                            oxygen-rich and oxygen-poor blood to mix, increasing pressure in the lungs and leading to
                            heart failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Pacemaker Implantation</h2>
                          <div class="span-line"></div>
                          <p>An electrical device implanted in the chest regulates heart rhythm, ensuring proper cardiac
                            function and preventing bradycardia-related symptoms.</p>
                          <p class="full-details d-none">An electrical device implanted in the chest regulates heart
                            rhythm, ensuring proper cardiac function and preventing bradycardia-related symptoms.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Cardiac Ablation</h2>
                          <div class="span-line"></div>
                          <p>Procedure to destroy abnormal heart tissue causing arrhythmias, restoring normal rhythm,
                            and reducing the risk of stroke or heart failure.</p>
                          <p class="full-details d-none">Procedure to destroy abnormal heart tissue causing arrhythmias,
                            restoring normal rhythm, and reducing the risk of stroke or heart failure.</p>
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
          <!--<div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vijayaraghavan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Prof. Dr. G Vijayaraghavan</h3>
              <p>Dean-Academics Senior Consultant - Cardiology</p>
              <h4>FRCP, MD, DM, FACC</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>-->
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ramakrishna Pillai V</h3>
              <p>Director - Interventional Cardiology,
                Senior Consultant - Cardiology</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-zulfikar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. M Zulfikar Ahamed</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, DCH, DM(Cardiology), MD(Pediatrics) </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-ramesh-natarajan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ramesh Natarajan</h3>
              <p>Senior Consultant & Coordinator</p>
              <h4>MBBS, MD, DM, DNB</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ajith.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ajit Kumar VK</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_bijulal.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Bijulal S</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD General Medicine, DM Cardiology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-anees-thajudeen.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Anees Thajudeen</h3>
              <p>Senior Consultant - Cardiology and Electrophysiology</p>
              <h4>MBBS, MD General Medicine, DM Cardiology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-padmaja.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Padmaja N P</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-praveen.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Praveen S V</h3>
              <p>Senior Consultant & Heart Transplant Coordinator</p>
              <h4>MBBS, MD, DM, DNB</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-meera.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Meera R</h3>
              <p>Consultant</p>
              <h4>MBBS, MD, DNB</h4>
              <a href="#" class="btn btn-primary">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-hashir-kareem.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Hashir Kareem</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-dhinesh-david.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Dhinesh David</h3>
              <p>Consultant</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_bhavana.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Bhavana Mohandas</h3>
              <p>Consultant</p>
              <h4>MBBS, MD Internal Medicine</h4>
              <a href="#" class="btn btn-primary">Request An Appointment </a>
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
            <p>My experience at KIMS for cardiac surgery was exceptional. The skilled surgeons and caring staff provided
              personalized care, making my journey smooth and comfortable. I'm grateful for their expertise and support.
            </p>
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
            <p>Choosing KIMS for my cardiac surgery was the best decision I made. From pre-op consultations to post-op
              care, every aspect was handled with professionalism and compassion. I'm thankful for their dedication to
              my well-being.</p>
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
            <p>I cannot thank the team at KIMS enough for their outstanding care during my cardiac surgery. Their
              expertise, coupled with their warm demeanor, eased my fears and ensured a successful outcome. Highly
              recommended!</p>
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
                <span>What are the common types of cardiac surgeries?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common procedures include bypass surgery, valve repair/replacement, pacemaker implantation, and heart
                  transplant.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>How do I prepare for cardiac surgery?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Preparations involve medical evaluations, lifestyle adjustments, and discussions with your surgical
                  team regarding expectations and recovery plans.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What is the recovery process like after cardiac surgery?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Recovery involves monitored care in the hospital, followed by a period of rest at home, gradually
                  increasing activity levels under medical supervision.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>How long does it take to return to normal activities after cardiac surgery?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Recovery times vary but typically involve a few weeks to months, with a focus on gradually resuming
                  daily activities and adhering to rehabilitation guidelines.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>Will I need ongoing medication or lifestyle changes after surgery?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, medication and lifestyle adjustments such as diet and exercise are often necessary to manage
                  cardiovascular health and prevent future complications.</p>
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
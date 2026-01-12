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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Cusome css -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/responsive.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>

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
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:04714712800" class="text-black">04714712800</a></div>
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
                <a href="#bannerSection" class="btn header_btn">Book an appointment</a>
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
              <li><a href="#about" class="anchor-menu smooth-scroll" data-target="about">About Us</a></li>
              <li><a href="#speciality" class="anchor-menu smooth-scroll" data-target="speciality">Our Specialities</a></li>
              <li><a href="#conditionTreatment" class="anchor-menu smooth-scroll" data-target="conditionTreatment">Conditions & Treatments</a></li>
              <li><a href="#expert" class="anchor-menu smooth-scroll" data-target="expert">Our Experts</a></li>
              <li><a href="#testimonial" class="anchor-menu smooth-scroll" data-target="testimonial">Testimonials</a></li>
              <li><a href="#faq" class="anchor-menu smooth-scroll" data-target="faq">FAQs</a></li>
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
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold text-color fs-6"><a href="tel:04714712800" class="text-black">04714712800</a></span>
              </div>

              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post" >
                <input type="hidden" name="speciality" value="Respiratory Medicine">
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile Number"
                      pattern="[0-9]{10}" title="Should be 10 digit number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
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
              <h2>KIMSHEALTH Pulmonology Institute</h2>
              <p>One of The Best Pulmonology Hospitals in Kerala</p>
            </div>
            <div class="about-content">
              <p>The Respiratory department at KIMSHEALTH provides comprehensive care for patients with a wide range of respiratory conditions. Our team of highly skilled pulmonologists and specialists offer advanced diagnostic, therapeutic, and rehabilitative services for both acute and chronic respiratory diseases. The department specializes in the management of conditions like asthma, chronic obstructive pulmonary disease (COPD), sleep disorders, interstitial lung diseases, lung cancer, pneumonia, and bronchial disorders.</p>
              <p>At KIMSHEALTH, we use the latest technologies, including bronchoscopy, pulmonary function tests, sleep studies, and advanced imaging techniques, to ensure accurate diagnosis and effective treatment plans. We also provide pulmonary rehabilitation to improve quality of life for patients with chronic lung diseases. Additionally, our department offers critical care for patients with respiratory failure, and our team is trained in advanced interventions like mechanical ventilation and non-invasive ventilation.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/jmx2bOIXkqY"
                  title="KIMSHEALTH EAST : An Integrated Healthcare Destination" frameborder="0"
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
            <p>Specialized Care For Emergency Conditions, Diagnostics, and Treatments.</p>
          </div>

          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Interventional Pulmonology</h5>
                        <div class="under-line"></div>
                        <p>This sub-specialty focuses on using minimally invasive procedures to diagnose and treat lung conditions. Techniques like bronchoscopy and endobronchial ultrasound (EBUS) are used to manage lung cancer, airway diseases, and other respiratory conditions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Sleep Medicine</h5>
                        <div class="under-line"></div>
                        <p>Specializes in diagnosing and treating sleep-related breathing disorders, such as sleep apnea and insomnia. It involves the use of CPAP therapy and other treatments to improve sleep quality and respiratory function during sleep.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pulmonary Critical Care</h5>
                        <div class="under-line"></div>
                        <p>Focuses on managing patients with severe respiratory failure or conditions requiring intensive care. This includes acute diseases like acute respiratory distress syndrome (ARDS) and chronic conditions like COPD exacerbations, often treated in the ICU.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pediatric Pulmonology</h5>
                        <div class="under-line"></div>
                        <p>Aimed at diagnosing and managing respiratory conditions in children, such as asthma, cystic fibrosis, and bronchiolitis. Pediatric pulmonologists provide specialized care tailored to the unique needs of infants, children, and adolescents.</p>
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
                          <h2>Asthma</h2>
                          <div class="span-line"></div>
                          <p>A chronic condition causing inflammation and narrowing of the airways, leading to breathing difficulties, wheezing, and coughing. It is often triggered by allergens or environmental factors.</p>
                          <div class="show-area d-none">
                            <p>A chronic condition causing inflammation and narrowing of the airways, leading to breathing difficulties, wheezing, and coughing. It is often triggered by allergens or environmental factors.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Chronic Obstructive Pulmonary Disease (COPD)</h2>
                          <div class="span-line"></div>
                          <p>A progressive lung disease, often caused by smoking, that includes conditions like emphysema and chronic bronchitis. It results in difficulty breathing, frequent coughing, and reduced airflow.</p>
                          <div class="show-area d-none">
                            <p>A progressive lung disease, often caused by smoking, that includes conditions like emphysema and chronic bronchitis. It results in difficulty breathing, frequent coughing, and reduced airflow.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Pneumonia</h2>
                          <div class="span-line"></div>
                          <p>An infection that inflames the air sacs in one or both lungs, which may fill with fluid or pus. Symptoms include cough, fever, and difficulty breathing.</p>
                          <div class="show-area d-none">
                            <p>An infection that inflames the air sacs in one or both lungs, which may fill with fluid or pus. Symptoms include cough, fever, and difficulty breathing.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Lung Cancer</h2>
                          <div class="span-line"></div>
                          <p>Malignant growth in the lungs, often linked to smoking or exposure to harmful chemicals. It can cause coughing, chest pain, shortness of breath, and weight loss.</p>
                          <div class="show-area d-none">
                            <p>Malignant growth in the lungs, often linked to smoking or exposure to harmful chemicals. It can cause coughing, chest pain, shortness of breath, and weight loss.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Tuberculosis (TB)</h2>
                          <div class="span-line"></div>
                          <p>A contagious bacterial infection that primarily affects the lungs, causing symptoms like coughing, fever, weight loss, and night sweats.</p>
                          <div class="show-area d-none">
                            <p>A contagious bacterial infection that primarily affects the lungs, causing symptoms like coughing, fever, weight loss, and night sweats.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Interstitial Lung Disease</h2>
                          <div class="span-line"></div>
                          <p>A group of lung disorders causing scarring of lung tissue, leading to difficulty in breathing and reduced lung function. It can result from various causes, including autoimmune diseases.</p>
                          <div class="show-area d-none">
                            <p>A group of lung disorders causing scarring of lung tissue, leading to difficulty in breathing and reduced lung function. It can result from various causes, including autoimmune diseases.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Sleep Apnea</h2>
                          <div class="span-line"></div>
                          <p>A sleep disorder where breathing repeatedly stops and starts during sleep, leading to poor sleep quality, fatigue, and potential cardiovascular complications.</p>
                          <div class="show-area d-none">
                            <p>A sleep disorder where breathing repeatedly stops and starts during sleep, leading to poor sleep quality, fatigue, and potential cardiovascular complications.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Pulmonary Embolism</h2>
                          <div class="span-line"></div>
                          <p>A blockage in one of the pulmonary arteries in the lungs, usually caused by blood clots. It can cause chest pain, shortness of breath, and even sudden death.</p>
                          <div class="show-area d-none">
                            <p>A blockage in one of the pulmonary arteries in the lungs, usually caused by blood clots. It can cause chest pain, shortness of breath, and even sudden death.</p>
                          </div>
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
                          <h2>Bronchoscopy</h2>
                          <div class="span-line"></div>
                          <p>A procedure that uses a flexible tube with a camera to examine the airways and lungs. It allows for the collection of tissue samples (biopsies), removal of foreign objects, and treatment of blockages or abnormal growths in the airways.</p>
                          <div class="show-area d-none">
                            <p>A procedure that uses a flexible tube with a camera to examine the airways and lungs. It allows for the collection of tissue samples (biopsies), removal of foreign objects, and treatment of blockages or abnormal growths in the airways.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Chest X-ray</h2>
                          <div class="span-line"></div>
                          <p>A non-invasive imaging procedure that provides detailed pictures of the lungs, heart, and chest wall. It is used to diagnose conditions such as pneumonia, lung cancer, and tuberculosis.</p>
                          <div class="show-area d-none">
                            <p>A non-invasive imaging procedure that provides detailed pictures of the lungs, heart, and chest wall. It is used to diagnose conditions such as pneumonia, lung cancer, and tuberculosis.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>CT Scan of the Chest</h2>
                          <div class="span-line"></div>
                          <p>A detailed imaging technique that produces cross-sectional images of the chest. It helps in diagnosing lung diseases, evaluating lung cancer, and detecting lung infections or pulmonary embolism.</p>
                          <div class="show-area d-none">
                            <p>A detailed imaging technique that produces cross-sectional images of the chest. It helps in diagnosing lung diseases, evaluating lung cancer, and detecting lung infections or pulmonary embolism.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Sleep Study (Polysomnography)</h2>
                          <div class="span-line"></div>
                          <p>A diagnostic test used to evaluate sleep disorders such as sleep apnea. It monitors brain activity, oxygen levels, heart rate, and breathing patterns while the patient sleeps.</p>
                          <div class="show-area d-none">
                            <p>A diagnostic test used to evaluate sleep disorders such as sleep apnea. It monitors brain activity, oxygen levels, heart rate, and breathing patterns while the patient sleeps.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Thoracentesis</h2>
                          <div class="span-line"></div>
                          <p>A procedure to remove excess fluid from around the lungs (pleural effusion). The fluid is analyzed to diagnose the cause of the fluid buildup, which may be due to infections, cancer, or heart failure.</p>
                          <div class="show-area d-none">
                            <p>A procedure to remove excess fluid from around the lungs (pleural effusion). The fluid is analyzed to diagnose the cause of the fluid buildup, which may be due to infections, cancer, or heart failure.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Lung Biopsy</h2>
                          <div class="span-line"></div>
                          <p>A procedure in which a small sample of lung tissue is taken for examination. It is used to diagnose lung diseases such as lung cancer, interstitial lung disease, or infections.</p>
                          <div class="show-area d-none">
                            <p>A procedure in which a small sample of lung tissue is taken for examination. It is used to diagnose lung diseases such as lung cancer, interstitial lung disease, or infections.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Mechanical Ventilation</h2>
                          <div class="span-line"></div>
                          <p>A therapeutic procedure used for patients with respiratory failure, providing support to help them breathe when they are unable to do so effectively on their own. This includes both invasive and non-invasive ventilation options.</p>
                          <div class="show-area d-none">
                            <p>A therapeutic procedure used for patients with respiratory failure, providing support to help them breathe when they are unable to do so effectively on their own. This includes both invasive and non-invasive ventilation options.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Bronchial Thermoplasty</h2>
                          <div class="span-line"></div>
                          <p>A procedure for severe asthma patients in which heat is used to reduce the smooth muscle in the airways, helping to reduce the frequency and severity of asthma attacks.</p>
                          <div class="show-area d-none">
                            <p>A procedure for severe asthma patients in which heat is used to reduce the smooth muscle in the airways, helping to reduce the frequency and severity of asthma attacks.</p>
                          </div>
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
              <img src="image/dr-arjun.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. P Arjun</h3>
              <p>Senior Consultant & Group Coordinator</p>
              <h4>MBBS, DTDC, MD DNB</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_m_joshi.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. M Joshi</h3>
              <p>Prof Emeritus & Senior Consultant</p>
              <h4>MBBS, MD, FCCP, MSc, FCAI, FNCCP</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ameer_k_a.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ameer K A</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD (Respiratory Medicine), Diploma Tuberculosis and Chest Disease</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vinod-kumar-kesavan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinod Kumar Kesavan</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD (Respiratory Medicine), IDCCM, EDIC</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-rohith.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Rohith S</h3>
              <p>Senior Consultant - Quality and Clinical Auditing</p>
              <h4>MBBS, M.D (Pulmonary Medicine)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ajay_ravi.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ajay Ravi</h3>
              <p>Consultant - Interventional Pulmonology</p>
              <h4>MBBS, DNB</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_sujith_varghese_abraham.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sujith Varghese Abraham</h3>
              <p>Senior Registrar</p>
              <h4>MBBS, DTCD, DNB, DDM, EDARM</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/Dr-Nishanth.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Nishanth P S</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, MD Pulmonary Medicine, DM Pulmonary Medicine & Critical Care</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/Dr-Aswathy.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Aswathy G.</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, DNB, DM Pulmonary and Critical Care and Sleep Medicine</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
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
            <p>My experience at KIMSHEALTH's Emergency Department was exceptional. The team's swift action and expertise
              saved my life during a critical medical emergency. I'm forever grateful for their dedication and care.</p>
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
            <p>KIMSHEALTH's Emergency Medicine team provided compassionate care when my family member suffered a severe
              injury. Their professionalism and quick response eased our anxiety, and we felt reassured throughout the
              ordeal.</p>
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
            <p>I cannot thank KIMSHEALTH's Emergency Department enough for their support during a recent medical crisis.
              Their efficient and thorough approach ensured I received timely treatment, leading to a successful
              recovery. Highly recommended.</p>
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
                <span>What conditions does the Respiratory Department treat?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The Respiratory Department treats a variety of conditions, including asthma, COPD, pneumonia, lung cancer, sleep apnea, pulmonary hypertension, interstitial lung diseases, and tuberculosis.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What is the role of a pulmonologist?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>A pulmonologist is a specialist who diagnoses and treats diseases of the lungs and respiratory system. They manage conditions such as asthma, COPD, lung infections, and other breathing disorders.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>How are lung diseases diagnosed?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Lung diseases are diagnosed using various tests, including chest X-rays, CT scans, pulmonary function tests, bronchoscopy, and blood tests to assess lung function and detect abnormalities.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What is a bronchoscopy, and when is it needed?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Bronchoscopy is a procedure where a flexible tube with a camera is inserted into the airways to examine the lungs and collect tissue samples. It's used to diagnose infections, cancers, and blockages in the airways.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What treatments are available for asthma and COPD?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Treatments for asthma and COPD include medications like bronchodilators, inhaled corticosteroids, and oral steroids. Pulmonary rehabilitation, oxygen therapy, and lifestyle changes like quitting smoking also play key roles.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>How does the sleep study (polysomnography) work?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>A sleep study monitors various body functions during sleep, including brain activity, heart rate, oxygen levels, and breathing patterns, to diagnose sleep disorders like sleep apnea.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>What is pulmonary rehabilitation, and who needs it?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Pulmonary rehabilitation is a program that helps patients with chronic lung diseases improve their lung function, exercise capacity, and quality of life through exercise training, education, and support.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <span>Can lung cancer be prevented?</span>
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>While there's no guaranteed way to prevent lung cancer, avoiding smoking and exposure to harmful environmental toxins can significantly reduce the risk. Early detection through screening can improve treatment outcomes.</p>
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
          <p>Copyright © <span class="text-white current-year"></span>. KIMSHOSPITAL. All Rights Reserved</p>
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
  <script src="js/script.js"></script>

  <script>
    const year = document.querySelector('.current-year');
    year.innerHTML = new Date().getFullYear();
  </script>
	
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
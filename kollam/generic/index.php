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
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P8WQZCXX');
  </script>
  <!-- End Google Tag Manager -->


</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P8WQZCXX"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

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
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:+919995226386">+91 9995226386</a></div>
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
                    <div style="font-size: 14px; font-weight: 600;">KIMSHEALTH Hospital, Kollam</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 text-end">
                <a href="#bannerSection" class="btn header_btn smooth-scroll" data-target="bannerSection"> Book an appointment </a>
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
              <!-- <li><a href="#expert" class="anchor-menu smooth-scroll" data-target="expert">Our Experts</a></li> -->
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
              <!-- <h6></h6> -->
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold fs-6 text-color"><a href="tel:+919995226386">+91 9995226386</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Request a Call Back</h3>
              <form action="mailer.php" method="post" onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Generic-Kollam">
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
              <h2>KIMSHEALTH Overview</h2>
              <p>One Of The Best Hospitals In Kollam</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH Kollam, is a 200-bed multispecialty hospital located in Kottiyam, Kollam, Kerala. Part of the KIMSHEALTH Group, it offers comprehensive healthcare services across over 30 specialties, including cardiology, oncology, orthopedics, obstetrics and gynecology, neurosurgery, and more.</p>
              <p>The hospital is equipped with state-of-the-art facilities such as six modern operation theaters, a 20-bed intensive care unit (ICU), a five-bed dialysis unit, and a fully computerized hospital information system. Diagnostic services include 24/7 laboratory, X-ray, CT scan, EEG, EMG, TMT, and 4D ultrasound.</p>
              <p>KIMSHEALTH Kollam is accredited by the National Accreditation Board for Hospitals & Healthcare Providers (NABH) and the Australian Council on Healthcare Standards International (ACHSI), ensuring high standards of patient care and safety.</p>
              <p>Patient-centric services include round-the-clock emergency and trauma care, a blood bank, a nutrition and dietary department, and a wellness clinic offering preventive health check-ups. With a team of highly qualified consultants and support staff, KIMSHEALTH Kollam is committed to providing quality healthcare with compassion and competence.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/uAVjJTGftbk" title="#MyResearchHelpedMeToSelectTheBest" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
            <p>Specialized Care For Ortho-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Sports Medicine</h5>
                        <div class="under-line"></div>
                        <p>Sports medicine focuses on diagnosing, treating, and preventing injuries related to sports
                          and exercise, optimizing athletes' performance and recovery.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pediatric Orthopaedics</h5>
                        <div class="under-line"></div>
                        <p>Pediatric Orthopaedics specializes in diagnosing and treating musculoskeletal conditions in
                          children, from birth to adolescence, ensuring optimal growth and development.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Foot and Ankle Orthopaedics</h5>
                        <div class="under-line"></div>
                        <p>Foot and ankle Orthopaedics, also known as podiatry, deals with diagnosing and treating
                          conditions affecting the foot, ankle, and related structures.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Orthopaedic Oncology</h5>
                        <div class="under-line"></div>
                        <p>Orthopaedic oncology is dedicated to identifying and addressing bone and soft tissue tumors,
                          with a focus on preserving function and enhancing well-being.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Spine Surgery</h5>
                        <div class="under-line"></div>
                        <p>Spine surgery diagnoses and treats spine conditions, aiming to relieve pain and restore
                          function for improved overall well-being.</p>
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
                          <h2>Osteoarthritis</h2>
                          <div class="span-line"></div>
                          <p> Osteoarthritis is a degenerative joint disease characterized by the breakdown of
                            cartilage, leading to pain, stiffness, and reduced mobility in affected joints, often
                            requiring medical management and sometimes surgery.</p>
                          <div class="show-area d-none">
                            <p>Osteoarthritis is a degenerative joint disease characterized
                              by the breakdown of cartilage, leading to pain, stiffness, and reduced mobility in affected
                              joints, often requiring medical management and sometimes surgery.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Rotator Cuff Tear</h2>
                          <div class="span-line"></div>
                          <p>A rotator cuff tear is a common shoulder injury, often caused by overuse or trauma,
                            resulting in pain, weakness, and limited range of motion, frequently necessitating physical
                            therapy or surgical repair.</p>
                          <div class="show-area d-none">
                            <p>A rotator cuff tear is a common shoulder injury, often caused
                              by overuse or trauma, resulting in pain, weakness, and limited range of motion, frequently
                              necessitating physical therapy or surgical repair.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>ACL Injury</h2>
                          <div class="span-line"></div>
                          <p>An anterior cruciate ligament (ACL) injury is a common knee injury, often occurring during
                            sports or physical activities, causing instability, swelling, and pain, requiring surgical
                            reconstruction followed by rehabilitation.</p>
                          <div class="show-area d-none">
                            <p>An anterior cruciate ligament (ACL) injury is a common knee
                              injury, often occurring during sports or physical activities, causing instability, swelling,
                              and pain, requiring surgical reconstruction followed by rehabilitation.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Herniated Disc</h2>
                          <div class="span-line"></div>
                          <p> A herniated disc, also known as a slipped or ruptured disc, occurs when the soft inner
                            material of a spinal disc leaks out, putting pressure on nearby nerves, leading to pain,
                            numbness, and weakness, sometimes necessitating surgery if conservative treatments fail.</p>
                          <div class="show-area d-none">
                            <p> A herniated disc, also known as a slipped or ruptured disc,
                              occurs when the soft inner material of a spinal disc leaks out, putting pressure on nearby
                              nerves, leading to pain, numbness, and weakness, sometimes necessitating surgery if
                              conservative treatments fail.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Carpal Tunnel Syndrome</h2>
                          <div class="span-line"></div>
                          <p> Carpal tunnel syndrome is a nerve disorder characterized by compression of the median
                            nerve in the wrist, resulting in pain, numbness, and tingling in the hand and fingers, often
                            requiring splinting, medication, or surgical release.</p>
                          <div class="show-area d-none">
                            <p> Carpal tunnel syndrome is a nerve disorder characterized by compression of the median nerve in the wrist, resulting in pain, numbness, and tingling in the hand and fingers, often requiring splinting, medication, or surgical release.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Scoliosis</h2>
                          <div class="span-line"></div>
                          <p>Scoliosis is a sideways curvature of the spine, often diagnosed during adolescence, causing
                            back pain, uneven shoulders or hips, and sometimes breathing difficulties, occasionally
                            requiring bracing or surgery for severe cases.</p>
                          <div class="show-area d-none">
                            <p>Scoliosis is a sideways curvature of the spine, often diagnosed during adolescence, causing back pain, uneven shoulders or hips, and sometimes breathing difficulties, occasionally requiring bracing or surgery for severe cases.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Plantar Fasciitis</h2>
                          <div class="span-line"></div>
                          <p>Plantar fasciitis is a common cause of heel pain, resulting from inflammation of the
                            plantar fascia ligament in the foot, leading to stabbing pain in the heel or bottom of the
                            foot, often managed with stretching, orthotics, or physical therapy.</p>
                          <div class="show-area d-none">
                            <p>Plantar fasciitis is a common cause of heel pain, resulting from inflammation of the plantar fascia ligament in the foot, leading to stabbing pain in the heel or bottom of the foot, often managed with stretching, orthotics, or physical therapy.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Fractures</h2>
                          <div class="span-line"></div>
                          <p>Fractures are breaks or cracks in bones, often caused by trauma or overuse, resulting in
                            pain, swelling, and difficulty moving the affected limb, typically treated with
                            immobilization, realignment, and sometimes surgical intervention for complex fractures.</p>
                          <div class="show-area d-none">
                            <p>Fractures are breaks or cracks in bones, often caused by trauma or overuse, resulting in pain, swelling, and difficulty moving the affected limb, typically treated with immobilization, realignment, and sometimes surgical intervention for complex fractures.</p>
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
                          <h2>Robotic Knee Replacement</h2>
                          <div class="span-line"></div>
                          <p>Robotic knee replacement utilizes advanced robotic technology to assist orthopaedic
                            surgeons in achieving precise alignment and placement of knee implants, potentially leading
                            to improved outcomes and faster recovery for patients.</p>
                          <div class="show-area d-none">
                            <p>Robotic knee replacement utilizes advanced robotic technology
                              to assist orthopaedic surgeons in achieving precise alignment and placement of knee
                              implants, potentially leading to improved outcomes and faster recovery for patients.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hip Replacement</h2>
                          <div class="span-line"></div>
                          <p>Hip replacement surgery involves replacing a damaged hip joint with an artificial implant,
                            typically performed to relieve pain and improve mobility in patients with severe arthritis
                            or hip fractures.</p>
                          <div class="show-area d-none">
                            <p>Hip replacement surgery involves replacing a damaged hip joint with an artificial implant, typically performed to relieve pain and improve mobility in patients with severe arthritis or hip fractures.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Total Knee Replacement (TKR)</h2>
                          <div class="span-line"></div>
                          <p>Total knee replacement entails replacing damaged knee joint surfaces with artificial
                            implants to relieve pain, restore function, and enhance mobility, often for severe arthritis
                            or knee injuries.</p>
                          <div class="show-area d-none">
                            <p>Total knee replacement entails replacing damaged knee joint
                              surfaces with artificial implants to relieve pain, restore function, and enhance mobility,
                              often for severe arthritis or knee injuries.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Total Hip Replacement (THR)</h2>
                          <div class="span-line"></div>
                          <p>Total hip replacement involves replacing damaged or diseased parts of the hip joint with
                            artificial components to alleviate pain and improve mobility, particularly in severe
                            arthritis cases.</p>
                          <div class="show-area d-none">
                            <p>Total hip replacement involves replacing damaged or diseased
                              parts of the hip joint with artificial components to alleviate pain and improve mobility,
                              particularly in severe arthritis cases.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Arthroscopy (ACL, PCL)</h2>
                          <div class="span-line"></div>
                          <p>Arthroscopy is a minimally invasive surgical procedure used to diagnose and treat joint
                            problems, such as ACL and PCL tears, by inserting a tiny camera and instruments through
                            small incisions.</p>
                          <div class="show-area d-none">
                            <p>Arthroscopy is a minimally invasive surgical procedure used to
                              diagnose and treat joint problems, such as ACL and PCL tears, by inserting a tiny camera and
                              instruments through small incisions.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hand Surgery</h2>
                          <div class="span-line"></div>
                          <p>Hand surgery addresses conditions affecting the hand, wrist, and forearm, including
                            fractures, tendon injuries, nerve compression syndromes, arthritis, and congenital
                            anomalies, aiming to restore function and alleviate pain for patients.</p>
                          <div class="show-area d-none">
                            <p>Hand surgery addresses conditions affecting the hand, wrist,
                              and forearm, including fractures, tendon injuries, nerve compression syndromes, arthritis,
                              and congenital anomalies, aiming to restore function and alleviate pain for patients.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Microvascular Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Microvascular surgery involves intricate procedures to repair small blood vessels, nerves,
                            and tissues using specialized instruments and microscopes, often used in reconstructive
                            surgery to restore function and appearance in complex cases.</p>
                          <div class="show-area d-none">
                            <p>Microvascular surgery involves intricate procedures to repair
                              small blood vessels, nerves, and tissues using specialized instruments and microscopes,
                              often used in reconstructive surgery to restore function and appearance in complex cases.
                            </p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Reconstructive surgery for congenital deformities</h2>
                          <div class="span-line"></div>
                          <p>Reconstructive surgery for congenital deformities aims to correct abnormalities present at
                            birth, such as cleft lip and palate or limb malformations, restoring function and appearance
                            for improved quality of life.</p>
                          <div class="show-area d-none">
                            <p>Reconstructive surgery for congenital deformities aims to
                              correct abnormalities present at birth, such as cleft lip and palate or limb malformations,
                              restoring function and appearance for improved quality of life.</p>
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

    <!-- <section class="section section-bg" id="expert">
      <div class="container">
        <div class="sec-title">
          <h2>Our Experts</h2>
          <p>Expert Team Ensuring Superior Patient Care.</p>
        </div>

        <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_sanjeev_bhaskar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sanjeev Bhaskar</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MS ( Ortho )</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_vinod_krishnan.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinod Krishnan</h3>
              <p>Visiting Consultant</p>
              <h4>MBBS, D (Ortho), DNB (Ortho), MRCS</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_akhilesh.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Akhilesh Arjun</h3>
              <p>Senior Registrar</p>
              <h4>MBBS, MS (Ortho)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_appu.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Appu G Pillai</h3>
              <p>Registrar</p>
              <h4>MBBS, MS (Ortho)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_govind.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Govind V J</h3>
              <p>Specialist</p>
              <h4>MBBS, MS (Orthopaedics)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_abdul_muhaimin.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Abdul Muhaimin T</h3>
              <p>Registrar</p>
              <h4>MBBS, MS Orthopaedics</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- testimonials -->
    <section class="section testimonial-section testimonial-bg" id="testimonial">
      <div class="container">
        <div class="sec-title">
          <h2>Testimonials</h2>
          <p>The Voice of the People!</p>
        </div>
        <div class="owl-carousel owl-theme mb-0 testimonial-slider dots-morphing mt-5">
          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Janice Brace</h3>
                <p>France</p>
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
            <p>Thank you for the professional care and friendly attitude. The cleanliness and food are excellent. My best hospital experience.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>James S.Sable</h3>
                <p>Attorney At Law, Seattle, Wa</p>
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
            <p>I was touring Kerala when I contracted a bacterial infection and went into shock. The infection had transformed itself into sepsis.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Sasikumar K. Pillai</h3>
                <p>Qatar</p>
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
            <p>KIMS not only provides class treatment but the attitude of Doctors and Supporting-Staff are tremendous. I appreciate the understanding of Dr. R. Jayakumar of Voice Clinic.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Anjali Nair</h3>
                <p>Trivandrum</p>
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
            <p>Would like to thank from the bottom of my heart for the great care, love, concern, attention and affection shown to me during my pregnancy.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Colin Hewes</h3>
                <p>Devon, England</p>
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
            <p>Sample Sentehis is one of the cleanest hospitals I have seen. I have found the standard of care to be second to none.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Bernard Bewesy</h3>
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
            <p>Thank you for your excellent care. Every member of staff were competent, Courteous, Compassionate and professional in their care. The cleanliness of the hospital is superb.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Nadeem Walji</h3>
                <p>Toronto, Canada</p>
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
            <p>The service and friendliness of everyone at this hospital is incredible. I feel like everyone is more of a friend than a staff member.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Harold Whitehead</h3>
                <p>California, USA</p>
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
            <p>KIMS is excellent - the staff, doctors, rooms and food is superb. My every need was met with kindness and patience and I was comfortable 100%</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Anthony Cox</h3>
                <p>Suffolk, UK</p>
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
            <p>I have visited many hospitals but KIMS has to be one of the finest anywhere in the world. From the International desk to the private executive</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Gerhard Backendorf</h3>
                <p>Germany</p>
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
            <p>KIMS saved my life. My second on 19.11.2007 after an MI. Thank you for my new life and second chance. KIMS is excellent with its kind.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Mrs. Ananya Patel</h3>
                <p>Kochi, India</p>
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
            <p>I was struggling with hip arthritis, which severely restricted my daily activities. The specialists at KIMS Hospitals recommended a hip replacement, and the procedure was a great success. The exceptional care and advanced treatment options provided have allowed me to regain mobility and live a pain-free life.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Vikram Rao</h3>
                <p>Indore, India</p>
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
            <p>After suffering from severe knee pain for years, I finally underwent knee replacement surgery at KIMS Hospitals. The care and expertise of the doctors were outstanding. Now, I can walk pain-free and enjoy life again!</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Ms. Meera Iyer</h3>
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
            <p>Severe knee pain made my daily life difficult, but thanks to the expert care at KIMS Hospitals, my knee replacement surgery was a success. Now, I can walk comfortably and live pain-free. I am truly grateful for the exceptional treatment and care!</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Mr. Arjun Sharma</h3>
                <p>Kerala, India</p>
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
            <p>Persistent joint pain had restricted my movements and daily activities. The orthopedic team at KIMS Hospitals provided the right diagnosis and treatment, helping me recover fully. Now, I can move freely without discomfort. I truly appreciate their care and expertise!</p>
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
                <span>What specialties are offered at KIMSHEALTH Kollam?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>KIMSHEALTH Kollam provides comprehensive care across over 30 specialties, including cardiology, oncology, orthopedics, obstetrics and gynecology, neurosurgery, endocrinology, gastroenterology, hepatology, hematology, and general surgery.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What are the hospital's operating hours?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The hospital operates 24/7, providing round-the-clock emergency and trauma care.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>Does KIMSHEALTH Kollam offer health check-up packages?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, the hospital offers various health check-up packages, including the Executive Health Check-up, which covers a range of tests and consultations. Packages are available for individuals of all age groups.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>Is the hospital accredited?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, KIMSHEALTH Kollam is accredited by the National Accreditation Board for Hospitals & Healthcare Providers (NABH) and the Australian Council on Healthcare Standards International (ACHSI), ensuring high standards of patient care and safety.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What are the OPD timings?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The Outpatient Department (OPD) is open from Monday to Saturday, 10:00 AM to 5:00 PM.</p>
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
          <p>Copyright © <span class="text-white current-year"></span>| KIMSHEALTH | All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="sticky-bar">
    <a href="tel:+919995226386"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
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

  <script>
    const year = document.querySelector('.current-year');
    year.innerHTML = new Date().getFullYear();
  </script>

</body>

</html>
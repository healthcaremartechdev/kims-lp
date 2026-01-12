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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.0/jquery.fancybox.min.css">

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
          <div class="col-lg-3">
            <img src="image/logo.png" alt="" class="img-fluid header-logo">
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-lg-3 col-md-4 my-auto">
                <div class="d-flex align-items-center gap-2">
                  <div class="header_icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="header-widget">
                    <div style="color: #666666; font-size: 14px; line-height: 16px;">CALL US</div>
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:+04714712800">+91 04714712800</a></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-4 my-auto">
                <div class="d-flex align-items-center gap-2">
                  <div class="header_icon">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="header-widget">
                    <div style="color: #666666; font-size: 14px; line-height: 16px;">LOCATION</div>
                    <div style="font-size: 14px; font-weight: 600;">KIMSHEALTH Hospital, Trivandrum</div>
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
              <!-- <li><a href="#about" class="anchor-menu smooth-scroll" data-target="about">About Us</a></li> -->
              <li><a href="#aboutDoctor" class="anchor-menu smooth-scroll" data-target="aboutDoctor">About Doctor</a></li>
              <li><a href="#facility" class="anchor-menu smooth-scroll" data-target="facility">Facilities</a></li>
              <li><a href="#conditionTreatment" class="anchor-menu smooth-scroll" data-target="conditionTreatment">Conditions</a></li>
              <li><a href="#ourExpert" class="anchor-menu smooth-scroll" data-target="ourExpert">Our Experts</a></li>
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
              <!-- <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold fs-6 text-color"><a href="tel:+917736569053">+91 7736569053</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div> -->
              <h3 class="fw-bold text-danger fs-6 mb-3">Request an Appointment</h3>
              <form action="mailer.php" method="post">
                <input type="hidden" name="speciality" value="Neuro Intervention">
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
                    <textarea name="message" rows="3" class="form-control" placeholder="Message"></textarea>
                  </div>
					<div class="col-lg-12 input-group mb-3">
											
						<label>Solve: <strong><?php echo $_SESSION['captcha_question']; ?> =</strong> </label>
    					<input type="text" name="captcha" class="form-control" required>
					</div>
                  <div class="col-lg-12 form-group mb-0">
                    <input type="submit" value="Submit" class="btn submit-btn">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="d-xl-none d-lg-none d-md-none d-block">
      <div class="container mt-3">
        <div class="row">
          <div class="col-12">
            <a href="javascript:void(0);" class="btn btn-primary" id="responsiveButton" onclick="handleResponsiveClick(event)">Book an Appointment</a>
          </div>
        </div>
      </div>
    </div>

    <section class="section pb-lg-0" id="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-7 col-lg-7 col-md-7 mb-lg-0 mb-3">
            <div class="sec-title mb-0 pb-0">
              <h2>Why choose KIMSHEALTH?</h2>
            </div>
            <div class="about-content">
              <ul>
                <li>Renowned doctors with more than 35+ years of experience</li>
                <li>State of the art facilities</li>
                <li>24x7 Emergency Stroke Unit</li>
                <li>World class healthcare</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 my-lg-auto doctor-col-custom">
            <div class="video-item video-item-content">
              <a href="image/KIMS_MAL_AD_1.mp4" data-fancybox data-width="640" data-height="360">
                <img src="image/thumbnail.jpg" alt="" class="img-fluid">
              </a>
              <p>With our Advanced Biplane Cath Lab, neuro procedures that once took 2 hours now take just 30 minutes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-section border-bottom" id="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-12 col-lg-12 col-md-12 mb-lg-0 mb-0">
            <div class="sec-title mb-0 pb-0">
              <h2>What is Interventional Neuro Radiology?</h2>
            </div>
            <div class="about-content content" id="content">
              <p>Interventional neuroradiology is an advanced subspecialty within clinical radiology, dedicated to the diagnosis and treatment of central nervous system disorders. By harnessing the power of cutting-edge medical imaging, interventional neuroradiologists employ minimally invasive techniques to deliver targeted therapies with utmost precision.</p>
              <p>Through the use of microcatheters inserted in the groin area and guided by X-ray imaging, these specialists navigate the intricate network of blood vessels that lead to the brain. This allows them to perform a wide array of treatments, transforming the management of conditions that traditionally required invasive surgical procedures.</p>
              <p>One of the groundbreaking interventions is stroke treatment, where clot-busting drugs are precisely delivered directly to the site of blockage. This approach promotes the restoration of blood flow to the brain, greatly enhancing the chances of patient recovery while minimizing potential damage. Similarly, interventional neuroradiology has revolutionized aneurysm therapy. By inserting platinum coils into bulging aneurysms, the risk of clotting and rupture is effectively reduced, providing patients with a safer and highly effective treatment alternative.</p>
              <p>These innovative interventions can be performed through small incisions, eliminating the need for traditional open surgery. Consequently, patients experience shorter hospital stays, faster recovery periods, and reduced risks associated with more invasive approaches.</p>
            </div>
            <a href="javascript:void(0);" class="toggle-button" id="toggleButton">
              <span>Read More</span>
            </a>
          </div>
        </div>
      </div>
    </section>


    <section class="section pb-lg-0" id="aboutDoctor">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 mb-lg-0 mb-3">
            <div class="doctor-image text-lg-center text-md-center text-center">
              <img src="image/Santhosh-Joseph.jpg" alt="KIMSHEALTH" class="img-fluid">
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-5 mb-lg-0 mb-3">
            <div class="doctor-content-info">
              <h2>Dr. Santhosh Joseph</h2>
              <h3>Neuro Interventional Radiology</h3>
              <h6>Designation:</h6>
              <h5 class="mb-lg-3 mb-2"><img src="image/doctor.png" alt=""> Senior Consultant & Clinical Lead</h5>
              <h5 class="mb-lg-3 mb-2"><img src="image/calendar.png" alt=""> OPD: Mon to Sat : 09:00 AM - 03:45 PM</h5>
              <!-- <h5 class="mb-lg-3 mb-2"><img src="image/icon-phone.svg" alt=""> <a href="tel:+917736569053" class="text-black">+91 7736569053</a></h5> -->
              <a href="#bannerSection" class="btn btn-primary mt-3" id="responsiveButton" onclick="handleResponsiveClick(event)">Book an Appointment</a>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/jFGdq5reZzY" title="Discover the Power of Interventional Neuro Radiology with Dr. Santhosh Joseph" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/T3CWl9KBPY4" title="എന്തൊക്കെയാണ് Interventional റേഡിയോളോജിയുടെ ഗുണങ്ങൾ ? | Interventional radiology പ്രത്യേകതകൾ ?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="doctor-details-content">
              <h1>Doctor's Profile</h1>

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h3><i><img src="image/expertise.png" alt=""></i>Area of Expertise</h3>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="mb-1"><strong>Diagnostic Angiography</strong></p>
                      <ul>
                        <li>4 Vessel Cerebral Angiogram</li>
                        <li>Peripheral Angiogram</li>
                        <li>Spinal Angiogram</li>
                      </ul>
                      <p class="mb-1"><strong>Neuro-Interventional Procedures: (Haemorrhagic Stroke)</strong></p>
                      <ul>
                        <li>Aneurysm</li>
                        <li>Coiling/ Balloon Assisted Coiling/ Stent Assisted Coiling </li>
                        <li>Flow Diverter</li>
                        <li>AVM / Onyx / Squid / Menox / Phil</li>
                        <li>Pressure cooker </li>
                        <li>Regrade Pressure Cooker</li>
                        <li>DAVF /CCF</li>
                        <li>Carotid PTA + Stenting</li>
                      </ul>
                      <p class="mb-1"><strong>Pediatric Neuro Intervention</strong></p>
                      <ul>
                        <li>Pediatric AVF</li>
                        <li>VOGM</li>
                      </ul>
                      <p class="mb-1"><strong>Spinal Interventions</strong></p>
                      <ul>
                        <li>Spinal AVM</li>
                        <li>Spinal Dural AVF</li>
                        <li>Spinal Perimedullary Fistula</li>
                      </ul>
                      <p class="mb-1"><strong>Ischemic Stroke Management</strong></p>
                      <ul>
                        <li>Ischemic Stroke</li>
                        <li>Thrombectomy / Stent Retriever</li>
                      </ul>
                      <p class="mb-1"><strong>Aortic Stent Grafting</strong></p>
                      <ul>
                        <li>AAA</li>
                        <li>TAA</li>
                        <li>Aortic Dissection</li>
                        <li>Stent Graft</li>
                        <li>Debranching & Stent Graft</li>
                      </ul>
                      <p class="mb-1"><strong>Vascular Interventional Procedures</strong></p>
                      <ul>
                        <li>PTS Stenting Peripheral Arteries</li>
                        <li>Uterine Artery Embolization</li>
                        <li>Hepatic Artery Embolization</li>
                        <li>Chemo Embolization</li>
                        <li>TARE / TACE / TJLB</li>
                        <li>PTBD + Stenting</li>
                        <li>IVC Stenting / Filter</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h3><i><img src="image/badge.png" alt=""></i>Awards & Achievements</h3>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li>Indian Radiological and Imaging Association (IR&IA) - Life Member</li>
                        <li>Indian Society of Vascular and Interventional Radiology (ISVIR) - Founder Member</li>
                        <li>Indian Society of Neuroradiology (ISNR) - Founder Member</li>
                        <li>Indian Medical Association (IMA) - Life Member</li>
                        <li>Neurological Society of India - Member</li>
                        <li>Operation Room Committee - Member, SRMC</li>
                        <li>Technical Committee - Member, SCTIMST</li>
                        <li>Approval Committee - Member, JIPMER</li>
                        <li>Presented several research papers, including 10 at the national and 1 at the international level.</li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h3><i><img src="image/interpreter.png" alt=""></i>Languages Known</h3>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li>Malayalam</li>
                        <li>Tamil</li>
                        <li>Hindi</li>
                        <li>English</li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial-section testimonial-bg" id="facility">
      <div class="container">
        <div class="sec-title">
          <h2>Top Notch Facilities</h2>
        </div>
        <div class="owl-carousel owl-theme mb-0 generic-slider dots-morphing mt-4">
          <div class="listing-item">
            <div class="list-thumb">
              <img src="image/cath_lab_img01.jpg" alt="" class="img-fluid">
            </div>
            <div class="list-content mt-2">
              <h2>Biplane Cathlab 01</h2>
            </div>
          </div>
          <div class="listing-item">
            <div class="list-thumb">
              <img src="image/cath_lab_img02.jpg" alt="" class="img-fluid">
            </div>
            <div class="list-content mt-2">
              <h2>Biplane Cathlab 02</h2>
            </div>
          </div>
          <div class="listing-item">
            <div class="list-thumb">
              <img src="image/cath_lab_img03.jpg" alt="" class="img-fluid">
            </div>
            <div class="list-content mt-2">
              <h2>Biplane Cathlab 03</h2>
            </div>
          </div>
          <div class="listing-item">
            <div class="list-thumb">
              <img src="image/advanced-cone-beam.jpg" alt="" class="img-fluid">
            </div>
            <div class="list-content mt-2">
              <h2>Advanced Cone Beam CT</h2>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="section condition-treatment condition-bg" id="conditionTreatment">
      <div class="container">
        <div class="sec-title mb-lg-2 mb-3">
          <h2>Disease We Treat</h2>
          <p>Unwavering Healthcare Excellence, Every Time.</p>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tabs tabs-bottom tabs-center tabs-simple">

              <div class="tab-content">
                <div class="tab-pane active" id="diseases">
                  <div class="owl-carousel owl-theme condition-slider dots-morphing">
                    <div class="card treatment-card treatment-btn mb-3">
                      <div class="card-body">
                        <h2>Hemorrhagic Stroke</h2>
                        <div class="span-line"></div>
                        <p>A hemorrhagic stroke occurs when a weakened blood vessel ruptures and bleeds into the brain. This can cause brain damage, sudden symptoms, and requires immediate emergency medical treatment.</p>
                        <div class="show-area d-none">
                          <p>A hemorrhagic stroke occurs when a weakened blood vessel ruptures and bleeds into the brain. This can cause brain damage, sudden symptoms, and requires immediate emergency medical treatment.</p>
                        </div>
                        <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                      </div>
                    </div>

                    <div class="card treatment-card treatment-btn">
                      <div class="card-body">
                        <h2>Spinal Dural AVF</h2>
                        <div class="span-line"></div>
                        <p>Spinal dural arteriovenous fistula (AVF) is an abnormal connection between arteries and veins in the spinal cord's covering, causing nerve damage, weakness, and requires early diagnosis and treatment.</p>
                        <div class="show-area d-none">
                          <p>Spinal dural arteriovenous fistula (AVF) is an abnormal connection between arteries and veins in the spinal cord's covering, causing nerve damage, weakness, and requires early diagnosis and treatment.</p>
                        </div>
                        <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                      </div>
                    </div>
                    <div class="card treatment-card treatment-btn mb-3">
                      <div class="card-body">
                        <h2>Brain Anuerism</h2>
                        <div class="span-line"></div>
                        <p>A brain aneurysm is a bulge in a blood vessel in the brain that can leak or rupture, causing bleeding. It may lead to stroke, requiring urgent medical care.</p>
                        <div class="show-area d-none">
                          <p>A brain aneurysm is a bulge in a blood vessel in the brain that can leak or rupture, causing bleeding. It may lead to stroke, requiring urgent medical care.</p>
                        </div>
                        <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                      </div>
                    </div>
                    <div class="card treatment-card treatment-btn">
                      <div class="card-body">
                        <h2>Dural Arteriovenous Fistula</h2>
                        <div class="span-line"></div>
                        <p>Dural arteriovenous fistula (DAVF) is an abnormal connection between arteries and veins in the brain’s dura mater. It can cause headaches, vision issues, or stroke, needing prompt treatment.</p>
                        <div class="show-area d-none">
                          <p>Dural arteriovenous fistula (DAVF) is an abnormal connection between arteries and veins in the brain’s dura mater. It can cause headaches, vision issues, or stroke, needing prompt treatment.</p>
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
    </section>

    <section class="section section-bg" id="ourExpert">
      <div class="container">
        <div class="sec-title">
          <h2>Our Experts</h2>
          <p>Expert Team Ensuring Superior Patient Care.</p>
        </div>

        <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr.santhosh.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Santhosh Joseph</h3>
              <p>Senior Consultant & Clinical Lead</p>
              <h4>MBBS & Internship, DMRD (Medical College, Calicut), MD Radiology (Medical College, Trivandrum)</h4>
              <a href="#bannerSection" id="responsiveButton" class="btn btn-primary smooth-scroll" onclick="handleResponsiveClick(event)">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr.manish.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Manish Kumar Yadav</h3>
              <p>Senior Consultant</p>
              <h4>MBBS(Goa Medical College), DMRD (Goa Medical College), DNB( National Board)</h4>
              <a href="#bannerSection" id="responsiveButton" class="btn btn-primary smooth-scroll" onclick="handleResponsiveClick(event)">Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr.simi.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Simi M Ismail</h3>
              <p>Consultant</p>
              <h4>MBBS, DNB (Radiodiagnosis), EDIR (Radiodiagnosis), DICR, MICR</h4>
              <a href="#bannerSection" id="responsiveButton" class="btn btn-primary smooth-scroll" onclick="handleResponsiveClick(event)">Request An Appointment </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section condition-treatment condition-bg" id="">
      <div class="container">
        <div class="sec-title">
          <h2>Advanced Techniques for Precision Treatment</h2>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 mb-lg-0 mb-3">
            <div class="about-content">
              <p>The brain, with its intricate structure of grooves and intertwined vessels, presents neurologists with the challenge of performing complex procedures with utmost accuracy and efficiency. Particularly in cases of aneurysm and stroke, where preserving live brain tissue is crucial, time and precision are of utmost importance. Traditional methods often involve time-consuming processes, such as multiple angiograms and tedious localization procedures.</p>
              <p>However, with the advent of cutting-edge technology like the Biplane CathLab, neurologists can revolutionize their approach to these procedures. In the past, determining whether a stroke resulted from a block or bleed alone could consume around 20 minutes. Additionally, identifying the precise location of the block required multiple angiograms from various angles. With the utilization of the Advanced Biplane CathLab at KIMSHEALTH, a single angiogram and a Cone Beam CT scan now provide a comprehensive 3D image of the brain and its vessels, accompanied by a roadmap. This breakthrough innovation allows doctors to effortlessly navigate to the exact site of the blockage and accurately place stents. Consequently, the entire procedure time has been significantly reduced to just 30 minutes, a substantial improvement from the previously required 2 hours.</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 my-lg-auto">
            <img src="image/radiotherapy-cathlab.jpg" alt="" class="img-fluid rounded-3">
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial-section testimonial-bg" id="testimonial">
      <div class="container">
        <div class="sec-title">
          <h2>Testimonials</h2>
          <p>The Voice of Our Patients!</p>
        </div>
        <div class="owl-carousel owl-theme mb-0 testimonial-slider dots-morphing mt-4">
          <div class="video-testimonial">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/_JOFjXAk5l4" title="From Aneurysm to Happiness | Mr Menon&#39;s Remarkable Recovery with Intrasaccular Flow Diverter" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="video-testimonial">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/qW_sHqtFiwc" title="Beating the Odds: Koshy Mathew&#39;s Stroke Survival Story" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                <span>What is the advantage of interventional neuroradiology ?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Due to their minimally invasive nature, procedures require little recovery time. Generally, patients are able to return to daily life quicker than they otherwise would following traditional surgery.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What conditions can be treated through interventional neuroradiology?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Ischemic Stroke, Aneurysm, AVM, Hemorrhagic Stroke etc.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

  <footer class="footer">
    <div class="container pt-1 pb-1">
      <div class="row">
        <div class="col-12 text-center">
          <p>Copyright © <span class="text-white current-year"></span>| KIMSHEALTH | All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="sticky-bar">
    <a href="tel:+04714712800"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
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

  <div class="modal fade doctorEnquiry" id="doctorEnquiry" tabindex="-1" aria-labelledby="doctorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-header">
          <h1 class="modal-title fs-5 fw-semibold" id="doctorModalLabel">Book an Appointment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-3">
          <form action="mailer.php" method="post">
            <div class="row">
              <div class="col-lg-12 form-group">
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required autocomplete="off">
              </div>
              <div class="col-lg-12 form-group">
                <input type="text" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile Number"
                  pattern="[0-9]{10}" title="Should be 10 digit number"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                  minlength="10" maxlength="10" required autocomplete="off">
              </div>
              <div class="col-lg-12 form-group">
                <textarea name="message" rows="4" class="form-control" placeholder="Message"></textarea>
              </div>
					<div class="col-lg-12 input-group mb-3">
											
						<label>Solve: <strong><?php echo $_SESSION['captcha_question']; ?> =</strong> </label>
    					<input type="text" name="captcha" class="form-control" required>
					</div>
              <div class="col-lg-12 form-group mb-0">
                <input type="submit" value="Submit" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<button id="scrolltoButton"></button>

  <!-- jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.0/jquery.fancybox.min.js"></script>
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

<script>
function handleResponsiveClick(event) {
  const isMobile = window.innerWidth <= 768;
  const btn = event.currentTarget;

  if (isMobile) {
    // Add modal attributes if not already present
    if (!btn.hasAttribute('data-bs-toggle')) {
      btn.setAttribute('data-bs-toggle', 'modal');
      btn.setAttribute('data-bs-target', '#doctorEnquiry');

      // Force-trigger the modal after attributes are set
      const modal = new bootstrap.Modal(document.getElementById('doctorEnquiry'));
      modal.show();

      event.preventDefault(); // Prevent anchor jump
    }
  } else {
    // Prevent modal and scroll instead
    event.preventDefault();

    // Ensure modal attributes are removed
    btn.removeAttribute('data-bs-toggle');
    btn.removeAttribute('data-bs-target');

    // Smooth scroll to the section
    const targetId = btn.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  }
}
</script>





</body>

</html>
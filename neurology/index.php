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
                <input type="hidden" name="speciality" value="Neurology">
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
              <h2>KIMSHEALTH Neuro Sciences Institute</h2>
              <p>One Of The Best Neuro Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>The KIMSHEALTH Department of Neurology is renowned as one of India's premier centers, having six
                full-time Senior Consultants and 24/7 Neurology Residents. Our comprehensive stroke unit and Neurology
                ICU, equipped with state-of-the-art facilities, ensure round-the-clock care for neurological
                emergencies. With a focus on excellence, our team offers a wide range of services, from diagnosis to
                treatment, covering various neurological conditions. Committed to advancing neuroscience, we prioritize
                research and innovation, striving to provide the highest quality of care to our patients while
                maintaining our position as a leading neurology center in the country.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/c8yLrw7zaHM"
                  title="അപസ്മാരം തലച്ചോറിനെ ഏതെല്ലാം വിധത്തിൽ ബാധിക്കുന്നു? | Epilepsy | KIMSHEALTH" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/7srnRIxS4OI"
                  title="Discover the Breakthroughs in Stroke Intervention with Dr. Santhosh Joseph" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/G1d-t04945s"
                  title="സ്ട്രോക്കിനെ കുറിച്ച് അറിയേണ്ടതെല്ലാം | Dr. Syamlal S | KIMSHEALTH" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/_JOFjXAk5l4"
                  title="From Aneurysm to Happiness | Mr Menon&#39;s Remarkable Recovery with Intrasaccular Flow Diverter"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/KVK8TwqJbS4"
                  title="Interventional Radiology" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/rchlpMtTPjg" title="Stroke"
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
            <p>Specialized Care For Neuro-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Neuro-Oncology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnosing and treating brain and spinal cord tumors, utilizing surgical,
                          radiation, and chemotherapy approaches.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Neurovascular Surgery</h5>
                        <div class="under-line"></div>
                        <p>Addresses cerebrovascular disorders like aneurysms and AVMs through surgical and endovascular
                          techniques to restore blood flow and prevent complications.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Functional Neurosurgery</h5>
                        <div class="under-line"></div>
                        <p>Targets neurological conditions like movement disorders or chronic pain through
                          neuromodulation techniques such as deep brain stimulation or spinal cord stimulation.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pediatric Neurosurgery</h5>
                        <div class="under-line"></div>
                        <p>Specializes in diagnosing and treating neurological conditions in children, including
                          congenital anomalies, brain tumors, and epilepsy, often requiring specialized surgical
                          techniques and care.</p>
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
                          <h2>Epilepsy</h2>
                          <div class="span-line"></div>
                          <p>Neurological disorder characterized by recurrent seizures, managed through medication,
                            lifestyle changes, or surgical interventions like resective surgery or vagus nerve
                            stimulation.</p>
                          <p class="full-details d-none">Neurological disorder characterized by recurrent seizures,
                            managed through medication, lifestyle changes, or surgical interventions like resective
                            surgery or vagus nerve stimulation.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Stroke</h2>
                          <div class="span-line"></div>
                          <p> Medical emergency caused by interrupted blood flow to the brain, requiring urgent
                            intervention to prevent brain damage and long-term disability, often treated with
                            clot-dissolving medications or mechanical thrombectomy.</p>
                          <p class="full-details d-none"> Medical emergency caused by interrupted blood flow to the
                            brain, requiring urgent intervention to prevent brain damage and long-term disability, often
                            treated with clot-dissolving medications or mechanical thrombectomy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Aneurysm</h2>
                          <div class="span-line"></div>
                          <p>Weakness in a blood vessel wall leading to abnormal bulging, treated with surgical clipping
                            or endovascular coiling to prevent rupture and life-threatening bleeding.</p>
                          <p class="full-details d-none">Weakness in a blood vessel wall leading to abnormal bulging,
                            treated with surgical clipping or endovascular coiling to prevent rupture and
                            life-threatening bleeding.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Traumatic Brain Injury (TBI)</h2>
                          <div class="span-line"></div>
                          <p> Neurosurgical interventions for severe head injuries, including decompressive craniectomy,
                            hematoma evacuation, or skull reconstruction, aimed at reducing intracranial pressure and
                            preventing further damage.p>
                          <p class="full-details d-none"> Neurosurgical interventions for severe head injuries,
                            including decompressive craniectomy, hematoma evacuation, or skull reconstruction, aimed at
                            reducing intracranial pressure and preventing further damage.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Spinal Disorders</h2>
                          <div class="span-line"></div>
                          <p>Surgical treatments for spinal conditions like herniated discs, spinal stenosis, or spinal
                            deformities, aiming to alleviate pain, decompress nerves, and stabilize the spine.</p>
                          <p class="full-details d-none">Surgical treatments for spinal conditions like herniated discs,
                            spinal stenosis, or spinal deformities, aiming to alleviate pain, decompress nerves, and
                            stabilize the spine.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Peripheral Nerve Disorders</h2>
                          <div class="span-line"></div>
                          <p>Surgical interventions for conditions affecting peripheral nerves, such as carpal tunnel
                            syndrome, nerve entrapment, or nerve tumors, aimed at relieving pain and restoring function.
                          </p>
                          <p class="full-details d-none">Surgical interventions for conditions affecting peripheral
                            nerves, such as carpal tunnel syndrome, nerve entrapment, or nerve tumors, aimed at
                            relieving pain and restoring function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Brain Tumors</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of abnormal growths in the brain, often requiring precise techniques to
                            preserve neurological function and improve outcomes for conditions like gliomas or
                            meningiomas.</p>
                          <p class="full-details d-none">Surgical removal of abnormal growths in the brain, often
                            requiring precise techniques to preserve neurological function and improve outcomes for
                            conditions like gliomas or meningiomas.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Spinal Cord Tumors</h2>
                          <div class="span-line"></div>
                          <p>Surgical resection of tumors affecting the spinal cord or surrounding structures, aiming to
                            relieve compression, restore function, and alleviate pain or neurological deficits.</p>
                          <p class="full-details d-none">Surgical resection of tumors affecting the spinal cord or
                            surrounding structures, aiming to relieve compression, restore function, and alleviate pain
                            or neurological deficits.</p>
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
                          <h2>Posterior Endoscopic Cervical Discectomy (PECD)</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive surgery to remove herniated discs in the cervical spine, relieving nerve
                            compression and associated neck and arm pain.</p>
                          <p class="full-details d-none">Minimally invasive surgery to remove herniated discs in the
                            cervical spine, relieving nerve compression and associated neck and arm pain.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Extended Endoscopic Skull Base Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Advanced procedures using endoscopic techniques to access and treat lesions or tumors at
                            the skull base, minimizing trauma and improving outcomes.</p>
                          <p class="full-details d-none">Advanced procedures using endoscopic techniques to access and
                            treat lesions or tumors at the skull base, minimizing trauma and improving outcomes.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Interventional Neuro Radiology</h2>
                          <div class="span-line"></div>
                          <p>Specialized procedures using imaging guidance to diagnose and treat neurological
                            conditions, such as embolization for aneurysms or coiling for arteriovenous malformations.
                          </p>
                          <p class="full-details d-none">Specialized procedures using imaging guidance to diagnose and
                            treat neurological conditions, such as embolization for aneurysms or coiling for
                            arteriovenous malformations.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Endoscopic Neuro Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive procedures using endoscopes to treat various brain and spine conditions,
                            reducing trauma, recovery time, and risk of complications.</p>
                          <p class="full-details d-none">Minimally invasive procedures using endoscopes to treat various
                            brain and spine conditions, reducing trauma, recovery time, and risk of complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>DBS (Deep Brain Stimulation)</h2>
                          <div class="span-line"></div>
                          <p>Precision implantation of electrodes in the brain to modulate abnormal electrical signals,
                            offering relief for movement disorders like Parkinson's disease or essential tremor.</p>
                          <p class="full-details d-none">Precision implantation of electrodes in the brain to modulate
                            abnormal electrical signals, offering relief for movement disorders like Parkinson's disease
                            or essential tremor.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Craniotomy</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure involving the removal of a portion of the skull to access the brain for
                            tumor resection, aneurysm clipping, or treatment of traumatic brain injury.</p>
                          <p class="full-details d-none">Surgical procedure involving the removal of a portion of the
                            skull to access the brain for tumor resection, aneurysm clipping, or treatment of traumatic
                            brain injury.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Microvascular Decompression (MVD)</h2>
                          <div class="span-line"></div>
                          <p>Delicate neurosurgical procedure to relieve compression of cranial nerves, often performed
                            to treat trigeminal neuralgia or hemifacial spasm.</p>
                          <p class="full-details d-none">Delicate neurosurgical procedure to relieve compression of
                            cranial nerves, often performed to treat trigeminal neuralgia or hemifacial spasm.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Stereotactic Radiosurgery</h2>
                          <div class="span-line"></div>
                          <p>Non-invasive radiation therapy technique that precisely delivers focused beams of radiation
                            to treat brain tumors, arteriovenous malformations, or trigeminal neuralgia, while sparing
                            surrounding healthy tissue.</p>
                          <p class="full-details d-none">Non-invasive radiation therapy technique that precisely
                            delivers focused beams of radiation to treat brain tumors, arteriovenous malformations, or
                            trigeminal neuralgia, while sparing surrounding healthy tissue.</p>
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
              <img src="image/dr-suresh-chandran.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Suresh Chandran C J</h3>
              <p>Coordinator & Senior Consultant</p>
              <h4>MD, DM, DNB, MBBS/Internship</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_syamlal.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Syamlal S</h3>
              <p>Group Coordinator & Senior Consultant</p>
              <h4>MBBS, MD, DM, DNB</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_k_radhakrishnan.jpeg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. K Radhakrishnan</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, FAMS, MD, DM, FAAN </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-kalpana.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. D Kalpana</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, M.D Pediatrics, D.M Neurology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-ashok.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ashok V P</h3>
              <p>Consultant</p>
              <h4>MBBS, MD, DM</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-krishnasree.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Krishnasree K S</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, DNB in General Medicine, DNB in Neurology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-jayakrishnan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. JAYAKRISHNAN C</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MD, D.M (Neurology), DNB</h4>
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
            <p>The team's dedication and expertise in understanding and treating my neurological condition surpassed my
              expectations. Grateful for their compassionate care.</p>
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
            <p>Choosing KIMS for neuroscience care was the best decision I made. The comprehensive approach, from
              diagnosis to treatment, provided me with reassurance and hope. Thank you for restoring my quality of life.
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
            <p>The neuroscience team at KIMS demonstrated unparalleled professionalism and empathy throughout my
              treatment journey. Their innovative approaches and personalized care truly made a difference in managing
              my neurological disorder.</p>
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
                <span>What is neuroscience?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Neuroscience is the study of the nervous system, including the brain, spinal cord, and peripheral
                  nerves, and how they regulate behavior, cognition, and bodily functions.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What are the main branches of neuroscience?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The main branches include cognitive neuroscience, behavioral neuroscience, computational
                  neuroscience, and neurobiology, each focusing on different aspects of the nervous system's function
                  and behavior.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What techniques are used in neuroscience diagnoses?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Techniques include neuroimaging (MRI, fMRI), electrophysiology, molecular biology, optogenetics, and
                  computational modeling, allowing scientists to study brain structure and function at various levels.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What neurological disorders does neuroscience study?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Neuroscience investigates disorders like Alzheimer's, Parkinson's, epilepsy, depression, and
                  schizophrenia, seeking to understand their underlying mechanisms and develop effective treatments.</p>
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
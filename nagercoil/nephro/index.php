<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KIMSHEALTH Nagercoil</title>

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
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:04652713197">04652 713197</a></div>
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
                    <div style="font-size: 14px; font-weight: 600;">Chunkankadai, Nagercoil, Tamil Nadu 629003 </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 text-end pe-lg-0">
                <a href="#bannerSection" class="btn header_btn">Book an appointment </a>
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
              <!-- <h6></h6> -->
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold text-color fs-6"><a href="tel:04652713197">04652 713197</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post" onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Nephro">
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
              <p>One of The Best Nephrology Doctors in Tamilnadu</p>
            </div>
            <div class="about-content">
              <p>At KIMSHEALTH Nagercoil, our Nephrology Department offers comprehensive care for patients with kidney-related conditions, from early-stage disease to complex renal disorders. Our team of experienced nephrologists provides expert evaluation, diagnosis, and treatment for chronic kidney disease, hypertension, electrolyte imbalances, and diabetic nephropathy. We are equipped with state-of-the-art dialysis units, offering both hemodialysis and peritoneal dialysis, ensuring safe and comfortable treatment under expert supervision. The department works closely with other specialties to offer holistic, patient-centered care, with a strong emphasis on lifestyle management, disease prevention, and patient education. With a commitment to clinical excellence and compassionate service, KIMSHEALTH Nagercoil is a trusted destination for kidney care in the region. We aim to improve quality of life and long-term outcomes for all our patients.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 my-lg-auto doctor-col-custom">
            <!-- <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/drmaria_alex_babu.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. J Maria Alex Babu</h3>
                  <p>Consultant Nephrologist</p>
                  <h4>MD , DM Nephrology (SGPGI)</h4>
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
                </div>
              </div>

              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/dr_sukhdev_d_b_singh.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3> Dr. Sukhdev D B Singh  </h3>
                  <p>Consultant Urologist</p>
                  <h4>MS (General Surgery) , MCh (Urology)</h4>
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
                </div>
              </div>

            </div> -->
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/hiaEDcaFyvc" title="Types of dialysis and dietary recommendations for dialysis patients | Dr. J Maria Alex Babu." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/AhKT4jcqdxM" title="Kidney Health Matters: A Conversation with Dr. J Maria Alex Babu  | KIMSHEALTH Nagercoil ." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                          <h2>Chronic Kidney Disease</h2>
                          <div class="span-line"></div>
                          <p>KIMSHEALTH offers early detection and long-term management of CKD through personalized treatment plans, dietary guidance, and medication. Regular monitoring helps slow disease progression and improves quality of life for patients with declining kidney function.</p>
                          <div class="show-area d-none">
                            <p>KIMSHEALTH offers early detection and long-term management of CKD through personalized treatment plans, dietary guidance, and medication. Regular monitoring helps slow disease progression and improves quality of life for patients with declining kidney function.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Acute Kidney Injury</h2>
                          <div class="span-line"></div>
                          <p>Our nephrologists provide immediate care for AKI caused by infections, medications, or dehydration. Rapid diagnosis and treatment—including fluid management and dialysis—help restore kidney function and prevent complications in both outpatient and ICU settings.</p>
                          <div class="show-area d-none">
                            <p>Our nephrologists provide immediate care for AKI caused by infections, medications, or dehydration. Rapid diagnosis and treatment—including fluid management and dialysis—help restore kidney function and prevent complications in both outpatient and ICU settings.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hypertensive Nephropathy</h2>
                          <div class="span-line"></div>
                          <p>We manage kidney damage due to long-standing high blood pressure with tight BP control, kidney function monitoring, and medication. Early intervention helps prevent CKD and reduces cardiovascular risks associated with hypertensive kidney disease.</p>
                          <div class="show-area d-none">
                            <p>We manage kidney damage due to long-standing high blood pressure with tight BP control, kidney function monitoring, and medication. Early intervention helps prevent CKD and reduces cardiovascular risks associated with hypertensive kidney disease.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Diabetic Nephropathy</h2>
                          <div class="span-line"></div>
                          <p>Specialized care for kidney complications from diabetes includes blood sugar control, medication, protein intake management, and regular screening. Our goal is to delay disease progression and prevent end-stage kidney failure in diabetic patients.</p>
                          <div class="show-area d-none">
                            <p>Specialized care for kidney complications from diabetes includes blood sugar control, medication, protein intake management, and regular screening. Our goal is to delay disease progression and prevent end-stage kidney failure in diabetic patients.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Glomerulonephritis</h2>
                          <div class="span-line"></div>
                          <p>KIMSHEALTH offers immunosuppressive therapies and biopsy-based treatment plans for glomerulonephritis, an inflammation of the kidney’s filtering units. Our approach helps preserve kidney function and addresses the underlying autoimmune or infectious cause effectively.</p>
                          <div class="show-area d-none">
                            <p>KIMSHEALTH offers immunosuppressive therapies and biopsy-based treatment plans for glomerulonephritis, an inflammation of the kidney’s filtering units. Our approach helps preserve kidney function and addresses the underlying autoimmune or infectious cause effectively.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Polycystic Kidney Disease</h2>
                          <div class="span-line"></div>
                          <p>We provide genetic counseling, regular screening, and lifestyle guidance for patients with PKD. Our nephrologists manage symptoms, control blood pressure, and monitor kidney size and function to delay progression and improve outcomes.</p>
                          <div class="show-area d-none">
                            <p>We provide genetic counseling, regular screening, and lifestyle guidance for patients with PKD. Our nephrologists manage symptoms, control blood pressure, and monitor kidney size and function to delay progression and improve outcomes.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Kidney Stones and Obstruction</h2>
                          <div class="span-line"></div>
                          <p>Our team collaborates with urology for diagnosis and management of kidney stones and urinary obstructions. Treatment includes medication, fluid therapy, and minimally invasive procedures to relieve pain, restore flow, and prevent recurrence.</p>
                          <div class="show-area d-none">
                            <p>Our team collaborates with urology for diagnosis and management of kidney stones and urinary obstructions. Treatment includes medication, fluid therapy, and minimally invasive procedures to relieve pain, restore flow, and prevent recurrence.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>End-Stage Renal Disease</h2>
                          <div class="span-line"></div>
                          <p>Patients with ESRD receive long-term dialysis care or pre-transplant evaluation. KIMSHEALTH provides maintenance hemodialysis, peritoneal dialysis support, and education on transplant readiness, helping patients lead active, stable lives despite advanced kidney failure.</p>
                          <div class="show-area d-none">
                            <p>Patients with ESRD receive long-term dialysis care or pre-transplant evaluation. KIMSHEALTH provides maintenance hemodialysis, peritoneal dialysis support, and education on transplant readiness, helping patients lead active, stable lives despite advanced kidney failure.</p>
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
                          <h2>Hemodialysis</h2>
                          <div class="span-line"></div>
                          <p>A life-saving procedure for patients with advanced kidney failure. It filters waste, excess fluids, and toxins from the blood using a dialysis machine, typically done 2-3 times per week under expert supervision.</p>
                          <div class="show-area d-none">
                            <P>A life-saving procedure for patients with advanced kidney failure. It filters waste, excess fluids, and toxins from the blood using a dialysis machine, typically done 2-3 times per week under expert supervision.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Peritoneal Dialysis</h2>
                          <div class="span-line"></div>
                          <p>A home-based dialysis technique using the lining of the abdomen (peritoneum) to filter blood. It offers flexibility and is suitable for selected patients who prefer or require an alternative to hemodialysis.</p>
                          <div class="show-area d-none">
                            <P>A home-based dialysis technique using the lining of the abdomen (peritoneum) to filter blood. It offers flexibility and is suitable for selected patients who prefer or require an alternative to hemodialysis.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Kidney Biopsy</h2>
                          <div class="span-line"></div>
                          <p>A diagnostic procedure where a small kidney tissue sample is taken using a needle under ultrasound guidance. It helps diagnose causes of kidney dysfunction, such as glomerulonephritis or nephrotic syndrome.</p>
                          <div class="show-area d-none">
                            <P>A diagnostic procedure where a small kidney tissue sample is taken using a needle under ultrasound guidance. It helps diagnose causes of kidney dysfunction, such as glomerulonephritis or nephrotic syndrome.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Central Venous Catheter Insertion</h2>
                          <div class="span-line"></div>
                          <p>A temporary vascular access procedure for urgent dialysis. A catheter is inserted into a large vein (usually neck or groin), allowing immediate dialysis in patients with acute or end-stage renal failure.</p>
                          <div class="show-area d-none">
                            <P>A temporary vascular access procedure for urgent dialysis. A catheter is inserted into a large vein (usually neck or groin), allowing immediate dialysis in patients with acute or end-stage renal failure.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>AV Fistula Planning & Evaluation</h2>
                          <div class="span-line"></div>
                          <p>Pre-surgical evaluation and post-surgical monitoring of arteriovenous fistulas, which are the preferred long-term access for hemodialysis. Nephrologists ensure proper development and function of the fistula before dialysis begins.</p>
                          <div class="show-area d-none">
                            <P>Pre-surgical evaluation and post-surgical monitoring of arteriovenous fistulas, which are the preferred long-term access for hemodialysis. Nephrologists ensure proper development and function of the fistula before dialysis begins.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Fluid and Electrolyte Management</h2>
                          <div class="span-line"></div>
                          <p>Critical care management of imbalances in sodium, potassium, calcium, and acid-base levels, often seen in hospitalized or dialysis patients. This helps prevent life-threatening complications like arrhythmias or seizures.</p>
                          <div class="show-area d-none">
                            <P>Critical care management of imbalances in sodium, potassium, calcium, and acid-base levels, often seen in hospitalized or dialysis patients. This helps prevent life-threatening complications like arrhythmias or seizures.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hypertension Management in CKD</h2>
                          <div class="span-line"></div>
                          <p>Specialized treatment protocols for controlling high blood pressure in kidney disease patients. This includes medication, dietary plans, and regular monitoring to prevent further kidney damage.</p>
                          <div class="show-area d-none">
                            <P>Specialized treatment protocols for controlling high blood pressure in kidney disease patients. This includes medication, dietary plans, and regular monitoring to prevent further kidney damage.</P>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Anemia Management in Renal Disease</h2>
                          <div class="span-line"></div>
                          <p>Renal-related anemia is treated using iron therapy and erythropoiesis-stimulating agents (ESAs). This improves energy, reduces fatigue, and enhances quality of life in patients with chronic kidney disease.</p>
                          <div class="show-area d-none">
                            <P>Renal-related anemia is treated using iron therapy and erythropoiesis-stimulating agents (ESAs). This improves energy, reduces fatigue, and enhances quality of life in patients with chronic kidney disease.</P>
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
      </div>
    </section>

    <section class="section section-bg" id="expert">
      <div class="container">
        <div class="sec-title">
          <h2>Our Experts</h2>
          <p>Expert Team Ensuring Superior Patient Care.</p>
        </div>

        <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
          
          <!-- <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_jaipal.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Jaipaul. Y</h3>
              <p>Medical Gastroenterologist</p>
              <h4>DNB (Gen Med) , DM (Gastroenterology)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_rajeesh_selvaganesan.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3> Dr. Rejeesh Selvaganesan</h3>
              <p>Surgical Gastroenterologist</p>
              <h4>MS ( Gen Sur) , FCS , FHPMS , MCh. ( Gastro Sur) , D MAS , CCRFCS</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Amal Velse</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, MD, DM Medical Gastroenterology</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div> -->
          
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/drmaria_alex_babu.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. J Maria Alex Babu</h3>
              <p>Consultant Nephrologist</p>
              <h4>MBBS, MD, DM Nephrology (SGPGI)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
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
                <h3>Priya Subramanian</h3>
                <p>Nagercoil, India</p>
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
            <p>Excellent care and professional nephrology treatment at KIMSHEALTH Nagercoil. The doctors are kind and supportive. I feel much healthier and confident now. Highly recommended!</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Arvind Menon</h3>
                <p>Thiruvananthapuram, India</p>
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
              <img src="image/man.png" alt="" class="img-dluid">
            </div>
            <p>My father received great dialysis care here. The nephrology team is efficient, and staff are compassionate. Thank you, KIMSHEALTH Nagercoil, for your amazing support!</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Kavitha Ramesh</h3>
                <p>Madurai, India</p>
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
            <p>After months of discomfort, KIMSHEALTH Nagercoil gave me proper diagnosis and treatment. Their nephrology care is outstanding. I'm grateful for their dedication and excellent service!</p>
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
                <span>What conditions are treated by the Nephrology Department?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>We treat a wide range of kidney-related conditions including chronic kidney disease (CKD), acute kidney injury (AKI), diabetic and hypertensive nephropathy, glomerulonephritis, kidney stones, and end-stage renal disease.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What dialysis services are available at KIMSHEALTH Nagercoil?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>We offer both hemodialysis and peritoneal dialysis in a safe, sterile, and patient-friendly environment, supervised by experienced nephrologists and trained technicians.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>How is chronic kidney disease managed?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>CKD management includes regular monitoring, lifestyle and dietary advice, medication, and treatment of underlying causes like diabetes or hypertension to slow disease progression and avoid complications.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>Can kidney problems be prevented?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Maintaining good hydration, managing blood sugar and blood pressure, avoiding unnecessary painkillers, and regular check-ups can help prevent or delay kidney problems.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What are the early signs of kidney disease?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Symptoms may include fatigue, swelling in legs or face, changes in urine, high blood pressure, or difficulty concentrating. Early detection is key, even if symptoms are mild.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>Is kidney transplant consultation available at KIMSHEALTH Nagercoil?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. We offer pre-transplant evaluation and counseling for patients with end-stage renal disease and coordinate with transplant centers for further treatment.</p>
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
          <p>Copyright © <span class="text-white current-year"></span>. KIMSHOSPITAL Nagercoil. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <div class="sticky-bar">
    <a href="tel:04652713197"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
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

	
	
	<!-- End Google Tag Manager -->
	<style>
		.translate-button-container {
		  position: fixed;
		  bottom: 48px;
		  right: -59px;
		  z-index: 1000;
		}

		/* Button-like style */
		.goog-te-combo {
		  background: #b6202c; /* red gradient */
		  color: #fff;
		  border: none;
		  padding: 10px 20px;
		  font-size: 14px;
		  font-family: Arial, sans-serif;
		  border-radius: 25px;
		  cursor: pointer;
		  appearance: none;
		  -webkit-appearance: none;
		  -moz-appearance: none;
		}

		/* Remove default label */
		.goog-te-gadget span {
		  display: none;
		}

		/* Optional: Remove Google branding (allowed by Google as long as not misleading) */
		.goog-logo-link, .goog-te-banner-frame {
		  display: none !important;
		}

		.goog-te-gadget {
		  color: transparent !important;
		}
	  </style>
	<div id="google_translate_element" class="translate-button-container" ></div>
	<script type="text/javascript">
	function googleTranslateElementInit() {
	  new google.translate.TranslateElement({
		pageLanguage: 'en',
		includedLanguages: 'en,ta', // Only English and Tamil
		layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
	  }, 'google_translate_element');
	}
	</script> 
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
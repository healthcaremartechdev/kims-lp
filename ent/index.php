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
                <input type="hidden" name="speciality" value="ENT">
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
              <h2>KIMSHEALTH ENT Institute</h2>
              <p>One Of The Best ENT Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>The ENT department at KIMSHEALTH provides comprehensive care for various conditions affecting the ear,
                nose, and throat. Our department is equipped with highly qualified doctors and modern equipment. Our
                surgical subspecialty deals with the medical and surgical management of head and neck conditions. We
                offer specialized laryngology services for voice disorders, swallowing disorders, and upper
                aerodigestive diseases. With an efficient team of specialists including otorhinolaryngologists,
                otolaryngologists, head and neck surgeons, and physicians, we are considered one of the best healthcare
                centers in the country. We cover conditions related to the nose and sinuses such as nasal polyps,
                tumors, fungal infections, sinus tumors, nasal allergies, pediatric conditions, and sleep disorders.</p>
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
            <p>Specialized Care For ENT Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Otology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on the diagnosis and treatment of ear-related conditions, including hearing loss, ear
                          infections, and balance disorders.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Rhinology</h5>
                        <div class="under-line"></div>
                        <p>Specializes in the management of disorders affecting the nose and sinuses, such as nasal
                          congestion, sinusitis, and nasal polyps.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Laryngology</h5>
                        <div class="under-line"></div>
                        <p>Deals with the diagnosis and treatment of disorders affecting the larynx (voice box) and
                          vocal cords, including voice disorders, swallowing difficulties, and laryngeal cancer.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Head and Neck Surgery</h5>
                        <div class="under-line"></div>
                        <p>Concentrates on the surgical management of conditions affecting the head and neck region,
                          including tumors, salivary gland disorders, and facial trauma.</p>
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
                          <h2>Otitis Media</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the middle ear often caused by bacterial or viral infections, leading to
                            ear pain, fluid buildup, and potential hearing loss.</p>
                          <p class="full-details d-none">Inflammation of the middle ear often caused by bacterial or
                            viral infections, leading to ear pain, fluid buildup, and potential hearing loss.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Sinusitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the sinuses due to infection, allergies, or structural issues, resulting in
                            nasal congestion, facial pain, and sinus pressure.</p>
                          <p class="full-details d-none">Inflammation of the sinuses due to infection, allergies, or
                            structural issues, resulting in nasal congestion, facial pain, and sinus pressure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Tonsillitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the tonsils usually caused by viral or bacterial infections, resulting in
                            sore throat, difficulty swallowing, and swollen lymph nodes.</p>
                          <p class="full-details d-none">Inflammation of the tonsils usually caused by viral or
                            bacterial infections, resulting in sore throat, difficulty swallowing, and swollen lymph
                            nodes.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Laryngitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the larynx often caused by viral infections or vocal strain, leading to
                            hoarseness, throat pain, and difficulty speaking.</p>
                          <p class="full-details d-none">Inflammation of the larynx often caused by viral infections or
                            vocal strain, leading to hoarseness, throat pain, and difficulty speaking.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Nasal Polyps</h2>
                          <div class="span-line"></div>
                          <p>Noncancerous growths in the nasal passages are often associated with chronic inflammation,
                            causing nasal congestion, loss of smell, and facial pressure.</p>
                          <p class="full-details d-none">Noncancerous growths in the nasal passages are often associated
                            with chronic inflammation, causing nasal congestion, loss of smell, and facial pressure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Vertigo</h2>
                          <div class="span-line"></div>
                          <p>Sensation of spinning or dizziness often due to inner ear problems such as vestibular
                            disorders, resulting in balance issues, nausea, and vomiting.</p>
                          <p class="full-details d-none">Sensation of spinning or dizziness often due to inner ear
                            problems such as vestibular disorders, resulting in balance issues, nausea, and vomiting.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Allergic Rhinitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the nasal passages triggered by allergens like pollen or dust, leading to
                            sneezing, runny nose, and itchy eyes.</p>
                          <p class="full-details d-none">Inflammation of the nasal passages triggered by allergens like
                            pollen or dust, leading to sneezing, runny nose, and itchy eyes.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Sleep Apnea</h2>
                          <div class="span-line"></div>
                          <p>Sleep disorder characterized by interrupted breathing during sleep due to airway
                            obstruction or central nervous system issues, resulting in daytime fatigue and increased
                            risk of health problems.</p>
                          <p class="full-details d-none">Sleep disorder characterized by interrupted breathing during
                            sleep due to airway obstruction or central nervous system issues, resulting in daytime
                            fatigue and increased risk of health problems.</p>
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
                          <h2>Adenoidectomy</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of the adenoids, often performed to alleviate chronic ear infections,
                            sinusitis, or obstructive sleep apnea in children by improving airflow and reducing
                            infection risk.</p>
                          <p class="full-details d-none">Surgical removal of the adenoids, often performed to alleviate
                            chronic ear infections, sinusitis, or obstructive sleep apnea in children by improving
                            airflow and reducing infection risk.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Mastoidectomy</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure to remove infected mastoid air cells, typically performed to treat
                            chronic otitis media or mastoiditis and prevent complications such as hearing loss or
                            meningitis.</p>
                          <p class="full-details d-none">Surgical procedure to remove infected mastoid air cells,
                            typically performed to treat chronic otitis media or mastoiditis and prevent complications
                            such as hearing loss or meningitis.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Tympanoplasty</h2>
                          <div class="span-line"></div>
                          <p>Surgical repair of the eardrum or middle ear structures, commonly performed to restore
                            hearing, treat chronic ear infections, or repair eardrum perforations caused by trauma or
                            infection.</p>
                          <p class="full-details d-none">Surgical repair of the eardrum or middle ear structures,
                            commonly performed to restore hearing, treat chronic ear infections, or repair eardrum
                            perforations caused by trauma or infection.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Septoplasty</h2>
                          <div class="span-line"></div>
                          <p>Surgical correction of a deviated nasal septum, aimed at improving nasal airflow, reducing
                            nasal congestion, and alleviating symptoms such as difficulty breathing, snoring, or
                            recurrent sinus infections.</p>
                          <p class="full-details d-none">Surgical correction of a deviated nasal septum, aimed at
                            improving nasal airflow, reducing nasal congestion, and alleviating symptoms such as
                            difficulty breathing, snoring, or recurrent sinus infections.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Turbinate Reduction</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure to reduce the size of nasal turbinates, often performed to alleviate
                            chronic nasal congestion, improve nasal breathing, and enhance overall nasal airflow.</p>
                          <p class="full-details d-none">Surgical procedure to reduce the size of nasal turbinates,
                            often performed to alleviate chronic nasal congestion, improve nasal breathing, and enhance
                            overall nasal airflow.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Thyroidectomy</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of part or all of the thyroid gland, typically indicated for thyroid
                            nodules, goiter, or thyroid cancer, aiming to alleviate symptoms and prevent complications.
                          </p>
                          <p class="full-details d-none">Surgical removal of part or all of the thyroid gland, typically
                            indicated for thyroid nodules, goiter, or thyroid cancer, aiming to alleviate symptoms and
                            prevent complications.</p>
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
              <img src="image/dr-suresh-kumar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. M Suresh Kumar</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, DLO, MS, DNB, MNAMS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vinod-felix.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinod Felix</h3>
              <p>Consultant </p>
              <h4>MBBS, MS (ENT) </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/skeleton.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Salil Kumar K</h3>
              <p>Hon. Sr. Consultant</p>
              <h4>MBBS, Diploma (Otorhinolaryngology), MS (ENT)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/skeleton.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Mohammed Noushad</h3>
              <p>Senior Consultant</p>
              <h4>MBBS, MS(ENT)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-anish-bava-salim.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Anish Bava Salim</h3>
              <p>Consultant</p>
              <h4>MBBS, M.S (ORL)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_k_s_.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. K Shakthesh</h3>
              <p>Visiting Consultant</p>
              <h4>MBBS, MS(ENT & Head and Neck Surgery)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/skeleton.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Nithya R</h3>
              <p>Pediatric ENT Specialist</p>
              <h4>MBBS, MS (ENT), DNB, </h4>
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
            <p>Exceptional care at KIMSHEALTH ENT department! The team's expertise and compassion made my treatment a
              breeze. I'm grateful for their dedication to restoring my hearing and improving my quality of life."</p>
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
            <p>KIMSHEALTH's ENT specialists provided top-notch care for my sinus issues. From diagnosis to treatment,
              they were thorough and attentive, ensuring I received the best possible outcome. Highly recommend their
              services!</p>
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
            <p>KIMSHEALTH's ENT team they addressed my throat condition with professionalism and kindness, guiding me
              through the entire process. Thank you for restoring my voice and confidence.</p>
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
                <span>What does ENT stand for, and what does it encompass?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>ENT stands for Ear, Nose, and Throat. It encompasses disorders related to these areas, including
                  infections, allergies, tumors, hearing loss, and throat conditions</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>When should I see an ENT specialist?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You should see an ENT specialist if you experience persistent ear pain, sinus issues, throat
                  discomfort, hearing loss, or voice changes.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What are common ear, nose, and throat disorders?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common disorders include ear infections, sinusitis, allergies, deviated septum, tonsillitis, vocal
                  cord issues, and hearing loss.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What diagnostic tests are performed during an ENT examination?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Diagnostic tests may include otoscopy, endoscopy, audiometry, imaging scans, allergy testing, and
                  throat cultures</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What treatment options are available for conditions like sinusitis or tonsillitis?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Treatment options may include medications, nasal sprays, allergy shots, surgery for sinusitis, and
                  tonsillectomy for tonsillitis</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>Are there surgical procedures performed by ENT specialists?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, ENT specialists perform various surgical procedures such as tonsillectomy, adenoidectomy, sinus
                  surgery, ear tube placement, and vocal cord surgery.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>How can I prevent ear infections or other ENT-related issues?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>To prevent ear infections and ENT-related issues, practice good hygiene, avoid exposure to loud
                  noises, wear ear protection, manage allergies, and seek prompt treatment for infections.</p>
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
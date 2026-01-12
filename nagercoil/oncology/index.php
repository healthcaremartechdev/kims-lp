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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

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
                <span class="text-lg fw-bold text-color fs-6"><a href="tel:04652713197">04652 713197</a></span>
              </div>
              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post" onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Oncology">
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile Number" pattern="[0-9]{10}" title="Should be 10 digit number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" required>
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
              <h2>KIMSHEALTH Nagercoil Oncology Institute</h2>
              <p>One Of The Best Oncology Hospitals In Tamil Nadu</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH's Oncology Department stands as a ray of hope and healing for those battling cancer. With a
                multidisciplinary approach, it offers comprehensive cancer care, including diagnosis, treatment, and
                supportive therapies. The department comprises state-of-the-art technology and a team of renowned
                oncologists, surgeons, radiation therapists, and supportive care specialists who collaborate to tailor
                personalized treatment plans for each patient. From medical oncology to surgical interventions and
                radiation therapy, KIMSHEALTH ensures access to cutting-edge treatments and compassionate care. With a
                focus on innovation, research, and holistic patient support, KIMSHEALTH Oncology Department strives to
                improve outcomes and enhance the quality of life for cancer patients.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 my-lg-auto doctor-col-custom">
            <!-- <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/drkumanan_j.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Kumanan J</h3>
                  <p>Medical Oncologist</p>
                  <h4>M.D. (Gen Med) DM (Med Onco)</h4>
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
                </div>
              </div>

              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/dr_lala_g_anandarobin.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Lala Gladson Ananda Robin</h3>
                  <p>Surgical Oncologist</p>
                  <h4>MS (Gen Sur) ,  DrNB (SurOnco) , aMAS (Upper GI Sur)</h4>
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
                </div>
              </div>

            </div> -->

            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/5p1Y42hpUHQ" title="Signs and symptoms of oral cancer by Dr. Lala G. Anandarobin, Associate Consultant surgical oncology" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>

              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/xpubhadSED8" title="Breast Cancer Awareness: Early Detection Methods Explained by Dr. Kumanan J | KIMSHEALTH Nagercoil" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
            <p>Specialized Care For Cancer Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Surgical Oncology</h5>
                        <div class="under-line"></div>
                        <p>Specializes in cancer surgery, including tumor removal, aiming to treat various cancer types
                          effectively through surgical interventions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Medical Oncology</h5>
                        <div class="under-line"></div>
                        <p>Our Medical Oncology team provides advanced, personalized cancer care with therapies like chemotherapy, immunotherapy, and targeted treatments.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Radiation Oncology</h5>
                        <div class="under-line"></div>
                        <p>Administers radiation therapy to precisely target and eradicate cancer cells while sparing
                          healthy tissue from damage.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Hematologic Oncology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnosing and treating blood-related cancers like leukemia, lymphoma, and
                          multiple myeloma affecting the blood and lymphatic system.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Multidisciplinary Tumor Board</h5>
                        <div class="under-line"></div>
                        <p>Our Multidisciplinary Tumor Board is a collaborative platform where a team of cancer specialists come together to develop personalized and evidence-based treatment plans for patients with complex or challenging cancer diagnoses.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Palliative Care</h5>
                        <div class="under-line"></div>
                        <p>Our Palliative Care Department enhances quality of life by providing holistic relief from pain, symptoms, and emotional distress</p>
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
                          <h2>Breast Cancer</h2>
                          <div class="span-line"></div>
                          <p>Breast cancer forms in the cells of the breast tissue, often presenting as a lump or
                            abnormality. Early detection through screenings like mammograms can improve treatment
                            outcomes and survival rates.</p>
                          <p class="full-details d-none">Breast cancer forms in the cells of the breast tissue, often
                            presenting as a lump or abnormality. Early detection through screenings like mammograms can
                            improve treatment outcomes and survival rates.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Colorectal Cancer</h2>
                          <div class="span-line"></div>
                          <p>Colorectal cancer affects the colon or rectum, often developing from precancerous polyps.
                            Symptoms may include changes in bowel habits or rectal bleeding. Screening tests like
                            colonoscopies can aid in early detection.</p>
                          <p class="full-details d-none">Colorectal cancer affects the colon or rectum, often developing
                            from precancerous polyps. Symptoms may include changes in bowel habits or rectal bleeding.
                            Screening tests like colonoscopies can aid in early detection.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Thyroid Cancer</h2>
                          <div class="span-line"></div>
                          <p>Thyroid cancer originates in the cells of the thyroid gland, located in the neck. Symptoms
                            may include a lump in the neck, difficulty swallowing, or hoarseness. Treatment often
                            involves surgery, radioactive iodine therapy, or hormone therapy.</p>
                          <p class="full-details d-none">Thyroid cancer originates in the cells of the thyroid gland,
                            located in the neck. Symptoms may include a lump in the neck, difficulty swallowing, or
                            hoarseness. Treatment often involves surgery, radioactive iodine therapy, or hormone
                            therapy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>


                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Cervical Cancer</h2>
                          <div class="span-line"></div>
                          <p>Cervical cancer develops in the cells of the cervix, often caused by human papillomavirus
                            (HPV) infection. Regular Pap tests and HPV vaccinations can help prevent and detect this
                            cancer early.</p>
                          <p class="full-details d-none">Cervical cancer develops in the cells of the cervix, often
                            caused by human papillomavirus (HPV) infection. Regular Pap tests and HPV vaccinations can
                            help prevent and detect this cancer early.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Sarcoma</h2>
                          <div class="span-line"></div>
                          <p>Sarcoma is a rare type of cancer that originates in the connective tissues of the body,
                            such as muscles, bones, or cartilage. Early diagnosis and specialized treatment are crucial
                            for optimal outcomes.</p>
                          <p class="full-details d-none">Sarcoma is a rare type of cancer that originates in the
                            connective tissues of the body, such as muscles, bones, or cartilage. Early diagnosis and
                            specialized treatment are crucial for optimal outcomes.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Brain Tumors</h2>
                          <div class="span-line"></div>
                          <p>Brain tumors originate in the brain tissue and can be benign or malignant. Symptoms vary
                            depending on the tumor location and size, often including headaches, seizures, or changes in
                            cognition.</p>
                          <p class="full-details d-none">Brain tumors originate in the brain tissue and can be benign or
                            malignant. Symptoms vary depending on the tumor location and size, often including
                            headaches, seizures, or changes in cognition.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                    <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Melanoma</h2>
                          <div class="span-line"></div>
                          <p>Melanoma is a type of skin cancer that develops in the melanocytes, the cells responsible
                            for skin pigment. Early detection through skin exams and self-checks is crucial for
                            successful treatment.</p>
                          <p class="full-details d-none">Melanoma is a type of skin cancer that develops in the
                            melanocytes, the cells responsible for skin pigment. Early detection through skin exams and
                            self-checks is crucial for successful treatment.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Leukemia</h2>
                          <div class="span-line"></div>
                          <p>Leukemia is a type of blood cancer that affects the bone marrow, leading to abnormal white blood cell production. Symptoms may include fatigue, bruising, or frequent infections. Treatment often involves chemotherapy.</p>
                          <p class="full-details d-none">Leukemia is a type of blood cancer that affects the bone marrow, leading to abnormal white blood cell production. Symptoms may include fatigue, bruising, or frequent infections. Treatment often involves chemotherapy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      




                    </div>

                  </div>
                </div>

                <div class="tab-pane" id="treatment">
                  <div class="owl-carousel owl-theme condition-slider1 dots-morphing">
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Cancer Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Cancer surgeries involve removing tumors or cancerous tissues from the body. They can be
                            curative, palliative, or diagnostic, depending on the cancer type, stage, and treatment
                            goals.</p>
                          <p class="full-details d-none">Cancer surgeries involve removing tumors or cancerous tissues
                            from the body. They can be curative, palliative, or diagnostic, depending on the cancer
                            type, stage, and treatment goals.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Radiation</h2>
                          <div class="span-line"></div>
                          <p>Radiation therapy uses high-energy beams to destroy cancer cells or shrink tumors. It's
                            often used alongside other treatments like surgery or chemotherapy to target cancerous
                            cells.</p>
                          <p class="full-details d-none">Radiation therapy uses high-energy beams to destroy cancer
                            cells or shrink tumors. It's often used alongside other treatments like surgery or
                            chemotherapy to target cancerous cells.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>




                    </div>
                    <div class="disease-item">

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Chemotherapy</h2>
                          <div class="span-line"></div>
                          <p>Chemotherapy involves the use of drugs to destroy cancer cells or slow their growth. It can
                            be administered orally, intravenously, or topically, targeting cancer cells throughout the
                            body to treat various types of cancer.</p>
                          <p class="full-details d-none">Chemotherapy involves the use of drugs to destroy cancer cells
                            or slow their growth. It can be administered orally, intravenously, or topically, targeting
                            cancer cells throughout the body to treat various types of cancer.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>BMT (Bone Marrow Transplant)</h2>
                          <div class="span-line"></div>
                          <p>BMT involves replacing damaged or diseased bone marrow with healthy infected cells to treat conditions like leukemia, lymphoma, or certain genetic disorders, aiming to restore normal blood cell production.</p>
                          <p class="full-details d-none">BMT involves replacing damaged or diseased bone marrow with healthy infected cells to treat conditions like leukemia, lymphoma, or certain genetic disorders, aiming to restore normal blood cell production.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>




                    </div>
                    <div class="disease-item">

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Immunotherapy</h2>
                          <div class="span-line"></div>
                          <p>Immunotherapy uses the body's immune system to fight cancer, boosting its ability to
                            recognize and destroy cancer cells. It's a promising treatment for various cancers, offering
                            durable responses and fewer side effects.</p>
                          <p class="full-details d-none">Immunotherapy uses the body's immune system to fight cancer,
                            boosting its ability to recognize and destroy cancer cells. It's a promising treatment for
                            various cancers, offering durable responses and fewer side effects.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>HIPEC (Hyperthermic Intraperitoneal Chemotherapy) </h2>
                          <div class="span-line"></div>
                          <p>HIPEC is a specialized cancer treatment that delivers heated chemotherapy directly into the
                            abdomen during surgery to treat advanced abdominal cancers, aiming to kill remaining cancer
                            cells and prevent recurrence.</p>
                          <p class="full-details d-none">HIPEC is a specialized cancer treatment that delivers heated
                            chemotherapy directly into the abdomen during surgery to treat advanced abdominal cancers,
                            aiming to kill remaining cancer cells and prevent recurrence.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>



                    </div>
                    <!-- <div class="disease-item">

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>PETCT (Positron Emission Tomography-Computed Tomography)</h2>
                          <div class="span-line"></div>
                          <p>PETCT combines functional imaging (PET) with anatomical imaging (CT) to detect cancer,
                            assess its spread, and monitor treatment response, providing detailed information crucial
                            for cancer diagnosis and management.</p>
                          <p class="full-details d-none">PETCT combines functional imaging (PET) with anatomical imaging
                            (CT) to detect cancer, assess its spread, and monitor treatment response, providing detailed
                            information crucial for cancer diagnosis and management.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>


                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Tumors</h2>
                          <div class="span-line"></div>
                          <p>Tumors are abnormal growths of cells that can be benign (non-cancerous) or malignant
                            (cancerous). They can develop in any part of the body and require different treatments based
                            on their type and location.</p>
                          <p class="full-details d-none">Tumors are abnormal growths of cells that can be benign
                            (non-cancerous) or malignant (cancerous). They can develop in any part of the body and
                            require different treatments based on their type and location.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div> -->

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
              <img src="image/drkumanan_j.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Kumanan J</h3>
              <p>Medical Oncologist</p>
              <h4>M.D. (Gen Med) DM (Med Onco)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_lala_g_anandarobin.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Lala Gladson Ananda Robin</h3>
              <p>Surgical Oncologist</p>
              <h4>MS (Gen Sur) , DrNB (SurOnco) , aMAS (Upper GI Sur)</h4>
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
                <h3>Jeeva Suresh</h3>
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
            <p>Dr.lala treated us well. Every service is good. Doctor cares us well and treated with a smiling face. In my experience, he is the best doctor. I'll highly recommend KIMS Nagercoil to everyone.</p>
          </div>

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
            <p>KIMSHEALTH's oncology team provided exceptional care during my cancer treatment journey. Their expertise
              and compassionate approach made a challenging time more manageable, and I'm grateful for their dedication
              to my well-being.</p>
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
            <p>Choosing KIMSHEALTH for my oncology care was the best decision I made. The oncology team's
              professionalism and support guided me through treatment, and their personalized approach ensured I felt
              confident and cared for every step of the way.</p>
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
            <p>I cannot thank KIMSHEALTH's oncology department enough for their outstanding care. From diagnosis to
              treatment and follow-up, they provided comprehensive support and expertise, giving me hope and strength
              during a difficult time.</p>
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
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                <span>What is oncology?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Oncology is the branch of medicine dedicated to the study, diagnosis, treatment, and prevention of
                  cancer.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What types of cancers does oncology cover?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Oncology covers all types of cancers, including but not limited to breast cancer, lung cancer,
                  colorectal cancer, leukemia, lymphoma, and melanoma.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What are the common symptoms of cancer?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common symptoms include unexplained weight loss, persistent fatigue, changes in bowel or bladder
                  habits, unusual bleeding or bruising, and lumps or changes in the skin.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>How is cancer diagnosed?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Cancer diagnosis involves various methods such as imaging tests (MRI, CT scans), biopsies, blood
                  tests, and molecular or genetic tests to identify cancer type, stage, and treatment options.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What are the treatment options in oncology?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Treatment options include surgery, chemotherapy, radiation therapy, targeted therapy, immunotherapy,
                  hormone therapy, and bone marrow transplantation, tailored to individual cancer types and stages.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>Can cancer be prevented?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>While not all cancers are preventable, lifestyle changes such as maintaining a healthy weight,
                  regular exercise, avoiding tobacco and excessive alcohol consumption, and getting screened for cancer
                  can reduce the risk.</p>
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
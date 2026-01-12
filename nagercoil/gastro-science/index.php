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
                <input type="hidden" name="speciality" value="Medical Gastro">
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
              <h2>KIMSHEALTH Nagercoil Gastroenterology Institute</h2>
              <p>One of The Best Gastro sciences Hospitals In Tamil Nadu</p>
            </div>
            <div class="about-content">
              <p>The KIMSHEALTH Gastroenterology department specializes in preventing, diagnosing, and managing
                digestive and hepatobiliary diseases with modern equipment and advanced intensive care units for adults
                and children. The department focuses on the gastrointestinal tract, including the upper GI tract
                (esophagus, stomach, duodenum) and lower GI tract (large and small intestines, anus), as well as the
                hepatobiliary system (liver, pancreas, bile ducts, gall bladder). Our expert gastroenterologists provide
                comprehensive care for conditions like colon polyps, gastrointestinal cancer, liver cirrhosis, and more,
                ensuring high-quality treatment for patients with digestive and hepatobiliary disorders.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 my-lg-auto doctor-col-custom">
            <!-- <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/dr_jaipal.jpg" alt="" class="img-fluid">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Jaipaul. Y</h3>
                  <p>Medical Gastroenterologist</p>
                  <h4>DNB (Gen Med) , DM (Gastroenterology) </h4>
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
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
                  <a href="#" class="btn btn-primary"> Request An Appointment </a>
                </div>
              </div>

            </div> -->
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/9nCcken6b2A" title="Overcoming Severe GI Bleeding: Mr. M. Ayyathurai&#39;s Inspiring Recovery at KIMSHEALTH, Nagercoil" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/WmkSaivcyRI" title="Endoscopy for diagnosing and treating gastrointestinal issues. Dr. Jaipaul Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
            <p>Specialized Care For Gastro-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Hepatology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on the diagnosis and management of liver diseases, including hepatitis, fatty liver disease, and cirrhosis</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Endoscopy</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnostic procedures involving the use of endoscopes to visualize and treat conditions of the gastrointestinal tract, including colonoscopy gastroscopy, and ERCP</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pancreatology</h5>
                        <div class="under-line"></div>
                        <p>Specializes in the diagnosis and treatment of pancreatic disorders, such as pancreatitis,
                          pancreatic cancer, and pancreatic cysts..</p>
                      </div>
                    </div>
                  </div>


                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Nutritional Gastroenterology</h5>
                        <div class="under-line"></div>
                        <p> Addresses nutritional issues related to gastrointestinal diseases, providing dietary
                          counseling and management for conditions such as malabsorption syndromes, inflammatory bowel
                          disease, and obesity.</p>
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
                          <h2>Gastroesophageal Reflux Disease (GERD)</h2>
                          <div class="span-line"></div>
                          <p>Chronic condition where stomach acid flows back into the esophagus, causing heartburn and
                            potential complications like esophagitis or Barrett's esophagus.</p>
                          <p class="full-details d-none">Chronic condition where stomach acid flows back into the
                            esophagus, causing heartburn and potential complications like esophagitis or Barrett's
                            esophagus.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Peptic Ulcer Disease</h2>
                          <div class="span-line"></div>
                          <p>Open sores in the lining of the stomach or duodenum, often caused by H. pylori infection or
                            NSAID use, leading to abdominal pain or bleeding.</p>
                          <p class="full-details d-none">Open sores in the lining of the stomach or duodenum, often
                            caused by H. pylori infection or NSAID use, leading to abdominal pain or bleeding.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Inflammatory Bowel Disease (IBD)</h2>
                          <div class="span-line"></div>
                          <p>Chronic inflammation of the digestive tract, comprising Crohn's disease and ulcerative
                            colitis, causing abdominal pain, diarrhea, and potential complications like strictures or
                            fistulas.</p>
                          <p class="full-details d-none">Chronic inflammation of the digestive tract, comprising Crohn's
                            disease and ulcerative colitis, causing abdominal pain, diarrhea, and potential
                            complications like strictures or fistulas.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Irritable Bowel Syndrome (IBS</h2>
                          <div class="span-line"></div>
                          <p>Functional gastrointestinal disorder characterized by abdominal pain, bloating, and changes
                            in bowel habits, without structural abnormalities, often triggered by stress or diet.</p>
                          <p class="full-details d-none">Functional gastrointestinal disorder characterized by abdominal
                            pain, bloating, and changes in bowel habits, without structural abnormalities, often
                            triggered by stress or diet.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Celiac Disease</h2>
                          <div class="span-line"></div>
                          <p>Autoimmune disorder triggered by gluten consumption, damaging the small intestine's lining,
                            leading to malabsorption of nutrients, diarrhea, and other gastrointestinal symptoms..</p>
                          <p class="full-details d-none">Autoimmune disorder triggered by gluten consumption, damaging
                            the small intestine's lining, leading to malabsorption of nutrients, diarrhea, and other
                            gastrointestinal symptoms.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Gastrointestinal Bleeding</h2>
                          <div class="span-line"></div>
                          <p>Occurs when there's bleeding in the digestive tract, manifesting as vomiting blood, passing
                            black stools, or rectal bleeding, requiring urgent medical attention for diagnosis and
                            treatment.</p>
                          <p class="full-details d-none">Occurs when there's bleeding in the digestive tract,
                            manifesting as vomiting blood, passing black stools, or rectal bleeding, requiring urgent
                            medical attention for diagnosis and treatment.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Gallstone Disease</h2>
                          <div class="span-line"></div>
                          <p>Formation of hardened deposits in the gallbladder or bile ducts, causing abdominal pain,
                            nausea, and potential complications like biliary colic or pancreatitis.</p>
                          <p class="full-details d-none">Formation of hardened deposits in the gallbladder or bile
                            ducts, causing abdominal pain, nausea, and potential complications like biliary colic or
                            pancreatitis.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Liver Cirrhosis</h2>
                          <div class="span-line"></div>
                          <p>Progressive scarring of the liver due to chronic liver disease, leading to liver
                            dysfunction, portal hypertension, and complications like ascites or hepatic encephalopathy.
                          </p>
                          <p class="full-details d-none">Progressive scarring of the liver due to chronic liver disease,
                            leading to liver dysfunction, portal hypertension, and complications like ascites or hepatic
                            encephalopathy.</p>
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
                          <h2>ERCP (Endoscopic Retrograde Cholangiopancreatography)</h2>
                          <div class="span-line"></div>
                          <p>ERCP is a specialized procedure combining endoscopy and fluoroscopy to diagnose and treat conditions of the bile ducts, pancreas, and gallbladder, such as stones, strictures, and tumors, with precision.</p>
                          <p class="full-details d-none">ERCP is a specialized procedure combining endoscopy and fluoroscopy to diagnose and treat conditions of the bile ducts, pancreas, and gallbladder, such as stones, strictures, and tumors, with precision.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Therapeutic Endoscopy</h2>
                          <div class="span-line"></div>
                          <p>Therapeutic endoscopy involves advanced techniques to treat gastrointestinal conditions like bleeding, strictures, tumors, and stones. It offers minimally invasive solutions, reducing the need for open surgery and promoting faster recovery.</p>
                          <p class="full-details d-none">Therapeutic endoscopy involves advanced techniques to treat gastrointestinal conditions like bleeding, strictures, tumors, and stones. It offers minimally invasive solutions, reducing the need for open surgery and promoting faster recovery.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Colonoscopy</h2>
                          <div class="span-line"></div>
                          <p>Screening procedure using a flexible tube to examine the colon for abnormalities, detecting
                            and preventing colorectal cancer through polyp removal and biopsy.</p>
                          <p class="full-details d-none">Screening procedure using a flexible tube to examine the colon
                            for abnormalities, detecting and preventing colorectal cancer through polyp removal and
                            biopsy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Upper Endoscopy (EGD)</h2>
                          <div class="span-line"></div>
                          <p>Diagnostic procedure examining the esophagus, stomach, and upper small intestine for
                            abnormalities such as ulcers, inflammation, or tumors, enabling targeted treatment.</p>
                          <p class="full-details d-none">Diagnostic procedure examining the esophagus, stomach, and
                            upper small intestine for abnormalities such as ulcers, inflammation, or tumors, enabling
                            targeted treatment.</p>
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
              <img src="image/dr_jaipal.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Jaipaul. Y</h3>
              <p>Medical Gastroenterologist</p>
              <h4>DNB (Gen Med) , DM (Gastroenterology) </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
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
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/amal_Velse.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Amal Velse</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, MD, DM Medical Gastroenterology</h4>
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
            <p>KIMSHEALTH's Gastroenterology department provided me with exceptional care. From diagnosis to treatment,
              their expertise and support were invaluable. Thank you for making my journey towards gastrointestinal
              health a positive one.</p>
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
            <p>I am incredibly grateful for the care I received at KIMSHEALTH's Gastroenterology department. The team's
              professionalism, thoroughness, and kindness made all the difference in my treatment experience. Highly
              recommend their services..</p>
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
            <p>My experience with KIMSHEALTH's Gastroenterology team was outstanding. Their personalized approach and
              attention to detail ensured I received the best possible care. Thank you for your dedication to patient
              well-being.</p>
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
                <span>What is Gastroenterology?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Gastroenterology is the branch of medicine focused on the digestive system's health, including the
                  esophagus, stomach, intestines, liver, gallbladder, and pancreas..</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>When should I see a gastroenterologist?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You should see a gastroenterologist if you experience persistent symptoms like abdominal pain,
                  bloating, changes in bowel habits, or difficulty swallowing.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What conditions do gastroenterologists treat?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Gastroenterologists treat a wide range of conditions, including acid reflux, inflammatory bowel
                  disease, liver disease, gallbladder issues, and colorectal cancer.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What tests and procedures do gastroenterologists perform?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Gastroenterologists perform tests like endoscopy, colonoscopy, and imaging studies to diagnose and
                  treat gastrointestinal conditions effectively.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How can I prepare for a gastroenterology procedure?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Your gastroenterologist will provide specific instructions for preparation, which may include dietary
                  restrictions, fasting, and bowel preparation.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>How can I maintain digestive health?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Maintaining digestive health involves eating a balanced diet, staying hydrated, exercising regularly,
                  avoiding smoking and excessive alcohol consumption, and seeking timely medical care for any digestive
                  concerns.</p>
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
    <a href="tel:04652713197"><i class="fa-solid fa-phone phone-icon me-2"></i>Call Us for Appointment</a>
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
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
                <input type="hidden" name="speciality" value="Emergency">
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
              <h2>KIMSHEALTH Emergency Institute</h2>
              <p>One Of The Best Emergency Centres In Kerala</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH's Emergency Medicine department handles a wide array of medical and surgical emergencies,
                setting the standard for quality care. Accredited with NABH for ER standards since 2017, it comprises
                highly trained doctors and nurses specialized in handling emergency and trauma cases. From
                life-threatening situations to urgent medical needs, patients receive top-notch care at KIMSHEALTH.
                With a commitment to excellence and a patient-centric approach, KIMSHEALTH ensures that individuals
                across all spectrums of healthcare receive timely and effective treatment, making it a trusted
                destination for emergency medical services in the region.</p>
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

    <!-- <section class="section speciality-section" id="speciality">
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
                        <h5>Arrhythmia</h5>
                        <div class="under-line"></div>
                        <p>Heartbeat irregularities, either too fast or too slow, causing symptoms like palpitations; managed with medications or procedures like ablation.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Heart Failure</h5>
                        <div class="under-line"></div>
                        <p>Heart's inability to pump enough blood, leading to symptoms like breathlessness and swelling; treated with medications or devices.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Coronary Artery Disease</h5>
                        <div class="under-line"></div>
                        <p>Plaque buildup in heart arteries restricting blood flow, resulting in chest pain or breathlessness; managed with medications or procedures.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Congenital Heart Disease</h5>
                        <div class="under-line"></div>
                        <p>Heart defects from birth, ranging from mild to severe, requiring monitoring, medication, or surgical correction.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Heart Valve Disease</h5>
                        <div class="under-line"></div>
                        <p> Heart valve malfunction causing symptoms like chest pain or fatigue; treated with medication, valve repair, or replacement.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Angina</h5>
                        <div class="under-line"></div>
                        <p>Chest pain or discomfort due to reduced blood flow to the heart; often triggered by physical exertion or stress; relieved by rest or medications like nitroglycerin.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Atherosclerosis</h5>
                        <div class="under-line"></div>
                        <p>Artery plaque buildup, leading to heart disease or stroke, managed with medication, lifestyle changes, or procedures.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Heart Attack</h5>
                        <div class="under-line"></div>
                        <p> Blockage of heart blood flow causing chest pain or nausea; requires immediate medical attention for blood flow restoration.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

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
                          <h2>Myocardial Infarction (Heart Attack)</h2>
                          <div class="span-line"></div>
                          <p>Sudden chest pain, shortness of breath, and nausea may signal a heart attack. Prompt
                            medical attention is crucial to minimize heart muscle damage and prevent life-threatening
                            complications.</p>
                          <p class="full-details d-none">Sudden chest pain, shortness of breath, and nausea may signal a
                            heart attack. Prompt medical attention is crucial to minimize heart muscle damage and
                            prevent life-threatening complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Ischemic Stroke</h2>
                          <div class="span-line"></div>
                          <p>Symptoms include sudden weakness or numbness on one side of the body, difficulty speaking,
                            and vision changes. Immediate treatment can prevent brain damage and long-term disability.
                          </p>
                          <p class="full-details d-none">Symptoms include sudden weakness or numbness on one side of the
                            body, difficulty speaking, and vision changes. Immediate treatment can prevent brain damage
                            and long-term disability.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Respiratory Distress (Pneumothorax)</h2>
                          <div class="span-line"></div>
                          <p>Sharp chest pain, shortness of breath, and rapid breathing may indicate a collapsed lung.
                            Emergency intervention with chest tube insertion is vital to reinflate the lung and restore
                            breathing.</p>
                          <p class="full-details d-none">Sharp chest pain, shortness of breath, and rapid breathing may
                            indicate a collapsed lung. Emergency intervention with chest tube insertion is vital to
                            reinflate the lung and restore breathing.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Anaphylaxis</h2>
                          <div class="span-line"></div>
                          <p>Rapid onset of hives, swelling, difficulty breathing, and low blood pressure after exposure
                            to an allergen. Immediate administration of epinephrine is critical to counteract severe
                            allergic reactions.</p>
                          <p class="full-details d-none">Rapid onset of hives, swelling, difficulty breathing, and low
                            blood pressure after exposure to an allergen. Immediate administration of epinephrine is
                            critical to counteract severe allergic reactions.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Major Trauma (Polytrauma)</h2>
                          <div class="span-line"></div>
                          <p>Severe injuries from accidents or falls, with symptoms like bleeding, fractures, or head
                            trauma. Rapid assessment and resuscitation are essential to stabilize the patient and
                            prevent further complications.</p>
                          <p class="full-details d-none">Severe injuries from accidents or falls, with symptoms like
                            bleeding, fractures, or head trauma. Rapid assessment and resuscitation are essential to
                            stabilize the patient and prevent further complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Diabetic Ketoacidosis (DKA)</h2>
                          <div class="span-line"></div>
                          <p>Symptoms include high blood sugar levels, dehydration, confusion, and fruity-smelling
                            breath in diabetic patients. Immediate medical care is necessary to prevent coma and
                            life-threatening complications..</p>
                          <p class="full-details d-none">Symptoms include high blood sugar levels, dehydration,
                            confusion, and fruity-smelling breath in diabetic patients. Immediate medical care is
                            necessary to prevent coma and life-threatening complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Acute Asthma Attack</h2>
                          <div class="span-line"></div>
                          <p>Sudden onset of wheezing, coughing, chest tightness, and difficulty breathing in asthma
                            patients. Prompt treatment with bronchodilators and oxygen therapy is essential to alleviate
                            symptoms and prevent respiratory failure.</p>
                          <p class="full-details d-none">Sudden onset of wheezing, coughing, chest tightness, and
                            difficulty breathing in asthma patients. Prompt treatment with bronchodilators and oxygen
                            therapy is essential to alleviate symptoms and prevent respiratory failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Sepsis</h2>
                          <div class="span-line"></div>
                          <p>Systemic infection leading to fever, rapid heart rate, low blood pressure, and confusion.
                            Early recognition and aggressive treatment with antibiotics and fluid resuscitation are
                            crucial to prevent organ failure and death.</p>
                          <p class="full-details d-none">Systemic infection leading to fever, rapid heart rate, low
                            blood pressure, and confusion. Early recognition and aggressive treatment with antibiotics
                            and fluid resuscitation are crucial to prevent organ failure and death.</p>
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
                          <h2>Trauma</h2>
                          <div class="span-line"></div>
                          <p>Trauma refers to severe physical injuries resulting from accidents, falls, or violence. In
                            emergency medicine, prompt assessment and intervention are crucial to stabilize trauma
                            patients and prevent further complications.</p>
                          <p class="full-details d-none">Trauma refers to severe physical injuries resulting from
                            accidents, falls, or violence. In emergency medicine, prompt assessment and intervention are
                            crucial to stabilize trauma patients and prevent further complications.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Cardiopulmonary Resuscitation (CPR)</h2>
                          <div class="span-line"></div>
                          <p>Chest compressions and rescue breaths are performed on an unconscious person in cardiac
                            arrest to maintain blood circulation and oxygenation until advanced medical help arrives.
                          </p>
                          <p class="full-details d-none">Chest compressions and rescue breaths are performed on an
                            unconscious person in cardiac arrest to maintain blood circulation and oxygenation until
                            advanced medical help arrives.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Airway Management</h2>
                          <div class="span-line"></div>
                          <p>Insertion of an artificial airway or clearing of obstructions to ensure adequate breathing
                            in patients with compromised airways, preventing hypoxia and respiratory failure.</p>
                          <p class="full-details d-none">Insertion of an artificial airway or clearing of obstructions
                            to ensure adequate breathing in patients with compromised airways, preventing hypoxia and
                            respiratory failure.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Intravenous Access (IV)</h2>
                          <div class="span-line"></div>
                          <p>Insertion of a catheter into a vein to administer fluids, medications, or blood products
                            rapidly, providing emergency treatment and maintaining hydration and perfusion.</p>
                          <p class="full-details d-none">Insertion of a catheter into a vein to administer fluids,
                            medications, or blood products rapidly, providing emergency treatment and maintaining
                            hydration and perfusion.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Defibrillation</h2>
                          <div class="span-line"></div>
                          <p>Delivery of an electric shock to the heart to restore normal cardiac rhythm in patients
                            experiencing life-threatening arrhythmias such as ventricular fibrillation or pulseless
                            ventricular tachycardia.</p>
                          <p class="full-details d-none">Delivery of an electric shock to the heart to restore normal
                            cardiac rhythm in patients experiencing life-threatening arrhythmias such as ventricular
                            fibrillation or pulseless ventricular tachycardia.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Advanced Trauma Life Support (ATLS)</h2>
                          <div class="span-line"></div>
                          <p>Systematic assessment and management of traumatic injuries, following protocols to
                            prioritize care and stabilize patients with life-threatening injuries, preventing further
                            deterioration.</p>
                          <p class="full-details d-none">Systematic assessment and management of traumatic injuries,
                            following protocols to prioritize care and stabilize patients with life-threatening
                            injuries, preventing further deterioration.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Rapid Sequence Intubation (RSI)</h2>
                          <div class="span-line"></div>
                          <p>Administration of sedative and paralytic agents followed by endotracheal intubation to
                            secure the airway in critically ill or injured patients, ensuring adequate oxygenation and
                            ventilation.</p>
                          <p class="full-details d-none">Administration of sedative and paralytic agents followed by
                            endotracheal intubation to secure the airway in critically ill or injured patients, ensuring
                            adequate oxygenation and ventilation.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Thoracostomy (Chest Tube Insertion)</h2>
                          <div class="span-line"></div>
                          <p>Placement of a chest tube into the pleural space to drain air or fluid, relieving pressure
                            and restoring lung function in patients with pneumothorax, hemothorax, or pleural effusion.
                          </p>
                          <p class="full-details d-none">Placement of a chest tube into the pleural space to drain air
                            or fluid, relieving pressure and restoring lung function in patients with pneumothorax,
                            hemothorax, or pleural effusion.</p>
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
              <img src="image/dr_k_suresh_kumar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. K Suresh Kumar</h3>
              <p>Emergency Physician</p>
              <h4>FRCP, MD, DM, FACC</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_shameem.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shameem K U</h3>
              <p>Consultant & Group Clinical and Academic Coordinator</p>
              <h4>MD (Emergency Medicine), DNB (Emergency Medicine), NBE</h4>
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
                <span>What is emergency medicine?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Emergency medicine is a medical specialty focused on the immediate assessment, stabilization, and
                  treatment of patients with acute illnesses or injuries.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What types of conditions are treated in the emergency department?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The emergency department treats a wide range of conditions, including heart attacks, strokes, trauma,
                  respiratory distress, allergic reactions, and many more.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>When should I go to the emergency department?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You should go to the emergency department for medical emergencies such as chest pain, difficulty
                  breathing, severe injuries, sudden weakness, or loss of consciousness.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What can I expect during my visit to the emergency department?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You can expect to undergo a medical evaluation, including assessment of vital signs, diagnostic tests
                  such as blood work or imaging, and timely treatment based on your condition.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How long will I have to wait in the emergency department?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Wait times vary depending on the severity of patients' conditions and the volume of patients.
                  Patients with life-threatening emergencies are prioritized for immediate care.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>Can I visit the emergency department for non-emergency issues?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The emergency department is designed to treat urgent and life-threatening conditions. Non-emergency
                  issues are best addressed by primary care providers or urgent care centers.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>What should I bring with me to the emergency department?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Bring your identification, insurance information, list of medications, and any relevant medical
                  history. If possible, bring a family member or friend for support and communication assistance.</p>
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
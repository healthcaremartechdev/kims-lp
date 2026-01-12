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
                <input type="hidden" name="speciality" value="Cardiology">
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
              <h2>KIMSHEALTH Nagercoil Cardiology Institute</h2>
              <p>One Of The Best Cardiac Sciences Hospitals In Tamil Nadu</p>
            </div>
            <div class="about-content">
              <p>The KIMSHEALTH Nagercoil Heart Institute is a center of excellence that brings together a distinguished team of experienced cardiologists and one of the most advanced cardiac care facilities in the country. The Department of Cardiology offers comprehensive services across Diagnostic, Interventional, Therapeutic, and Preventive aspects of heart care, supported by cutting-edge outpatient, inpatient, investigative, and interventional capabilities. The institute houses dedicated subspecialty clinics for Heart Failure, Arrhythmias, Pediatric Cardiology, and Cardiomyopathy. On the interventional front, the facility is equipped with world-class cardiac catheterization labs and advanced technologies such as ECMO, IVUS, OCT, and Vivid-based imaging systems. The 24/7 emergency cardiac services ensure rapid response and life-saving Primary Angioplasty in Acute Myocardial Infarction (MI). The institute also specializes in complex multilevel angioplasties and advanced calcium debulking therapies, including Rotablation, Orbital Atherectomy, and Intravascular Lithotripsy (IVL), with image-guided planning using IVUS and OCT for precision interventions, making it a leader in advanced cardiac care.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-5 my-lg-auto doctor-col-custom">
            <!-- <div class="owl-carousel owl-theme dots-morphing mb-0 expart-slider">
              <div class="expart-card">
                <div class="expert-image position-relative">
                  <img src="image/dr_thanu.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="card-content mt-3">
                  <h3>Dr. Thanu S</h3>
                  <p>Consultant Cardiologist</p>
                  <h4>MD (Gen Med) , DNB( Cardiology )</h4>
                  <a href="#" class="btn btn-primary">Request An Appointment </a>
                </div>
              </div>
            </div> -->
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <!--<div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/f9Yv3urjW6s" title="Hear Daisy&#39;s testimony, as she shares her positive experience with Dr. Thanu S" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/cMkmk_ngS-s" title="Life-Saving Pacemaker Implantation | Mr. Jayakumar’s Journey at KIMSHEALTH" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>-->
				
				
              <div class="video-item">
				<iframe width="100%" height="300" src="https://www.youtube.com/embed/LsM9drplqUI" title="Heart Attack Recovery Without Surgery | Mr. George&#39;s Story at KIMSHEALTH Nagercoil" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
				<iframe width="100%" height="300" src="https://www.youtube.com/embed/NO4ENElIVNI" title="Breakthrough Heart Blockage Treatment | Stent-Free Angioplasty by Dr. Thanu Subramoniam" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        <h5>Interventional Cardiology</h5>
                        <div class="under-line"></div>
                        <p>This speciality specializes in minimally invasive procedures, such as angioplasty and
                          stenting, to treat coronary artery disease and related conditions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Electrophysiology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnosing and managing heart rhythm disorders (arrhythmias) using techniques like
                          ablation, pacemakers, and defibrillators.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Adult Congenital Heart Disease</h5>
                        <div class="under-line"></div>
                        <p>This specialist specializes in diagnosing and managing heart defects present since birth in
                          adult patients, offering lifelong care and treatment plans.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Preventive Cardiology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on risk assessment, lifestyle modifications, and medication strategies to prevent
                          heart disease and promote heart health in at-risk individuals.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Structural Heart Disease</h5>
                        <div class="under-line"></div>
                        <p>Addresses structural abnormalities of the heart, such as valve disorders, offering
                          interventions like valve repair or replacement using minimally invasive techniques.</p>
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
                          <h2>Arrhythmia</h2>
                          <div class="span-line"></div>
                          <p>Heartbeat irregularities, either too fast or too slow, causing symptoms like palpitations;
                            managed with medications or procedures like ablation.</p>
                          <p class="full-details d-none">Heartbeat irregularities, either too fast or too slow, causing
                            symptoms like palpitations; managed with medications or procedures like ablation.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Heart Failure</h2>
                          <div class="span-line"></div>
                          <p>Heart's inability to pump enough blood, leading to symptoms like breathlessness and
                            swelling; treated with medications or devices.</p>
                          <p class="full-details d-none">Heart's inability to pump enough blood, leading to symptoms
                            like breathlessness and swelling; treated with medications or devices.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Coronary Artery Disease</h2>
                          <div class="span-line"></div>
                          <p>Plaque buildup in heart arteries restricting blood flow, resulting in chest pain or
                            breathlessness; managed with medications or procedures.</p>
                          <p class="full-details d-none">Plaque buildup in heart arteries restricting blood flow,
                            resulting in chest pain or breathlessness; managed with medications or procedures.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Congenital Heart Disease</h2>
                          <div class="span-line"></div>
                          <p>Heart defects from birth, ranging from mild to severe, requiring monitoring, medication, or
                            surgical correction.</p>
                          <p class="full-details d-none">Heart defects from birth, ranging from mild to severe,
                            requiring monitoring, medication, or surgical correction.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Heart Valve Disease</h2>
                          <div class="span-line"></div>
                          <p>Heart valve malfunction causing symptoms like chest pain or fatigue; treated with
                            medication, valve repair, or replacement.</p>
                          <p class="full-details d-none">Heart valve malfunction causing symptoms like chest pain or
                            fatigue; treated with medication, valve repair, or replacement.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Angina</h2>
                          <div class="span-line"></div>
                          <p>Chest pain or discomfort due to reduced blood flow to the heart; often triggered by
                            physical exertion or stress; relieved by rest or medications like nitroglycerin.</p>
                          <p class="full-details d-none">Chest pain or discomfort due to reduced blood flow to the
                            heart; often triggered by physical exertion or stress; relieved by rest or medications like
                            nitroglycerin.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Atherosclerosis</h2>
                          <div class="span-line"></div>
                          <p>Artery plaque buildup, leading to heart disease or stroke, managed with medication,
                            lifestyle changes, or procedures.</p>
                          <p class="full-details d-none">Artery plaque buildup, leading to heart disease or stroke,
                            managed with medication, lifestyle changes, or procedures.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Heart Attack</h2>
                          <div class="span-line"></div>
                          <p>Blockage of heart blood flow causing chest pain or nausea; requires immediate medical
                            attention for blood flow restoration.</p>
                          <p class="full-details d-none">Blockage of heart blood flow causing chest pain or nausea;
                            requires immediate medical attention for blood flow restoration.</p>
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
                          <h2>Angioplasty</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive procedure to widen narrowed or blocked arteries using a balloon
                            catheter; often followed
                            by stent placement to keep the artery open and restore blood flow.</p>
                          <p class="full-details d-none">Minimally invasive procedure to widen narrowed or blocked
                            arteries using a
                            balloon catheter; often followed by stent placement to keep the artery open and restore
                            blood flow. </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>TAVI (Transcatheter Aortic Valve Implantation)</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive procedure to replace a diseased aortic valve with a prosthetic valve
                            delivered through a
                            catheter, suitable for high-risk patients.</p>
                          <p class="full-details d-none">Minimally invasive procedure to replace a diseased aortic valve
                            with a
                            prosthetic valve delivered through a catheter, suitable for high-risk patients.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>TAVR (Transcatheter Aortic Valve Replacement)</h2>
                          <div class="span-line"></div>
                          <p>Another term for TAVI, involving implantation of an artificial aortic valve via catheter,
                            avoiding
                            open-heart surgery.</p>
                          <p class="full-details d-none">Another term for TAVI, involving implantation of an artificial
                            aortic valve via
                            catheter, avoiding open-heart surgery.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Electrophysiology Procedure (EP)</h2>
                          <div class="span-line"></div>
                          <p>Diagnostic procedure to assess heart rhythm disorders (arrhythmias) using specialized
                            catheters and mapping
                            systems to locate and treat abnormal electrical pathways.</p>
                          <p class="full-details d-none">Diagnostic procedure to assess heart rhythm disorders
                            (arrhythmias) using
                            specialized catheters and mapping systems to locate and treat abnormal electrical pathways.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Radiofrequency Ablation (RFA)</h2>
                          <div class="span-line"></div>
                          <p>EP procedure using heat generated by radiofrequency energy to destroy abnormal heart tissue
                            causing
                            arrhythmias, restoring normal heart rhythm.</p>
                          <p class="full-details d-none">EP procedure using heat generated by radiofrequency energy to
                            destroy abnormal
                            heart tissue causing arrhythmias, restoring normal heart rhythm.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Pacemaker Implantation</h2>
                          <div class="span-line"></div>
                          <p>A surgical procedure to implant a small device under the skin, connected to the heart via
                            wires, to
                            regulate heart rate and rhythm in patients with bradycardia or arrhythmias.</p>
                          <p class="full-details d-none">A surgical procedure to implant a small device under the skin,
                            connected to the
                            heart via wires, to regulate heart rate and rhythm in patients with bradycardia or
                            arrhythmias.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Syncope Evaluation</h2>
                          <div class="span-line"></div>
                          <p>Assessment to determine the cause of syncope (fainting) episodes, often involving medical
                            history review,
                            physical examination, and diagnostic tests such as tilt-table testing or
                            electrophysiological studies.</p>
                          <p class="full-details d-none">Assessment to determine the cause of syncope (fainting)
                            episodes, often
                            involving medical history review, physical examination, and diagnostic tests such as
                            tilt-table testing or
                            electrophysiological studies.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Coronary Artery Bypass Grafting (CABG)</h2>
                          <div class="span-line"></div>
                          <p>A surgical procedure to bypass blocked coronary arteries using healthy blood vessels from
                            elsewhere in the
                            body, restoring blood flow to the heart muscle.</p>
                          <p class="full-details d-none">A surgical procedure to bypass blocked coronary arteries using
                            healthy blood
                            vessels from elsewhere in the body, restoring blood flow to the heart muscle.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Complex Angioplasty</h2>
                          <div class="span-line"></div>
                          <p>Complex angioplasty is an advanced, minimally invasive procedure used to treat severe or multiple coronary artery blockages, restoring blood flow to the heart and improving overall cardiac health and patient recovery.</p>
                          <p class="full-details d-none">Complex angioplasty is an advanced, minimally invasive procedure used to treat severe or multiple coronary artery blockages, restoring blood flow to the heart and improving overall cardiac health and patient recovery.</p>
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
              <img src="image/dr_thanu.jpg" alt="" class="img-fluid w-100">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Thanu Subramoniam</h3>
              <p>Consultant Cardiologist</p>
              <h4>MD (Gen Med), DNB (Cardiology), FIC</h4>
              <a href="#" class="btn btn-primary">Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor-avatar.png" alt="" class="img-fluid w-100">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ajeeth Fera</h3>
              <p>Consultant Cardiologist</p>
              <h4>MD (Gen. Med), DrNB (Cardiology)</h4>
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
                <h3>Mohana Shankar </h3>
                <!--<p>Trivandrum, India</p>-->
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
            <p>I am truly grateful to Dr. Thanu S at KIMSHEALTH Nagercoil for the excellent care they provided to my mother. She underwent an angiogram last Friday, and the entire process was smooth and well-managed. Dr. Thanu S explained everything in detail, answered all our concerns, and ensured that my mother felt comfortable throughout the procedure.<br>The hospital staff was very supportive, and the facilities were top-notch. Thank you, KIMSHEALTH Nagercoil, for providing such outstanding cardiac care. Highly recommended!
            </p>
          </div>





          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Naveena </h3>
                <!--<p>Trivandrum, India</p>-->
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
            <p>Dr. Dhinesh David at KIMS Trivandrum is an outstanding physician. His expertise and compassionate care
              were evident throughout my treatment. He took the time to listen, answer questions, and ensure I felt
              comfortable every step of the way. The support staff at KIMS Trivandrum were also efficient and friendly.
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
            <p>Dr. Meera R, at KIMS Trivandrum provides outstanding care. Her expertise, compassion, and attentive
              approach make her highly recommended. The support staff further enhances the positive experience.</p>
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
            <p>At KIMS Trivandrum, I experienced exceptional care from the cardiology team. Their personalized approach,
              expertise, and dedication ensured I received tailored treatment for my cardiac needs. Highly recommended
              for anyone seeking top-notch cardiac care.</p>
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
                <span>What are the symptoms of heart disease?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common symptoms include chest pain or discomfort, shortness of breath, fatigue, palpitations,
                  dizziness, and swelling in the legs or abdomen.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What lifestyle changes can improve heart health?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Maintaining a healthy diet, regular exercise, quitting smoking, managing stress, and limiting alcohol
                  intake can improve heart health</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>How is high blood pressure diagnosed and treated?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>High blood pressure is diagnosed using blood pressure measurements. Treatment includes lifestyle
                  modifications (diet, exercise) and medications.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What lifestyle changes can improve heart health?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Maintaining a healthy diet, regular exercise, quitting smoking, managing stress, and limiting alcohol
                  intake can improve heart health.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What is cholesterol, and how does it affect heart health?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Cholesterol is a fatty substance in the blood. High levels of LDL ("bad") cholesterol can increase
                  the risk of heart disease.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>What are the risk factors for developing heart disease?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Risk factors include high blood pressure, high cholesterol, smoking, obesity, diabetes, family
                  history, and sedentary lifestyle.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>What is the difference between a heart attack and cardiac arrest?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>A heart attack is caused by a blocked artery, whereas cardiac arrest is when the heart suddenly stops
                  beating, often due to an electrical malfunction.</p>
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
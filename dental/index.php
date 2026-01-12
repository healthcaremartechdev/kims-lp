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
                    <div style="color: #666666; font-size: 14px; line-height: 16px;">Location</div>
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
                <input type="hidden" name="speciality" value="Dental">
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
              <h2>KIMSHEALTH Dental Institute</h2>
              <p>One Of The Best Dental Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>Oral health plays a pivotal role in overall well-being. KIMSHEALTH's Dental Services Department
                provides comprehensive care for various oral health concerns. From routine procedures like root canals
                to advanced treatments like Invisalign and dental implants, our skilled dentists offer a wide range of
                services. Moreover, our team is proficient in complex maxillofacial surgeries, ensuring patients receive
                specialized care tailored to their needs. With state-of-the-art facilities and a commitment to
                excellence, we strive to promote optimal oral health and enhance the overall quality of life for our
                patients.</p>
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
        <div class="text-center gray_bg">
          <div class="sec-title">
            <h2>Our Specialities</h2>
            <p>Specialized Care For Dental Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-4 pt-4">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Orthodontics</h5>
                        <div class="under-line"></div>
                        <p>Specializes in correcting misaligned teeth and jaws through treatments like braces, aligners,
                          and other orthodontic appliances.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Periodontics</h5>
                        <div class="under-line"></div>
                        <p>Focuses on diagnosing and treating gum diseases, including gingivitis and periodontitis, as
                          well as performing procedures like gum grafts and dental implants.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Endodontics</h5>
                        <div class="under-line"></div>
                        <p>Deals with the diagnosis and treatment of dental pulp and root canal-related issues,
                          including root canal therapy to save infected or damaged teeth.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Oral and Maxillofacial Surgery</h5>
                        <div class="under-line"></div>
                        <p>Addresses a wide range of dental and facial conditions, including wisdom teeth extraction,
                          jaw surgeries, and facial trauma reconstruction.</p>
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
                          <h2>Cavities</h2>
                          <div class="span-line"></div>
                          <p>
                            Decay of tooth structure due to plaque buildup, leading to pain and sensitivity, treated
                            with fillings or crowns to restore tooth function and prevent further damage.
                          </p>
                          <p class="full-details d-none">
                            Decay of tooth structure due to plaque buildup, leading to pain and sensitivity, treated
                            with fillings or crowns to restore tooth function and prevent further damage.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Gingivitis</h2>
                          <div class="span-line"></div>
                          <p>
                            Inflammation of the gums caused by plaque buildup, resulting in redness, swelling, and
                            bleeding, managed with professional cleanings and improved oral hygiene.
                          </p>
                          <p class="full-details d-none">
                            Inflammation of the gums caused by plaque buildup, resulting in redness, swelling, and
                            bleeding, managed with professional cleanings and improved oral hygiene.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Periodontitis</h2>
                          <div class="span-line"></div>
                          <p>
                            Advanced gum disease characterized by gum recession and bone loss, causing tooth mobility
                            and eventual tooth loss, requiring deep cleanings or surgical interventions.
                          </p>
                          <p class="full-details d-none">
                            Advanced gum disease characterized by gum recession and bone loss, causing tooth mobility
                            and eventual tooth loss, requiring deep cleanings or surgical interventions.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Tooth Abscess</h2>
                          <div class="span-line"></div>
                          <p>
                            Pus-filled pocket around the tooth root due to bacterial infection, causing severe pain,
                            swelling, and fever, necessitating root canal therapy or tooth extraction.
                          </p>
                          <p class="full-details d-none">
                            Pus-filled pocket around the tooth root due to bacterial infection, causing severe pain,
                            swelling, and fever, necessitating root canal therapy or tooth extraction.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Malocclusion</h2>
                          <div class="span-line"></div>
                          <p>
                            Misalignment of teeth or jaws, leading to bite problems, speech difficulties, and TMJ
                            disorders, corrected with orthodontic treatments like braces or aligners.
                          </p>
                          <p class="full-details d-none">
                            Misalignment of teeth or jaws, leading to bite problems, speech difficulties, and TMJ
                            disorders, corrected with orthodontic treatments like braces or aligners.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Oral Cancer</h2>
                          <div class="span-line"></div>
                          <p>
                            Malignant growth in the oral cavity, including lips, tongue, cheeks, or throat, often
                            detected through oral exams and treated with surgery, radiation, or chemotherapy.
                          </p>
                          <p class="full-details d-none">
                            Malignant growth in the oral cavity, including lips, tongue, cheeks, or throat, often
                            detected through oral exams and treated with surgery, radiation, or chemotherapy.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Tooth Sensitivity</h2>
                          <div class="span-line"></div>
                          <p>Discomfort or pain when consuming hot, cold, or sweet foods due to exposed tooth roots or
                            enamel erosion, managed with desensitizing toothpaste or dental treatments.</p>
                          <p class="full-details d-none">Discomfort or pain when consuming hot, cold, or sweet foods due
                            to exposed tooth roots or enamel erosion, managed with desensitizing toothpaste or dental
                            treatments.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Temporomandibular Joint (TMJ) Disorder</h2>
                          <div class="span-line"></div>
                          <p>Dysfunction of the jaw joint, causing pain, clicking, or locking of the jaw, treated with
                            medications, physical therapy, or dental splints to alleviate symptoms.</p>
                          <p class="full-details d-none">Dysfunction of the jaw joint, causing pain, clicking, or
                            locking of the jaw, treated with medications, physical therapy, or dental splints to
                            alleviate symptoms.</p>
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
                          <h2>Implants</h2>
                          <div class="span-line"></div>
                          <p>
                            Surgical placement of artificial tooth roots into the jawbone, providing a sturdy foundation
                            for dental crowns or bridges to replace missing teeth and restore oral function and
                            aesthetics.
                          </p>
                          <p class="full-details d-none">
                            Surgical placement of artificial tooth roots into the jawbone, providing a sturdy foundation
                            for dental crowns or bridges to replace missing teeth and restore oral function and
                            aesthetics.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Veneers</h2>
                          <div class="span-line"></div>
                          <p>Thin shells of porcelain or composite resin bonded to the front surface of teeth to improve
                            their appearance, correcting issues like stains, chips, or misalignment for a
                            natural-looking smile.</p>
                          <p class="full-details d-none">Thin shells of porcelain or composite resin bonded to the front
                            surface of teeth to improve their appearance, correcting issues like stains, chips, or
                            misalignment for a natural-looking smile.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Maxillofacial Surgeries</h2>
                          <div class="span-line"></div>
                          <p>
                            Surgical procedures involving the jaw, face, and neck to correct deformities, injuries, or
                            conditions like cleft palate, performed by oral and maxillofacial surgeons.
                          </p>
                          <p class="full-details d-none">
                            Surgical procedures involving the jaw, face, and neck to correct deformities, injuries, or
                            conditions like cleft palate, performed by oral and maxillofacial surgeons.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Root Canal</h2>
                          <div class="span-line"></div>
                          <p>Endodontic procedure to remove infected or damaged dental pulp from the tooth's interior,
                            relieving pain and preserving the tooth's structure with a filling or crown restoration.</p>
                          <p class="full-details d-none">Endodontic procedure to remove infected or damaged dental pulp
                            from the tooth's interior, relieving pain and preserving the tooth's structure with a
                            filling or crown restoration.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Teeth Whitening</h2>
                          <div class="span-line"></div>
                          <p>Cosmetic procedure to lighten and brighten discolored teeth using bleaching agents or laser
                            technology, enhancing the smile's appearance and boosting self-confidence.</p>
                          <p class="full-details d-none">Cosmetic procedure to lighten and brighten discolored teeth
                            using bleaching agents or laser technology, enhancing the smile's appearance and boosting
                            self-confidence.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Dental Crowns</h2>
                          <div class="span-line"></div>
                          <p>Custom-made caps placed over damaged or decayed teeth to restore their shape, size,
                            strength, and appearance, providing long-term protection and durability.</p>
                          <p class="full-details d-none">Custom-made caps placed over damaged or decayed teeth to
                            restore their shape, size, strength, and appearance, providing long-term protection and
                            durability.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Dental Bridges</h2>
                          <div class="span-line"></div>
                          <p>Fixed prosthetic devices used to replace missing teeth by bridging the gap between adjacent
                            teeth, restoring function, aesthetics, and preventing dental shifting.</p>
                          <p class="full-details d-none">Fixed prosthetic devices used to replace missing teeth by
                            bridging the gap between adjacent teeth, restoring function, aesthetics, and preventing
                            dental shifting.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Gum Contouring</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure to reshape or recontour the gumline, correcting excessive gum tissue
                            (gummy smile) or uneven gum levels for a harmonious and aesthetically pleasing smile.</p>
                          <p class="full-details d-none">Surgical procedure to reshape or recontour the gumline,
                            correcting excessive gum tissue (gummy smile) or uneven gum levels for a harmonious and
                            aesthetically pleasing smile.</p>
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
              <img src="image/dr-binoy-stanley.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Benoy Stanly</h3>
              <p>Co-ordinator, Dental Services & International patients</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-oomen-aju.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Oommen Aju Jacob</h3>
              <p>Senior Maxillofacial Surgeon</p>
              <h4>MDS, DNB</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_surej_kumar_dental_new.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Surej Kumar L K</h3>
              <p>Senior Maxillofacial Surgeon</p>
              <h4>MDS, FDSRCPS ( Glasg), FDSRCS (England)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Biju Sebastian</h3>
              <p>Senior Orthodontist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-sooraj.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sooraj S</h3>
              <p>Senior Maxillofacial Surgeon</p>
              <h4>BBDS, MDS, MOSRCS (Ed), DNB</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-arun-sadasivan.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Arun Sadasivan</h3>
              <p>Senior Periodontist</p>
              <h4>BDS, MDS [Periodontics]</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_sreejith_k_r.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sreejith K R</h3>
              <p>Senior Pediatric Dentist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-suvy-manuel.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Suvy Manuel</h3>
              <p>Oral & Maxillofacial Surgeon</p>
              <h4>BDS, MDS, DNB, MNAMS, MFDS RCSEng, MOS RCSEd, FDS RCSEd, Master of Dental Surgery, OMFS Govt: Dental
                College, Trivandrum (2002)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sivadas Arun</h3>
              <p>Periodontist</p>
              <h4>MDS Periodontics</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-roopa.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Roopa Prasannan</h3>
              <p>Endodontist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_augustine_thomas_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Augustine Thomas</h3>
              <p>Prosthodontist</p>
              <h4>MDS in Prosthodontics and Crown & Bridge</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ravi_aravind.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ravi Aravind</h3>
              <p>Prosthodontist</p>
              <h4>Bachelor of Dental Surgery, Master Of Dental Surgery</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Rajesh Raveendranath</h3>
              <p>Neuro Muscular Dentist</p>
              <h4>BDS, Ph.D (EcoleSuperieure Sorbonne University, France), FICCMO(Fellow of International College of
                Cranio Mandibular Orthopedics), MICCMO( Master of International College of CranioMandibularOrthopedics)
              </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_cucoo.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Cucoo</h3>
              <p>Oral Physician</p>
              <h4>FICCMO, PG Diploma in Health and Hospital Administration, University of Kerala., MDS, BDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Aswin S</h3>
              <p>Pediatric Dentist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Jithu Joseph</h3>
              <p>Endodontist</p>
              <h4>BDS, MDS in Conservative Dentistry & Endodontics</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_vinayak_padmakumar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Vinayak Padmakumar</h3>
              <p>Pediatric Dentist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_jeomy_new.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Jeomy Zachariah Oommen</h3>
              <p>Consultant</p>
              <h4>BDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_faseela_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Fazeela Beegum</h3>
              <p>Periodontist</p>
              <h4>MDS in Periodontology and Implantology, BDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/drshekhar.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shekhar S</h3>
              <p>Maxillofacial Surgeon</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_nair_parvathi.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Nair Parvathi Unnikrishnan</h3>
              <p>Aesthetic Dentist</p>
              <h4>BDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_evana_m_roy.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Evana M Roy</h3>
              <p>General Dentist</p>
              <h4>BDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_dixit_raj_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Dixit Raj</h3>
              <p>Laser Periodontist and Implantologist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ajilal_s_k_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ajilal SK</h3>
              <p>Microscopic Endodontist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_abdul_shameer_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Abdul Shameer C K</h3>
              <p>Consultant Orthodontist</p>
              <h4>MDS Orthodontics, M Orth RCS Edinburgh, M Orth RCS Glasgow, MFDS RCS England</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_anirudhmaadhav_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Anirudhmaadhav P A</h3>
              <p>Pediatric Dentist</p>
              <h4>BDS, MDS ( PEDIATRIC AND PREVENTIVE DENTISTRY)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_dhanya_new.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. DHANYA KRISHNAN</h3>
              <p>Pediatric Dentist</p>
              <h4>BDS, MDS</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_shabnam_new.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shabnam U</h3>
              <p>Oral Pathologist</p>
              <h4>MDS, Oral and Maxillofacial Pathology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_mathew_p_varghese.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Mathew P Varghese</h3>
              <p>Oral & Maxillofacial Surgeon</p>
              <h4>BDS, MDS</h4>
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
            <p>Exceptional dental care at KIMSHEALTH! From routine check-ups to complex procedures, their team's
              professionalism and expertise ensure a comfortable experience and outstanding results every time. Highly
              recommended!"
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
            <p>I'm extremely impressed with the dental services at KIMSHEALTH Trivandrum. The dentists are
              knowledgeable, caring, and skilled. They addressed all my concerns and provided top-notch care. I couldn't
              be happier with the results!</p>
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
            <p>Choosing KIMSHEALTH Trivandrum for my dental needs was the best decision. The team's professionalism and
              attention to detail made my experience stress-free, and I'm thrilled with the results.</p>
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
                <span>What are the signs of gum disease? </span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Signs of gum disease include swollen, red, or bleeding gums, persistent bad breath, receding gums,
                  and loose teeth. Regular dental visits can help prevent gum disease.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What are the different types of dental fillings? </span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common dental fillings include amalgam (silver), composite (tooth-colored), gold, and ceramic. Each
                  type has its advantages and is chosen based on individual needs.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>How can I prevent cavities and gum disease? </span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Prevent cavities and gum disease by brushing twice daily with fluoride toothpaste, flossing daily,
                  eating a balanced diet, and visiting your dentist regularly.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What causes tooth decay?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Tooth decay is mainly caused by plaque buildup, which produces acids that erode enamel. Poor oral
                  hygiene, sugary foods, and bacteria contribute to decay.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How often should I visit the dentist?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>It's recommended to see your dentist every six months for routine check-ups and cleanings to maintain
                  oral health and detect problems early.</p>
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
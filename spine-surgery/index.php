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
  <link rel="stylesheet" href="css/custom_new.css">
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
                <input type="hidden" name="speciality" value="Spine Surgery">
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
              <h2>KIMSHEALTH Spine Institute</h2>
              <p>One Of The Best Spine Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>At KIMSHEALTH, spine surgery is conducted with precision and compassion, utilizing advanced techniques
                to address a range of spinal conditions. Our multidisciplinary team of spine surgeons, neurosurgeons,
                and orthopedic specialists collaborate to provide personalized treatment plans tailored to each
                patient's unique needs. Whether it's spinal fusion, disc replacement, or minimally invasive procedures,
                we prioritize patient safety and comfort throughout the surgical journey. With state-of-the-art
                facilities and cutting-edge technology, coupled with a commitment to excellence, KIMSHEALTH ensures
                optimal outcomes and improved quality of life for individuals suffering from spinal disorders. We offer
                comprehensive spine care that puts your well-being first.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/mnud0qbEaqM"
                  title="ചെറുപ്പത്തിൽത്തന്നെ സ്കോളിയോസിസ് കണ്ടെത്താനാകുമോ? ഡോ. രഞ്ജിത് ഉണ്ണികൃഷ്ണൻ സംസാരിക്കുന്നു | Scoliosis"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/YOlqbaY019Q"
                  title="What are the risk factors for degenerative disk disease? | KIMS Hospital | Dr. Ranjith Unnikrishnan"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/huMmXc2zIFU"
                  title="What causes degenerative disk disease? | KIMS Hospital| Dr. Ranjith Unnikrishnan"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/_SPRiyG6-7M"
                  title="How is the diagnosis for degenerative disk disease  | Dr. Ranjith Unnikrishnan | KIMS Hospital"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/hz2bW_J8I6o"
                  title="സ്കോളിയോസിസിനെ തോൽപിച്ച് നിവർന്നു നിന്ന തസ്നി | Scoliosis Awareness Series" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/TzmjZhjFOAs"
                  title="സ്കോളിയോസിസിനെ തോൽപിച്ച് വീണ്ടും ചിലങ്കയണിഞ്ഞ ഭവ്യാ വിജയൻ | Scoliosis Awareness Series"
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
            <p>Specialized Care For Spine-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Minimally Invasive Spine Surgery</h5>
                        <div class="under-line"></div>
                        <p>Utilizes small incisions and specialized instruments for reduced tissue damage and quicker
                          recovery.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Spinal Fusion</h5>
                        <div class="under-line"></div>
                        <p>Joins vertebrae to stabilize the spine, alleviating pain and restoring spinal alignment and
                          function.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Disc Replacement Surgery</h5>
                        <div class="under-line"></div>
                        <p>Replaces damaged discs with artificial implants to maintain spinal mobility and relieve nerve
                          compression.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Complex Spine Surgery</h5>
                        <div class="under-line"></div>
                        <p>Addresses intricate spinal conditions such as deformities, tumors, and trauma with advanced
                          surgical techniques and comprehensive care.</p>
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
                          <h2>Scoliosis</h2>
                          <div class="span-line"></div>
                          <p>Abnormal sideways curvature of the spine treated with bracing or surgery to correct
                            curvature and alleviate symptoms like pain and breathing difficulties.</p>
                          <p class="full-details d-none">Abnormal sideways curvature of the spine treated with bracing
                            or surgery to correct curvature and alleviate symptoms like pain and breathing difficulties.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Lumbar Disc</h2>
                          <div class="span-line"></div>
                          <p>Soft tissue between vertebrae in the lower back that may herniate, causing pain and nerve
                            compression, often treated with surgery like discectomy.</p>
                          <p class="full-details d-none">Soft tissue between vertebrae in the lower back that may
                            herniate, causing pain and nerve compression, often treated with surgery like discectomy.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Cervical Disc</h2>
                          <div class="span-line"></div>
                          <p>Discs in the neck region that may degenerate or herniate, causing neck pain and nerve
                            compression, treated with procedures like cervical disc replacement.</p>
                          <p class="full-details d-none">Discs in the neck region that may degenerate or herniate,
                            causing neck pain and nerve compression, treated with procedures like cervical disc
                            replacement.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Spine Trauma</h2>
                          <div class="span-line"></div>
                          <p>Injuries to the spinal cord or vertebrae, ranging from fractures to dislocations, often
                            requiring surgical intervention to stabilize the spine and prevent paralysis.</p>
                          <p class="full-details d-none">Injuries to the spinal cord or vertebrae, ranging from
                            fractures to dislocations, often requiring surgical intervention to stabilize the spine and
                            prevent paralysis.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>TB Spine</h2>
                          <div class="span-line"></div>
                          <p>Tuberculosis affecting the spine, causing vertebral destruction and deformity, treated with
                            anti-TB drugs and sometimes surgery to remove infected tissue.</p>
                          <p class="full-details d-none">Tuberculosis affecting the spine, causing vertebral destruction
                            and deformity, treated with anti-TB drugs and sometimes surgery to remove infected tissue.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Spinal Stenosis</h2>
                          <div class="span-line"></div>
                          <p>Narrowing of the spinal canal, causing compression of nerves and leading to pain, weakness,
                            or numbness, often treated with decompression surgery.</p>
                          <p class="full-details d-none">Narrowing of the spinal canal, causing compression of nerves
                            and leading to pain, weakness, or numbness, often treated with decompression surgery.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Spinal Tumors</h2>
                          <div class="span-line"></div>
                          <p>Abnormal growths within or around the spinal cord, necessitating surgical intervention to
                            remove tumors and relieve pressure on the spinal cord.</p>
                          <p class="full-details d-none">Abnormal growths within or around the spinal cord,
                            necessitating surgical intervention to remove tumors and relieve pressure on the spinal
                            cord.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Vertebral Compression Fractures</h2>
                          <div class="span-line"></div>
                          <p>Collapse of vertebrae due to trauma or osteoporosis, managed with procedures like
                            vertebroplasty or kyphoplasty to stabilize the spine and alleviate pain</p>
                          <p class="full-details d-none">Collapse of vertebrae due to trauma or osteoporosis, managed
                            with procedures like vertebroplasty or kyphoplasty to stabilize the spine and alleviate pain
                          </p>
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
                          <h2>MIS Spine Surgery</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive techniques for spine procedures, reducing tissue damage and recovery
                            time while addressing conditions like herniated discs or spinal stenosis.</p>
                          <p class="full-details d-none">Minimally invasive techniques for spine procedures, reducing
                            tissue damage and recovery time while addressing conditions like herniated discs or spinal
                            stenosis.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Vertebroplasty</h2>
                          <div class="span-line"></div>
                          <p>Injection of bone cement into fractured vertebrae to stabilize and relieve pain, often used
                            for vertebral compression fractures due to osteoporosis or trauma.</p>
                          <p class="full-details d-none">Injection of bone cement into fractured vertebrae to stabilize
                            and relieve pain, often used for vertebral compression fractures due to osteoporosis or
                            trauma.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Fully Endoscopic discectomy</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive surgery using an endoscope to remove herniated disc material, reducing
                            tissue damage and promoting quicker recovery compared to traditional open procedures.</p>
                          <p class="full-details d-none">Minimally invasive surgery using an endoscope to remove
                            herniated disc material, reducing tissue damage and promoting quicker recovery compared to
                            traditional open procedures.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Spinal Fusion</h2>
                          <div class="span-line"></div>
                          <p>Joins two or more vertebrae together, stabilizing the spine to alleviate pain and prevent
                            further degeneration, commonly used for conditions like spondylolisthesis or degenerative
                            disc disease.</p>
                          <p class="full-details d-none">Joins two or more vertebrae together, stabilizing the spine to
                            alleviate pain and prevent further degeneration, commonly used for conditions like
                            spondylolisthesis or degenerative disc disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Foraminotomy</h2>
                          <div class="span-line"></div>
                          <p>Widens the neural foramen to relieve nerve compression caused by bone spurs or herniated
                            discs, restoring function and alleviating symptoms like pain and numbness.</p>
                          <p class="full-details d-none">Widens the neural foramen to relieve nerve compression caused
                            by bone spurs or herniated discs, restoring function and alleviating symptoms like pain and
                            numbness.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Laminectomy</h2>
                          <div class="span-line"></div>
                          <p>Removes a portion of the vertebral bone (lamina) to alleviate pressure on spinal nerves,
                            commonly performed to treat spinal stenosis or disc herniation.</p>
                          <p class="full-details d-none">Removes a portion of the vertebral bone (lamina) to alleviate
                            pressure on spinal nerves, commonly performed to treat spinal stenosis or disc herniation.
                          </p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Artificial Disc Replacement</h2>
                          <div class="span-line"></div>
                          <p>Replaces a damaged spinal disc with an artificial implant, preserving motion and reducing
                            the risk of adjacent segment degeneration, offering an alternative to spinal fusion.</p>
                          <p class="full-details d-none">Replaces a damaged spinal disc with an artificial implant,
                            preserving motion and reducing the risk of adjacent segment degeneration, offering an
                            alternative to spinal fusion.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Spinal Decompression</h2>
                          <div class="span-line"></div>
                          <p>Removes bone or tissue pressing on spinal nerves, relieving pain and restoring function,
                            often performed to treat conditions like spinal stenosis or foraminal stenosis.</p>
                          <p class="full-details d-none">Removes bone or tissue pressing on spinal nerves, relieving
                            pain and restoring function, often performed to treat conditions like spinal stenosis or
                            foraminal stenosis.</p>
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
              <img src="image/dr_ranjit.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Ranjith Unnikrishnan</h3>
              <p>Consultant</p>
              <h4>DNB, FCPS, FMISS (Korea), Fellowship in Spine Surgery (Japan)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_ajith_r.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr Ajith R</h3>
              <p>Sr Consultant and Coordinator</p>
              <h4>MBBS, DrNB (Neurosurgery)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_sushanth_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr Sushant B</h3>
              <p>Hon.Consultant</p>
              <h4>NS, MS, MCh (Neurosurgery)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/boby_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Bobby Iype</h3>
              <p>Hon. Consultant</p>
              <h4>Fellowship in Skull Base Surgery, MS, DNB (Neurosurgery), MCh (Neurosurgery )</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/abu_madan.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr Abu Madan</h3>
              <p>Hon. Consultant</p>
              <h4>MS, MCh (Neurosurgery)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_navas_1.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr Navas N S</h3>
              <p>Hon. Consultant</p>
              <h4>NS, MS, MCh (Neurosurgery) </h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr Shobha Sara Mathew</h3>
              <p>Hon. Consultant</p>
              <h4>MBBS, M.Med(Family Medicine )</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_arun_p_s_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Arun P S</h3>
              <p>Consultant</p>
              <h4>MS (General Surgery), Mch (Neurosurgery), PDF (Cerebrovascular Surgery)</h4>
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
            <p>The spine surgery I underwent at KIMSHEALTH transformed my life. Supported by expert surgeons and
              compassionate staff, I regained mobility and quality of life. Grateful for their care.</p>
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
            <p>Opting for KIMSHEALTH for my spine surgery proved to be a wise choice. The skilled team delivered
              tailored care, and the advanced facilities ensured a seamless recovery. Appreciative of their expertise
              and empathy.</p>
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
            <p>My encounter with spine surgery at KIMSHEALTH surpassed all expectations. Their holistic approach, from
              initial consultations to post-surgical support, instilled confidence and comfort. Highly recommend their
              exceptional services.</p>
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
                <span>What is spine surgery?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Spine surgery is a medical procedure performed to treat various conditions affecting the spine, such
                  as herniated discs, spinal stenosis, or spinal fractures.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>Who needs spine surgery?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Spine surgery may be recommended for individuals with persistent back or neck pain, weakness,
                  numbness, or tingling that does not respond to non-surgical treatments like medication or physical
                  therapy.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>How long does it take to recover from spine surgery?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Recovery time varies depending on the type of surgery and individual factors. Some patients may
                  resume light activities within a few weeks, while others may require several months for full recovery.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>Will I still have pain after spine surgery?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Pain relief varies among patients, but spine surgery aims to alleviate symptoms and improve quality
                  of life. Pain management strategies are discussed with patients before and after surgery.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What lifestyle changes are needed after spine surgery?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Patients may need to avoid heavy lifting, maintain good posture, and engage in physical therapy to
                  strengthen the spine and prevent future problems.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>When can I return to work or normal activities after spine surgery?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>This depends on the type of surgery and individual recovery. Your surgeon will guide when it is safe
                  to resume work and regular activities based on your progress.</p>
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
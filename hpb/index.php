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
                <input type="hidden" name="speciality" value="HPB">
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
              <h2>KIMSHEALTH Hepato-pancreato-biliary Institute</h2>
              <p>One Of The Best HPB Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>The Department of GI, Hepatobiliary, Pancreatic, and Liver Surgery at KIMSHEALTH is a super-specialty
                unit dealing with the management of diseases related to the human gastrointestinal tract and the related
                organs. The Department has a team of highly qualified and experienced Surgical Gastroenterologists
                performing a wide range of surgical procedures for oesophago-gastric, Hepatobiliary, Pancreatic,
                Intestinal & Colorectal cancers, and Bariatric procedures. Minimal Access Surgery is used by our
                Gastrointestinal Surgeons to treat major gastrointestinal surgical problems of the intestines, pancreas,
                and hepatobiliary tract including cancers. Apart from this, our transplant care program performs adult
                and pediatric Liver Transplants as well as cutting-edge Hepatobiliary procedures.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/GMWMSxqzA_I"
                  title="A talk on Liver Transplant by Dr. Shabeer Ali T U, Senior Consultant, KIMSHEALTH Trivandrum"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>; picture-in-picture;
                web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/RBk2bSkH1fs"
                  title="Laparoscopy in Colorectal Surgery" frameborder="0"
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
            <p>Specialized Care For Pancreas, Gall Bladder & Liver-Related Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Liver Surgery</h5>
                        <div class="under-line"></div>
                        <p>Specializes in surgical procedures involving the liver, including tumor resections, liver
                          transplants, and treatment of liver trauma or cysts.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Pancreatic Surgery</h5>
                        <div class="under-line"></div>
                        <p>Focuses on surgical interventions for pancreatic diseases such as pancreatic cancer,
                          pancreatitis, pancreatic cysts, and neuroendocrine tumors.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Biliary Surgery</h5>
                        <div class="under-line"></div>
                        <p>Addresses conditions affecting the bile ducts and gallbladder, including gallstones, bile
                          duct strictures, biliary tract cancers, and congenital biliary abnormalities.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Transplant Surgery</h5>
                        <div class="under-line"></div>
                        <p>Specializes in liver, pancreas, and combined liver-kidney transplantations, providing
                          comprehensive care for patients with end-stage liver or pancreatic diseases requiring
                          transplantation.</p>
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
                          <h2>Liver Cirrhosis</h2>
                          <div class="span-line"></div>
                          <p>Chronic liver disease characterized by scarring, leading to liver dysfunction, portal
                            hypertension, and complications like ascites, hepatic encephalopathy, and variceal bleeding,
                            often requiring liver transplantation.</p>
                          <p class="full-details d-none">Chronic liver disease characterized by scarring, leading to
                            liver dysfunction, portal hypertension, and complications like ascites, hepatic
                            encephalopathy, and variceal bleeding, often requiring liver transplantation.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Pancreatic Cancer</h2>
                          <div class="span-line"></div>
                          <p> Malignant tumor originating in the pancreas, presenting with symptoms like abdominal pain,
                            jaundice, weight loss, and diabetes, often requiring surgical resection or palliative
                            treatment.</p>
                          <p class="full-details d-none"> Malignant tumor originating in the pancreas, presenting with
                            symptoms like abdominal pain, jaundice, weight loss, and diabetes, often requiring surgical
                            resection or palliative treatment.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Gallstone Disease</h2>
                          <div class="span-line"></div>
                          <p>Formation of stones in the gallbladder or bile ducts, causing symptoms like abdominal pain,
                            nausea, and jaundice, treated with medications, lithotripsy, or laparoscopic
                            cholecystectomy.</p>
                          <p class="full-details d-none">Formation of stones in the gallbladder or bile ducts, causing
                            symptoms like abdominal pain, nausea, and jaundice, treated with medications, lithotripsy,
                            or laparoscopic cholecystectomy.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Hepatitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the liver, caused by viral infections, alcohol, drugs, or autoimmune
                            conditions, leading to liver damage, fibrosis, and cirrhosis, managed with antiviral
                            therapy, lifestyle modifications, and immunosuppression.</p>
                          <p class="full-details d-none">Inflammation of the liver, caused by viral infections, alcohol,
                            drugs, or autoimmune conditions, leading to liver damage, fibrosis, and cirrhosis, managed
                            with antiviral therapy, lifestyle modifications, and immunosuppression.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Bile Duct Cancer</h2>
                          <div class="span-line"></div>
                          <p>Cancerous growth in the bile ducts, presenting with symptoms like jaundice, abdominal pain,
                            and weight loss, requiring surgical resection, chemotherapy, or palliative treatment for
                            advanced disease.</p>
                          <p class="full-details d-none">Cancerous growth in the bile ducts, presenting with symptoms
                            like jaundice, abdominal pain, and weight loss, requiring surgical resection, chemotherapy,
                            or palliative treatment for advanced disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Liver Abscess</h2>
                          <div class="span-line"></div>
                          <p>Collection of pus within the liver, often caused by bacterial infection, presenting with
                            fever, abdominal pain, and jaundice, treated with antibiotics and drainage procedures.</p>
                          <p class="full-details d-none">Collection of pus within the liver, often caused by bacterial
                            infection, presenting with fever, abdominal pain, and jaundice, treated with antibiotics and
                            drainage procedures.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Cholangitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the bile ducts, usually due to bacterial infection, leading to symptoms
                            like fever, abdominal pain, and jaundice, treated with antibiotics and biliary
                            decompression.</p>
                          <p class="full-details d-none">Inflammation of the bile ducts, usually due to bacterial
                            infection, leading to symptoms like fever, abdominal pain, and jaundice, treated with
                            antibiotics and biliary decompression.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Pancreatitis</h2>
                          <div class="span-line"></div>
                          <p>Inflammation of the pancreas, caused by gallstones, alcohol, or other factors, presenting
                            with severe abdominal pain, nausea, and vomiting, managed with supportive care, pain
                            control, and treatment of underlying causes.</p>
                          <p class="full-details d-none">Inflammation of the pancreas, caused by gallstones, alcohol, or
                            other factors, presenting with severe abdominal pain, nausea, and vomiting, managed with
                            supportive care, pain control, and treatment of underlying causes.</p>
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
                          <h2>Liver Transplantation</h2>
                          <div class="span-line"></div>
                          <p>A surgical procedure where a diseased liver is replaced with a healthy liver from a
                            deceased or living donor, offering a chance of survival for patients with end-stage liver
                            disease.</p>
                          <p class="full-details d-none">A surgical procedure where a diseased liver is replaced with a
                            healthy liver from a deceased or living donor, offering a chance of survival for patients
                            with end-stage liver disease.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Regular Surgeries</h2>
                          <div class="span-line"></div>
                          <p>Common surgical procedures performed for various conditions, including appendectomy, hernia
                            repair, and bowel resections, aimed at treating diseases and improving patient health and
                            quality of life.</p>
                          <p class="full-details d-none">Common surgical procedures performed for various conditions,
                            including appendectomy, hernia repair, and bowel resections, aimed at treating diseases and
                            improving patient health and quality of life.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Laparoscopic Cholecystectomy</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive surgery to remove the gallbladder, often performed for gallstones or
                            gallbladder inflammation, resulting in shorter recovery times and less postoperative pain
                            compared to traditional open surgery.</p>
                          <p class="full-details d-none">Minimally invasive surgery to remove the gallbladder, often
                            performed for gallstones or gallbladder inflammation, resulting in shorter recovery times
                            and less postoperative pain compared to traditional open surgery.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Small Bowel & Multivisceral Transplant</h2>
                          <div class="span-line"></div>
                          <p>Complex surgical procedures involving transplantation of the small intestine and other
                            abdominal organs, performed for conditions like short bowel syndrome or intestinal failure,
                            offering hope for improved quality of life and nutritional independence.</p>
                          <p class="full-details d-none">Complex surgical procedures involving transplantation of the
                            small intestine and other abdominal organs, performed for conditions like short bowel
                            syndrome or intestinal failure, offering hope for improved quality of life and nutritional
                            independence.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hepatectomy</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of a portion of the liver, often performed to treat liver tumors, cysts,
                            or trauma, aiming to remove diseased tissue while preserving liver function.</p>
                          <p class="full-details d-none">Surgical removal of a portion of the liver, often performed to
                            treat liver tumors, cysts, or trauma, aiming to remove diseased tissue while preserving
                            liver function.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Whipple Procedure (Pancreaticoduodenectomy)</h2>
                          <div class="span-line"></div>
                          <p>Complex surgery to remove the head of the pancreas, duodenum, and portions of the bile duct
                            and stomach, often performed for pancreatic cancer or tumors of the ampulla of Vater.</p>
                          <p class="full-details d-none">Complex surgery to remove the head of the pancreas, duodenum,
                            and portions of the bile duct and stomach, often performed for pancreatic cancer or tumors
                            of the ampulla of Vater.</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Biliary Reconstruction</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure to repair or reconstruct the bile ducts, commonly performed after bile
                            duct injury, strictures, or as part of liver or pancreas transplantation, to restore bile
                            flow.</p>
                          <p class="full-details d-none">Surgical procedure to repair or reconstruct the bile ducts,
                            commonly performed after bile duct injury, strictures, or as part of liver or pancreas
                            transplantation, to restore bile flow..</p>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>• Radiofrequency Ablation (RFA)</h2>
                          <div class="span-line"></div>
                          <p>Minimally invasive procedure using heat generated by high-frequency electrical currents to
                            destroy liver tumors, offering an alternative to surgery for patients with small liver
                            cancers or metastases</p>
                          <p class="full-details d-none">Minimally invasive procedure using heat generated by
                            high-frequency electrical currents to destroy liver tumors, offering an alternative to
                            surgery for patients with small liver cancers or metastases</p>
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
              <img src="image/dr_sindhu_rs_1.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Sindhu Radha Sadasivan Nair</h3>
              <p>Consultant</p>
              <h4>MS (General Surgery), MCh (Surgical Gastroenterology), FMAS, FIAGES</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vargheese-yeldhopng__247x278_q85_crop_subsampling-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Varghese Yeldho</h3>
              <p>Associate consultant</p>
              <h4>MBBS, MS(Gen Surgery), DNB (Gen Surgery), DNB (Surg gastro)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_shabeer_ali.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shabeerali T U</h3>
              <p>Consultant</p>
              <h4>Fellowship in Hepatobiliary Surgery and Liver Transplantation at the Center for Liver and, Biliary
                Sciences Indraprastha Apollo, Delhi, DNB in Surgical Gastroenterology from the National Board in 2012,
                MCh in Surgical Gastroenterology from Medical College, Trivandrum in 2011, DNB in General Surgery from
                the National Board in 2008, MS in General Surgery from Medical College, Calicut in 2003</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shiraz Ahmad Rather</h3>
              <p>Consultant</p>
              <h4>MBBS in 2003 from ASCOMS Jammu University., MS (General Surgery) from SKIMS Deemed University., DNB
                (GI Surgery) from Lakeshore Hospital and Research Centre, Kochi.</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_varghese_yeldho_-_hepatobiliary.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Varghese Yeldho</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, MS(Gen Sur), DNB(Gen Sur), DNB(Sur Gastro)</h4>
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
            <p>KIMSHEALTH's HPB department provided excellent care for my liver condition. The skilled team's expertise
              and support made my treatment journey smooth and successful. Highly recommended.</p>
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
            <p>KIMSHEALTH's HPB department provided excellent care for my liver condition. The skilled team's expertise
              and support made my treatment journey smooth and successful. Highly recommended.</p>
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
                <span>What does HPB stand for in medicine?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>HPB stands for Hepato-pancreato-biliary, which refers to the branch of medicine that deals with
                  disorders and diseases of the liver, pancreas, and biliary system (gallbladder and bile ducts).</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What conditions fall under HPB surgery?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>HPB surgery addresses a range of conditions such as liver tumors (benign and malignant), pancreatic
                  tumors, bile duct disorders (including stones and strictures), gallbladder diseases (like gallstones
                  and inflammation), and conditions affecting the pancreas such as pancreatitis and pancreatic cancer.
                </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>When is HPB surgery recommended?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>HPB surgery is typically recommended when other treatments like medications, endoscopic procedures,
                  or non-surgical interventions are insufficient to manage HPB disorders or when there is a need for
                  tissue diagnosis, tumor removal, or structural corrections.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What are common HPB surgical procedures?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Common HPB surgical procedures include liver resection (partial or complete removal of the liver),
                  pancreatic surgery (such as Whipple procedure for pancreatic cancer), bile duct reconstruction,
                  gallbladder removal (cholecystectomy), and surgical interventions for liver and pancreatic tumors.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What are the risks associated with HPB surgery?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Risks of HPB surgery can include bleeding, infection, injury to nearby organs or structures, bile
                  leakage, blood clots, and potential complications related to anesthesia. Your surgical team will
                  discuss these risks and precautions before the procedure.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>How long does recovery take after HPB surgery?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Recovery after HPB surgery varies based on the specific procedure, individual health factors, and the
                  extent of the condition being treated. Patients may require a hospital stay ranging from several days
                  to weeks, followed by a period of postoperative care, rehabilitation, and a gradual return to normal
                  activities.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>What lifestyle changes are recommended after HPB surgery?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>After HPB surgery, patients are typically advised to follow a healthy diet recommended by their
                  healthcare team, manage pain and medications as directed, avoid heavy lifting or strenuous activities
                  during the initial recovery period, attend follow-up appointments for </p>
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
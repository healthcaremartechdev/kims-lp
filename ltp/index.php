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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  <!-- Cusome css -->
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>

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
                    <div style="font-size: 14px; font-weight: 600;"><a href="tel:04714712800" class="text-black">04714712800</a></div>
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
                <a href="#bannerSection" class="btn header_btn">Book an appointment</a>
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
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-2">CALL US</h3>
              <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                <div class="header_icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <span class="text-lg fw-bold text-color fs-6"><a href="tel:04714712800" class="text-black">04714712800</a></span>
              </div>

              <div class="or_box mb-2">
                <div class="first"></div>
                <span class="fw-bold text-danger">OR</span>
                <div class="second"></div>
              </div>
              <h3 class="fw-bold text-danger fs-6 text-uppercase mb-3">Book an Appointment Request</h3>
              <form action="mailer.php" method="post" onSubmit="return validateCaptcha()">
                <input type="hidden" name="speciality" value="Respiratory Medicine">
                <div class="row">
                  <div class="col-lg-12 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter 10 Digit Mobile Number"
                      pattern="[0-9]{10}" title="Should be 10 digit number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
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
              <h2>KIMSHEALTH Liver Transplant center in Kerala</h2>
              <p>Best Liver Transplant center in Kerala</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH Liver Transplant Program offers a comprehensive and multi-disciplinary approach to the treatment of irreversible liver disease, which has fostered excellent results in patient survival and quality of life. At KIMSHEALTH, you will have access to doctors who have vast experience in treating conditions relating to the hepatobiliary system, pancreas, and other areas.</p>
              <p>KIMSHEALTH has facilities for both deceased donor and live donor transplantation, done by a multidisciplinary team.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/dNWKjr3WWRg" title="Care Without Worries" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/GMWMSxqzA_I" title="A talk on Liver Transplant by Dr. Shabeer Ali T U, Senior Consultant, KIMSHEALTH Trivandrum" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/yeYva7VJiHY" title="Pancreatic Cancer: Don&#39;t Ignore Warning Signs | Dr. Shiraz Ahmad Rather Insights" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/u-v_m-t2Qn0" title="Understanding Small Bowel Transplants: An Expert Guidance by Dr. Shiraz Ahmad Rather | KIMSHEALTH" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section speciality-section d-none" id="speciality">
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
                        <h5>Cirrhosis</h5>
                        <div class="under-line"></div>
                        <p>Cirrhosis is advanced liver scarring caused by long-term damage from alcohol, hepatitis, or fatty liver disease. It leads to liver failure over time. Liver transplant is often the only option when the liver can no longer perform essential functions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Acute Liver Failure</h5>
                        <div class="under-line"></div>
                        <p>Acute liver failure happens suddenly, often due to drug overdose (like paracetamol), infections, or toxins. It causes rapid deterioration of liver function. Liver transplantation can be life-saving when other medical treatments fail to reverse the damage quickly.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Hepatocellular Carcinoma (HCC)</h5>
                        <div class="under-line"></div>
                        <p>HCC is the most common form of primary liver cancer, often developing in cirrhotic livers. When diagnosed early and within transplant criteria, liver transplantation can remove both the tumor and diseased liver, offering long-term cancer-free survival.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Primary Biliary Cholangitis (PBC)</h5>
                        <div class="under-line"></div>
                        <p>PBC is a chronic autoimmune disease where the body attacks bile ducts in the liver, leading to progressive liver damage. In advanced stages, when symptoms worsen or complications arise, liver transplant becomes necessary for improved quality of life.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Primary Sclerosing Cholangitis (PSC)</h5>
                        <div class="under-line"></div>
                        <p>PSC causes chronic inflammation and scarring of bile ducts inside and outside the liver. It can lead to bile buildup, infections, and liver failure. Liver transplantation is often the only effective treatment for advanced disease or associated cancers.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Autoimmune Hepatitis</h5>
                        <div class="under-line"></div>
                        <p>Autoimmune hepatitis is when the immune system attacks liver cells, causing chronic inflammation and damage. While medications can manage the condition, some patients progress to liver failure. A transplant offers a chance for complete recovery in end-stage cases.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Wilson's Disease</h5>
                        <div class="under-line"></div>
                        <p>Wilson's disease is a genetic disorder causing copper buildup in the liver and other organs. In severe cases, it leads to liver failure and neurological symptoms. Liver transplantation removes the diseased organ, correcting copper metabolism and restoring health.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Biliary Atresia</h5>
                        <div class="under-line"></div>
                        <p>Biliary atresia is a life-threatening condition in infants where bile ducts are absent or blocked. Without bile flow, liver damage progresses quickly. When early surgeries fail, liver transplant becomes the only option to save the child's life and development.</p>
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
          <h2>Conditions We Treat</h2>
          <p>Unwavering Healthcare Excellence, Every Time.</p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#diseases" data-bs-toggle="tab">Diseases</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#treatment" data-bs-toggle="tab">Treatments</a>
                </li> -->
              </ul>

              <div class="tab-content">
                <div class="tab-pane active" id="diseases">
                  <div class="owl-carousel owl-theme condition-slider dots-morphing">
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Cirrhosis</h2>
                          <div class="span-line"></div>
                          <p>Cirrhosis is advanced liver scarring caused by long-term damage from alcohol, hepatitis, or fatty liver disease. It leads to liver failure over time. Liver transplant is often the only option when the liver can no longer perform essential functions.</p>
                          <div class="show-area d-none">
                            <p>Cirrhosis is advanced liver scarring caused by long-term damage from alcohol, hepatitis, or fatty liver disease. It leads to liver failure over time. Liver transplant is often the only option when the liver can no longer perform essential functions.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Acute Liver Failure</h2>
                          <div class="span-line"></div>
                          <p>Acute liver failure happens suddenly, often due to drug overdose (like paracetamol), infections, or toxins. It causes rapid deterioration of liver function. Liver transplantation can be life-saving when other medical treatments fail to reverse the damage quickly.</p>
                          <div class="show-area d-none">
                            <p>Acute liver failure happens suddenly, often due to drug overdose (like paracetamol), infections, or toxins. It causes rapid deterioration of liver function. Liver transplantation can be life-saving when other medical treatments fail to reverse the damage quickly.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hepatocellular Carcinoma (HCC)</h2>
                          <div class="span-line"></div>
                          <p>HCC is the most common form of primary liver cancer, often developing in cirrhotic livers. When diagnosed early and within transplant criteria, liver transplantation can remove both the tumor and diseased liver, offering long-term cancer-free survival.</p>
                          <div class="show-area d-none">
                            <p>HCC is the most common form of primary liver cancer, often developing in cirrhotic livers. When diagnosed early and within transplant criteria, liver transplantation can remove both the tumor and diseased liver, offering long-term cancer-free survival.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Primary Biliary Cholangitis (PBC)</h2>
                          <div class="span-line"></div>
                          <p>PBC is a chronic autoimmune disease where the body attacks bile ducts in the liver, leading to progressive liver damage. In advanced stages, when symptoms worsen or complications arise, liver transplant becomes necessary for improved quality of life.</p>
                          <div class="show-area d-none">
                            <p>PBC is a chronic autoimmune disease where the body attacks bile ducts in the liver, leading to progressive liver damage. In advanced stages, when symptoms worsen or complications arise, liver transplant becomes necessary for improved quality of life.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Primary Sclerosing Cholangitis (PSC)</h2>
                          <div class="span-line"></div>
                          <p>PSC causes chronic inflammation and scarring of bile ducts inside and outside the liver. It can lead to bile buildup, infections, and liver failure. Liver transplantation is often the only effective treatment for advanced disease or associated cancers.</p>
                          <div class="show-area d-none">
                            <p>PSC causes chronic inflammation and scarring of bile ducts inside and outside the liver. It can lead to bile buildup, infections, and liver failure. Liver transplantation is often the only effective treatment for advanced disease or associated cancers.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Autoimmune Hepatitis</h2>
                          <div class="span-line"></div>
                          <p>Autoimmune hepatitis is when the immune system attacks liver cells, causing chronic inflammation and damage. While medications can manage the condition, some patients progress to liver failure. A transplant offers a chance for complete recovery in end-stage cases.</p>
                          <div class="show-area d-none">
                            <p>Autoimmune hepatitis is when the immune system attacks liver cells, causing chronic inflammation and damage. While medications can manage the condition, some patients progress to liver failure. A transplant offers a chance for complete recovery in end-stage cases.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Wilson’s Disease</h2>
                          <div class="span-line"></div>
                          <p>Wilson’s disease is a genetic disorder causing copper buildup in the liver and other organs. In severe cases, it leads to liver failure and neurological symptoms. Liver transplantation removes the diseased organ, correcting copper metabolism and restoring health.</p>
                          <div class="show-area d-none">
                            <p>Wilson’s disease is a genetic disorder causing copper buildup in the liver and other organs. In severe cases, it leads to liver failure and neurological symptoms. Liver transplantation removes the diseased organ, correcting copper metabolism and restoring health.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Biliary Atresia</h2>
                          <div class="span-line"></div>
                          <p>Biliary atresia is a life-threatening condition in infants where bile ducts are absent or blocked. Without bile flow, liver damage progresses quickly. When early surgeries fail, liver transplant becomes the only option to save the child’s life and development.</p>
                          <div class="show-area d-none">
                            <p>Biliary atresia is a life-threatening condition in infants where bile ducts are absent or blocked. Without bile flow, liver damage progresses quickly. When early surgeries fail, liver transplant becomes the only option to save the child’s life and development.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane d-none" id="treatment">
                  <div class="owl-carousel owl-theme condition-slider dots-morphing">
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Bronchoscopy</h2>
                          <div class="span-line"></div>
                          <p>A procedure that uses a flexible tube with a camera to examine the airways and lungs. It allows for the collection of tissue samples (biopsies), removal of foreign objects, and treatment of blockages or abnormal growths in the airways.</p>
                          <div class="show-area d-none">
                            <p>A procedure that uses a flexible tube with a camera to examine the airways and lungs. It allows for the collection of tissue samples (biopsies), removal of foreign objects, and treatment of blockages or abnormal growths in the airways.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Chest X-ray</h2>
                          <div class="span-line"></div>
                          <p>A non-invasive imaging procedure that provides detailed pictures of the lungs, heart, and chest wall. It is used to diagnose conditions such as pneumonia, lung cancer, and tuberculosis.</p>
                          <div class="show-area d-none">
                            <p>A non-invasive imaging procedure that provides detailed pictures of the lungs, heart, and chest wall. It is used to diagnose conditions such as pneumonia, lung cancer, and tuberculosis.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>CT Scan of the Chest</h2>
                          <div class="span-line"></div>
                          <p>A detailed imaging technique that produces cross-sectional images of the chest. It helps in diagnosing lung diseases, evaluating lung cancer, and detecting lung infections or pulmonary embolism.</p>
                          <div class="show-area d-none">
                            <p>A detailed imaging technique that produces cross-sectional images of the chest. It helps in diagnosing lung diseases, evaluating lung cancer, and detecting lung infections or pulmonary embolism.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Sleep Study (Polysomnography)</h2>
                          <div class="span-line"></div>
                          <p>A diagnostic test used to evaluate sleep disorders such as sleep apnea. It monitors brain activity, oxygen levels, heart rate, and breathing patterns while the patient sleeps.</p>
                          <div class="show-area d-none">
                            <p>A diagnostic test used to evaluate sleep disorders such as sleep apnea. It monitors brain activity, oxygen levels, heart rate, and breathing patterns while the patient sleeps.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Thoracentesis</h2>
                          <div class="span-line"></div>
                          <p>A procedure to remove excess fluid from around the lungs (pleural effusion). The fluid is analyzed to diagnose the cause of the fluid buildup, which may be due to infections, cancer, or heart failure.</p>
                          <div class="show-area d-none">
                            <p>A procedure to remove excess fluid from around the lungs (pleural effusion). The fluid is analyzed to diagnose the cause of the fluid buildup, which may be due to infections, cancer, or heart failure.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Lung Biopsy</h2>
                          <div class="span-line"></div>
                          <p>A procedure in which a small sample of lung tissue is taken for examination. It is used to diagnose lung diseases such as lung cancer, interstitial lung disease, or infections.</p>
                          <div class="show-area d-none">
                            <p>A procedure in which a small sample of lung tissue is taken for examination. It is used to diagnose lung diseases such as lung cancer, interstitial lung disease, or infections.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Mechanical Ventilation</h2>
                          <div class="span-line"></div>
                          <p>A therapeutic procedure used for patients with respiratory failure, providing support to help them breathe when they are unable to do so effectively on their own. This includes both invasive and non-invasive ventilation options.</p>
                          <div class="show-area d-none">
                            <p>A therapeutic procedure used for patients with respiratory failure, providing support to help them breathe when they are unable to do so effectively on their own. This includes both invasive and non-invasive ventilation options.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>

                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Bronchial Thermoplasty</h2>
                          <div class="span-line"></div>
                          <p>A procedure for severe asthma patients in which heat is used to reduce the smooth muscle in the airways, helping to reduce the frequency and severity of asthma attacks.</p>
                          <div class="show-area d-none">
                            <p>A procedure for severe asthma patients in which heat is used to reduce the smooth muscle in the airways, helping to reduce the frequency and severity of asthma attacks.</p>
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
              <img src="image/dr-shabeer-ali.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shabeerali T U</h3>
              <p>Chief Coordinator & Senior Consultant</p>
              <h4>DNB (Surgical Gastroenterology), MCh, MS, DNB (General Surgery)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection">Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr_shiraz_ahmad_rather.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Shiraz Ahmad Rather</h3>
              <p>Consultant & Head of Multivisceral Transplant</p>
              <h4>M.B.B.S, MS (General Surgery), DrNB (GI Surgery), FRCS</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-vargheese-yeldho.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Varghese Yeldho</h3>
              <p>Consultant</p>
              <h4>MBBS, MS(Gen Surgery), DNB, DrNB (Surg gastro)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/doctor.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Govind Jayan</h3>
              <p>Associate Consultant</p>
              <h4>MBBS, MS (General Surgery), DrNB (Surgical Gastroenterology)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
            </div>
          </div>

          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/Dr-Anu.jpg" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Anu K Vasu</h3>
              <p>Associate Consultant</p>
              <h4>M.B.B.S, DNB (Pediatrics), DCH (Pediatrics)</h4>
              <a href="#bannerSection" class="btn btn-primary smooth-scroll" data-target="bannerSection"> Request An Appointment </a>
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
                <h3>Mr. Rajesh Kumar</h3>
                <p>Kochi, India</p>
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
            <p>I was diagnosed with end-stage liver disease and nearly gave up hope. KIMS Kerala guided me with expert care and compassion. After a successful liver transplant, I feel stronger, healthier, and grateful for a second chance at life.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Mr. Prakash Nair</h3>
                <p>Mumbai, India</p>
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
            <p>My father’s liver failure progressed rapidly. We turned to KIMS Kerala in desperation. Their quick response and experienced transplant team saved his life. Today, he’s home, recovering well. We’re truly thankful for the care and dedication shown throughout.</p>
          </div>

          <div class="testimonial-content-card ">
            <div class="d-flex testimonial-main-area">
              <div class="testimonial-author">
                <h3>Mrs. Deepika Sharma</h3>
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
            <p>I was constantly fatigued and struggling with daily tasks. Liver disease had taken over my life. KIMS Kerala changed everything. Their transplant expertise and constant support brought me back from the edge. I now live each day with strength and hope.</p>
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
                <span>Who is eligible for a liver transplant at KIMSHEALTH?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Patients with irreversible liver damage or liver failure who are physically fit and mentally prepared for surgery are eligible. Each case is evaluated by a multidisciplinary team for suitability.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>Does KIMSHEALTH perform both adult and pediatric liver transplants?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, KIMSHEALTH offers liver transplants for both adults and children, including complex procedures like split-liver and combined organ transplants.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>What is the success rate of liver transplants at KIMSHEALTH?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>KIMSHEALTH has a liver transplant success rate of approximately 90%, comparable with leading international transplant centers.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>What types of liver transplants are performed?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The hospital performs living donor liver transplants, deceased donor liver transplants, split-liver transplants, and combined liver-kidney transplants.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>How is donor compatibility ensured?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Extensive medical testing is done to ensure blood group matching, organ size compatibility, and overall health of the donor to ensure transplant safety and success.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>What kind of post-transplant care is provided?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Patients receive dedicated follow-up care, including medication management, infection prevention, regular lab tests, and lifestyle counseling to support long-term recovery.</p>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>How do I start the liver transplant process at KIMSHEALTH?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You can schedule a consultation with the Liver Transplant Unit for evaluation. A transplant coordinator will guide you through the work-up, registration, and transplant process.</p>
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
          <p>Copyright © <span class="text-white current-year"></span>. KIMSHOSPITAL. All Rights Reserved</p>
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

</body>

</html>
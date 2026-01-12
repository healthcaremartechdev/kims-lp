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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPDG225B" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
                <input type="hidden" name="speciality" value="Cosmetology">
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
              <h2>KIMSHEALTH Cosmetology Institute</h2>
              <p>One Of The Best Cosmetology Hospitals In Kerala</p>
            </div>
            <div class="about-content">
              <p>KIMSHEALTH in Kerala is a leading destination for cosmetology services, offering a comprehensive range
                of treatments to enhance aesthetic appearance and boost self-confidence. The cosmetology department at KIMS specializes in various procedures such as cosmetic surgeries, laser treatments for skin rejuvenation and hair removal and filler injections, dermatological treatments for acne and pigmentation, and non-invasive procedures like chemical peels and microdermabrasion. With a team of
                skilled dermatologists, plastic surgeons, and cosmetic specialists, we ensure safe and effective
                treatments tailored to individual needs. The hospital's modern facilities, advanced technologies, and
                commitment to patient satisfaction make it a trusted choice for those seeking professional cosmetology
                services in Kerala and beyond.</p>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 my-lg-auto pt-lg-5">
            <div class="owl-carousel owl-theme video-slider dots-morphing">
              <div class="video-item">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/dNWKjr3WWRg"
                  title="Care Without Worries" frameborder="0"
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
            <p>Specialized Care For Cosmetic Conditions, Diagnostics, and Treatments.</p>
          </div>
          <div class="carousel-wrap mt-lg-4 mt-2 pt-lg-4 pt-2">
            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="owl-carousel owl-theme mb-0 specility_card dots-morphing">
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Dermatologic Cosmetology</h5>
                        <div class="under-line"></div>
                        <p>Focuses on improving skin health and appearance through various treatments like chemical
                          peels, microdermabrasion, and laser therapy.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Surgical Cosmetology</h5>
                        <div class="under-line"></div>
                        <p>Involves surgical procedures such as liposuction, facelifts, breast augmentation, and
                          rhinoplasty to enhance physical appearance.</p>
                      </div>
                    </div>
                  </div>

                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Non-Surgical Cosmetology</h5>
                        <div class="under-line"></div>
                        <p>Utilizes non-invasive procedures like dermal fillers, and thread lifts to rejuvenate and enhance facial features.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 box-shadow-1 box-shadow-1-primary">
                    <div class="card-body py-4 px-4">
                      <div class="pt-2 pb-3">
                        <h5>Hair Restoration Cosmetology</h5>
                        <div class="under-line"></div>
                        <p>Specializes in treating hair loss and promoting hair growth through techniques like hair
                          transplant surgery, PRP therapy, and scalp micro pigmentation.</p>
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
                          <h2>Acne</h2>
                          <div class="span-line"></div>
                          <p>Common skin condition causing pimples, blackheads, and inflammation due to excess oil production, bacteria, and clogged pores, often treated with topical medications and skincare routines.</p>
                            <div class="show-area d-none">
                              <p>Common skin condition causing pimples, blackheads, and inflammation due to excess oil production, bacteria, and clogged pores, often treated with topical medications and skincare routines.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Eczema</h2>
                          <div class="span-line"></div>
                          <p>Chronic skin disorder characterized by red, itchy, and inflamed patches, triggered by
                            genetics, allergies, or environmental factors, managed with moisturizers, corticosteroids,
                            and antihistamines.</p>
                            <div class="show-area d-none">
                               <p>Chronic skin disorder characterized by red, itchy, and inflamed patches, triggered by genetics, allergies, or environmental factors, managed with moisturizers, corticosteroids, and antihistamines.</p>
                            </div>
                         
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Wrinkles</h2>
                          <div class="span-line"></div>
                          <p>Fine lines and creases on the skin's surface caused by aging, sun exposure, and collagen depletion, treated with skin care products, dermal fillers, or laser resurfacing.</p>
                          <div class="show-area d-none">
                            <p>Fine lines and creases on the skin's surface caused by aging, sun exposure, and collagen depletion, treated with skin care products, dermal fillers, or laser resurfacing.</p>
                          </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Hyperpigmentation</h2>
                          <div class="span-line"></div>
                          <p>Dark patches or spots on the skin resulting from excess melanin production due to sun
                            exposure, hormonal changes, or inflammation, managed with topical treatments, chemical
                            peels, or laser therapy.</p>
                            <div class="show-area d-none">
                              <p>Dark patches or spots on the skin resulting from excess melanin production due to sun exposure, hormonal changes, or inflammation, managed with topical treatments, chemical peels, or laser therapy.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Rosacea</h2>
                          <div class="span-line"></div>
                          <p>Chronic skin condition causing facial redness, flushing, and visible blood vessels,
                            triggered by genetics, sun exposure, or certain foods, managed with topical medications,
                            oral antibiotics, and laser therapy.</p>
                            <div class="show-area d-none">
                              <p>Chronic skin condition causing facial redness, flushing, and visible blood vessels, triggered by genetics, sun exposure, or certain foods, managed with topical medications, oral antibiotics, and laser therapy.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Hair Loss (Alopecia)</h2>
                          <div class="span-line"></div>
                          <p>Condition characterized by thinning or loss of hair on the scalp, caused by genetics,
                            hormonal changes, or medical conditions, treated with medications, hair transplant surgery,
                            or scalp micropigmentation.</p>
                            <div class="show-area d-none">
                              <p>Condition characterized by thinning or loss of hair on the scalp, caused by genetics, hormonal changes, or medical conditions, treated with medications, hair transplant surgery, or scalp micropigmentation.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Psoriasis</h2>
                          <div class="span-line"></div>
                          <p>Chronic autoimmune disease causing red, scaly patches on the skin due to rapid skin cell
                            growth, managed with topical treatments, phototherapy, systemic medications, or biologic
                            therapy.</p>
                            <div class="show-area d-none">
                              <p>Chronic autoimmune disease causing red, scaly patches on the skin due to rapid skin cell growth, managed with topical treatments, phototherapy, systemic medications, or biologic therapy.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Melasma</h2>
                          <div class="span-line"></div>
                          <p>Skin condition characterized by brown patches or discoloration on the face, triggered by
                            hormonal changes, sun exposure, or genetics, treated with topical medications, chemical
                            peels, or laser therapy.</p>
                            <div class="show-area d-none">
                              <p>Skin condition characterized by brown patches or discoloration on the face, triggered by hormonal changes, sun exposure, or genetics, treated with topical medications, chemical peels, or laser therapy.</p>
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
                          <h2>Anti-Ageing</h2>
                          <div class="span-line"></div>
                          <p>Skin care treatment which provides instant visible glow with no downtime. It uses patented technology to cleanse, extract and hydrate skin with nourishing serums. Hydrafacial improves skin radiance, evens fine lines and wrinkles. It is suited for all skin types and is beneficial for long term skin health.</p>
                          <div class="show-area d-none">
                            <h6>Hydra Facial</h6>
                            <p>Skin care treatment which provides instant visible glow with no downtime. It uses patented technology to cleanse, extract and hydrate skin with nourishing serums. Hydrafacial improves skin radiance, evens fine lines and wrinkles. It is suited for all skin types and is beneficial for long term skin health.</p>
                            <h6>Botox Injection</h6>
                            <p>Shots to smooth wrinkles on face, neck and hands. It addresses horizontal forehead lines, frown lines, smile lines, crow’s feet. It also address excess sweating of palms, soles , armpits. Botox is a safe procedure with immediate result</p>
                            <h6>Platelet Rich Plasma Therapy (PRP)</h6>
                            <p>PRP therapy is an anti- aging procedure that uses plasma from your own blood to stimulate collagen and boost healing to achieve natural looking skin. PRP reduces fine lines and wrinkles and improves skin texture</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Skin Rejuvenation Treatment</h2>
                          <div class="span-line"></div>
                          <p>Intense Pulsed Light with Nine Filters for the treatment of the following conditions Benign epidermal pigmented lesions, including dyschromia and hyperpigmentation Permanent hair reduction. Benign cutaneous vascular lesions, including port wine stains, haemangioma, telangiectasias, rosacea, angiomas, poikiloderma of Civatte and venous malformation Mild to moderate inflammatory acne.</p>
                          <div class="show-area d-none">
                            <p>Intense Pulsed Light with Nine Filters for the treatment of the following conditions Benign epidermal pigmented lesions, including dyschromia and hyperpigmentation Permanent hair reduction. Benign cutaneous vascular lesions, including port wine stains, haemangioma, telangiectasias, rosacea, angiomas, poikiloderma of Civatte and venous malformation Mild to moderate inflammatory acne.</p>
                            <h6>QSwitched NdYAG Lasers</h6>
                            <p>Uses particular laser wavelength to aid skin rejuvenation. It has multiple parameters for Freckles lentigines Removal of dark tattoos Pigmentation correction Lip lightening / skin whitening QSwitched NdYAG Laser toning gives an instant glow before marriage, party functions</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Hair Loss Treatment</h2>
                          <div class="span-line"></div>
                          <p>Growth factor based treatment using plasma with high concentration of platelets obtained from own blood.
                            Effective both in prevention of hair loss and promoting new hair growth Increases the thickness and density of your strands Effective treatment option for male and female pattern hair loss.</p>
                          <div class="show-area d-none">
                            <h6>Platelet Rich Plasma Therapy (PRP)</h6>
                            <p>Growth factor based treatment using plasma with high concentration of platelets obtained from own blood.
                              Effective both in prevention of hair loss and promoting new hair growth Increases the thickness and density of your strands Effective treatment option for male and female pattern hair loss.</p>
                            <h6>Mesotherapy</h6>
                            <p>Mesotherapy is a non-invasive technique based on superficial microinjections. The solution injected can contain a wide range of minerals, vitamins, amino acids, nucleic acids and co-enzymes that can be tailored to each patient’s individual needs. Mesotherapy is an alternative treatment for baldness in men and women which helps in hair regrowth. It can also delay male pattern baldness.</p>
                            <h6>Intradermal Injections for Localised hair loss</h6>
                            <p>Intradermal Injections administerd on areas of localized hair loss on scalp, beard areas and eyebrows. Highly effective and first line therapy for alopecia areata New hair growth usually visible within 4-6 weeks. </p>
                          </div>

                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Treatment for Pimples and Scars</h2>
                          <div class="span-line"></div>
                          <p>Microdermabrasion is a superficial resurfacing technique commonly used by Dermatologists for treating acne scars, dark spots, enlarged pores and facial rejuvenation. Microdermabrasion is a fairly simple, easy, painless, non-invasive, skin rejuvenation procedure using a combination of a fine abrasive tip or crystals and vacuum suction applied to the skin. The procedure can be performed in OP setup with minimal or no side effects.</p>
                          <div class="show-area d-none">
                            <h6>Microdermabrasion</h6>
                            <p>Microdermabrasion is a superficial resurfacing technique commonly used by Dermatologists for treating acne scars, dark spots, enlarged pores and facial rejuvenation. Microdermabrasion is a fairly simple, easy, painless, non-invasive, skin rejuvenation procedure using a combination of a fine abrasive tip or crystals and vacuum suction applied to the skin. The procedure can be performed in OP setup with minimal or no side effects.</p>
                            <h6>Micro-Needling</h6>
                            <p>Microneedling (also known as collagen induction therapy) is a minimally invasive procedure for scar remodeling using fine needles.
                              Stimulates natural healing process leading to production of more collagen and elastin Reduces scar and results in more even skin texture.
                            </p>
                            <h6>Chemical Peeling</h6>
                            <p>Procedure of applying chemical solution on skin resulting in controlled removal of top layers of skin. Improves acne, acne scars, pigmentation , photo damage and uneven skin tone and texture Also improves fine lines, wrinkles, dullness, signs of ageing Allows new skin to resurface making your complexion look brighter and healthier </p>
                            <h6>Acne Scar revision</h6>
                            <p>Acne scars are usually the result of inflamed blemishes caused by skin pores engorged with excess oil, dead skin cells and bacteria. The inflammatory lesions can result in scars which can sometimes be disfiguring. Subcision and Microneedling are procedures that can reduce the depth of acne scars</p>
                            <h6>Laser Resurfacing</h6>
                            <p>Laser resurfacing is a treatment to reduce facial wrinkles and skin irregularities, such as blemishes or acne scars. The technique directs short, concentrated pulsating beams of light at irregular skin, precisely removing skin layer by layer</p>
                            <h6>Skin Lightening</h6>
                            <p>Mesotherapy and Chemical peeling help in reducing the pigmentation.</p>
                          </div>

                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>

                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Unwanted Hair Removal Treatment</h2>
                          <div class="span-line"></div>
                          <p>Non invasive procedure to reduce unwanted hair on your body Safe , effective and long lasting hair reduction for aesthetic as well as certain medical indications.</p>
                          <div class="show-area d-none">
                            <h6>Laser Hair Removal</h6>
                            <p>Non invasive procedure to reduce unwanted hair on your body Safe , effective and long lasting hair reduction for aesthetic as well as certain medical indications.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Other Facilities Available</h2>
                          <div class="span-line"></div>
                          <p>Wart is a skin-coloured or reddish-brown lump on the skin that is small & hard & sometimes soft. Skin tags are benign harmless growths of skin that are attached to the body by peduncle or stalk. Warts, Skin tags and moles can be removed with electrosurgery, which is quick & painless. No cutting & no suture is required.</p>
                          <div class="show-area d-none">
                            <h6>Electrosurgery for Warts, Moles and Skin tags</h6>
                            <p>Wart is a skin-coloured or reddish-brown lump on the skin that is small & hard & sometimes soft. Skin tags are benign harmless growths of skin that are attached to the body by peduncle or stalk. Warts, Skin tags and moles can be removed with electrosurgery, which is quick & painless. No cutting & no suture is required.</p>
                            <h6>Radiofrequency Cautery</h6>
                            <p>Radiofrequency alternating current is used to raise the temperature of the tissues treated which produces desiccation and at the same time, very minimal bleeding. Radiofrequency Cautery is a widely accepted and highly effective method for the removal of large warts and benign growths on the skin.</p>
                            <h6>Cryotherapy for Corns, Warts, Calluses and Keloids</h6>
                            <p>Cryosurgery is the application of extreme cold to destroy abnormal or diseased tissue using Liquid nitrogen. Cryotherapy is used to treat a number of diseases and disorders, most especially skin conditions like warts, moles, skin tags and solar keratoses</p>
                            <h6>Painless ear piercing</h6>
                            <p>Today’s modern ear piercing machines make the process of getting your ears pierced quickly and a fairly painless event. Topical anesthetic agents are used to numb the earlobes before piercing.</p>
                            <h6>Patch testing to detect allergy</h6>
                            <p>Patch tests can detect delayed allergic reactions, which can take several days to develop. Patch tests don’t use needles. Instead, allergens are applied to patches, which are then placed on your skin. During a patch test, your skin may be exposed to 20 to 30 extracts of substances that are known to cause contact dermatitis</p>
                            <h6>Phototherapy</h6>
                            <p>Treatment modality which uses UV light to treat skin conditions like psoriasis, atopic dermatitis, vitiligo. Skin is exposed to UV light for a set amount of time, several times per week. It is a safe treatment modality suitable for all ages.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <!-- new -->
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Rhinoplasty</h2>
                          <div class="span-line"></div>
                          <p>Surgical reshaping of the nose to enhance facial harmony and proportions, correcting nasal
                            asymmetry, size, or shape, improving both appearance and breathing function.</p>
                          <div class="show-area d-none">
                            <p>Surgical reshaping of the nose to enhance facial harmony and proportions, correcting nasal asymmetry, size, or shape, improving both appearance and breathing function.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Implants</h2>
                          <div class="span-line"></div>
                          <p>Artificial materials, like silicone or saline, surgically inserted to enhance specific body
                            parts such as chin, cheeks, or lips, achieving desired volume, contour, or symmetry for
                            improved aesthetics and confidence.</p>
                          <div class="show-area d-none">
                            <p>Artificial materials, like silicone or saline, surgically inserted to enhance specific body parts such as chin, cheeks, or lips, achieving desired volume, contour, or symmetry for improved aesthetics and confidence.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Augmentations</h2>
                          <div class="span-line"></div>
                          <p>Cosmetic enhancements involving surgical or non-surgical procedures to modify and improve
                            the appearance of body features like breasts, buttocks, or facial contours, boosting
                            self-esteem and achieving desired aesthetic goals.</p>
                            <div class="show-area d-none">
                               <p>Cosmetic enhancements involving surgical or non-surgical procedures to modify and improve the appearance of body features like breasts, buttocks, or facial contours, boosting self-esteem and achieving desired aesthetic goals.</p>
                            </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Liposuction</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of excess fat deposits from specific areas of the body, sculpting, and
                            contouring to achieve a more toned and proportionate silhouette.</p>
                            <div class="show-area d-none">
                              <p>Surgical removal of excess fat deposits from specific areas of the body, sculpting, and contouring to achieve a more toned and proportionate silhouette. </p>
                            </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Eyelid Surgery (Blepharoplasty)</h2>
                          <div class="span-line"></div>
                          <p>Surgical procedure to rejuvenate the appearance of the eyelids, reducing sagging skin,
                            puffiness, or bags, creating a more youthful and refreshed look around the eyes.
                          </p>
                          <div class="show-area d-none">
                            <p>Surgical procedure to rejuvenate the appearance of the eyelids, reducing sagging skin, puffiness, or bags, creating a more youthful and refreshed look around the eyes.</p>
                          </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn">
                        <div class="card-body">
                          <h2>Lip Augmentation</h2>
                          <div class="span-line"></div>
                          <p>Enhancement of lip volume and shape through injectable fillers or implants, achieving
                            fuller, more defined lips for a youthful and attractive appearance.</p>
                            <div class="show-area d-none">
                              <p>Enhancement of lip volume and shape through injectable fillers or implants, achieving fuller, more defined lips for a youthful and attractive appearance. </p>
                            </div>
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                    </div>
                    <div class="disease-item">
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Abdominoplasty (Tummy Tuck)</h2>
                          <div class="span-line"></div>
                          <p>Surgical removal of excess skin and fat from the abdomen, tightening the abdominal muscles,
                            and improving overall abdominal contour for a firmer, flatter midsection.</p>
                            <div class="show-area d-none">
                              <p>Surgical removal of excess skin and fat from the abdomen, tightening the abdominal muscles, and improving overall abdominal contour for a firmer, flatter midsection.</p>
                            </div>
                          
                          <a href="javascript:void(0);" class="" onclick="showmodal(this);">Know More</a>
                        </div>
                      </div>
                      <div class="card treatment-card treatment-btn mb-3">
                        <div class="card-body">
                          <h2>Brazilian Butt Lift</h2>
                          <div class="span-line"></div>
                          <p>Fat transfer procedure involving liposuction of excess fat from one area and injection into
                            the buttocks to enhance volume, shape, and contour, achieving a fuller and lifted
                            appearance.</p>
                            <div class="show-area d-none">
                              <p>Fat transfer procedure involving liposuction of excess fat from one area and injection into the buttocks to enhance volume, shape, and contour, achieving a fuller and lifted appearance.</p>
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
              <img src="image/dr-rema-devi_1.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Rema Devi T J</h3>
              <p>Consultant</p>
              <h4>MBBS, MD Dermatology Venereology Leprology, DNB Dermatology Venereology Leprology</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-asha-zachariah_1.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Asha Zacharia</h3>
              <p>Consultant</p>
              <h4>MBBS, MD (Dermatology)</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/dr-mini-pn_1.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Mini P N</h3>
              <p>Consultant</p>
              <h4>MBBS, MD Dermatology, Venereology, Leprosy</h4>
              <a href="#" class="btn btn-primary"> Request An Appointment </a>
            </div>
          </div>
          <div class="expart-card">
            <div class="expert-image position-relative">
              <img src="image/sajifiroz_2_new.png" alt="" class="img-fluid">
            </div>
            <div class="card-content mt-3">
              <h3>Dr. Saji Firoz</h3>
              <p>Consultant</p>
              <h4>MBBS from Trivandrum Govt Medical College, MD Dermatology, Venereology and Leprology from Trivandrum
                Govt. Medical College</h4>
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
            <p>KIMSHEALTH's cosmetology services exceeded my expectations! The team's expertise and personalized
              approach made me feel confident and cared for throughout my treatment. I'm thrilled with the results and
              highly recommend their services to anyone seeking top-notch cosmetic care.</p>
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
            <p>Exceptional cosmetology services at KIMSHEALTH! From the moment I walked in, I felt welcomed and
              comfortable. The staff's professionalism and attention to detail ensured a fantastic experience, and I
              couldn't be happier with the outcome of my treatment.</p>
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
            <p>I had an amazing experience with KIMSHEALTH's cosmetology department! The team's knowledge and skill are
              unparalleled, and their dedication to patient satisfaction is evident in every interaction. I'm grateful
              for their expertise and highly recommend their services</p>
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
                <span>Who performs cosmetology procedures?</span>
              </button>
            </h2>
            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Cosmetology procedures are typically performed by trained and licensed healthcare professionals, such
                  as dermatologists, plastic surgeons, or specialized cosmetologists.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span>What are the benefits of cosmetology?</span>
              </button>
            </h2>
            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Benefits include addressing specific cosmetic concerns with medically proven treatments, achieving
                  long-lasting results, and often improving overall skin health.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span>Are there risks associated with cosmetology?</span>
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, there can be risks such as allergic reactions, infections, or adverse effects from procedures,
                  which is why it's important to seek treatment from qualified professionals.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span>Is cosmetology covered by insurance?</span>
              </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>In some cases, medical cosmetology procedures may be covered by insurance if deemed medically
                  necessary, such as reconstructive surgeries after trauma or certain skin conditions. However, most
                  elective cosmetic procedures are not covered.</p>
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
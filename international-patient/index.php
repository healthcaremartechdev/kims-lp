<?php
session_start();

// Define available operations
$operators = ['+', '-', '*', '/'];
$operator = $operators[array_rand($operators)];

// Generate numbers based on operator
switch ($operator) {
  case '+':
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
    $answer = $num1 + $num2;
    break;
  case '-':
    $num1 = rand(10, 30);
    $num2 = rand(1, $num1); // Ensure non-negative result
    $answer = $num1 - $num2;
    break;
  case '*':
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $answer = $num1 * $num2;
    break;
  case '/':
    $num2 = rand(1, 10);
    $answer = rand(1, 10);
    $num1 = $num2 * $answer; // Ensure clean division
    break;
}

// Store the answer in session
$_SESSION['captcha_answer'] = $answer;
$_SESSION['captcha_question'] = "$num1 $operator $num2";
?>

<!DOCTYPE html>
<html lang="en">
<!-- On HMT Server -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KIMSHEALTH offers dedicated international patient services across Super Speciality Hospitals in Trivandrum, Kollam, Kottayam, Perintalmanna, Nagercoil, and other locations in India. Comprehensive care and seamless support for global patients.">
    <meta name="keywords" content="Super Speciality Hospitals in Trivandrum, Super Speciality Hospitals in Kollam, Super Speciality Hospitals in Kottayam, Super Speciality Hospitals in Perintalmanna, Super Speciality Hospitals in Nagercoil, Super Speciality Hospitals in India" />
    <title>International Patient Services | Super Speciality Hospitals in Trivandrum, Kollam, Kottayam, Perintalmanna, Nagercoil, India - KIMSHEALTH</title>

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.18/dist/lenis.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.0/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- <link rel="stylesheet" href="css/multislider.css"> -->


</head>

<body>
    <div class="navik-header header-shadow">
        <div class="menu-top-bar">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="logo" data-mobile-logo="img/logo.png" data-sticky-logo="img/logo.png">
                    <a href="index.php">
                        <img src="img/logo.png" alt="KIMSHEALTH" />
                    </a>
                </div>
                <div class="header-contact d-flex align-items-center justify-content-center">
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Locations</a></li>
                    </ul>
                    <div class="d-flex align-items-center gap-3 ms-3">
                        <div class="whatapp-icon">
                            <a href="#" target="_blank">
                                <img src="img/whatsapp.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="cta-button">
                            <a href="#" class="main-button py-2">Book an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <!-- Navik header -->
                <div class="navik-header-container">

                    <!--Logo-->
                    <div class="logo d-lg-none d-md-none" data-mobile-logo="img/logo.png" data-sticky-logo="img/logo.png">
                        <a href="index.php">
                            <img src="img/logo.png" alt="KIMSHEALTH" />
                        </a>
                    </div>

                    <!-- Burger menu -->
                    <div class="burger-menu">
                        <div class="line-menu line-half first-line"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu line-half last-line"></div>
                    </div>

                    <div class="d-lg-flex d-block align-items-center gap-4">
                        <!--Navigation menu-->
                        <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                            <ul>
                                <li><a href="#about-us">About Us</a></li>
                                <li><a href="#our-specialists">Our Specialist</a></li>
                                <li><a href="#our-services">Our services</a></li>
                                <li><a href="#ipr">IPR</a></li>
                                <li><a href="#our-expert">Our Expert</a></li>
                                <li><a href="#testimonials">Testimonial</a></li>
                                <li><a href="#why-choose-us">Why Choose Us</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <!-- <li><a href="#" class="navbar-button mb-lg-0 mb-3">Book An Appointment</a></li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="main" role="main">
        <section class="banner-section position-relative" id="bannerform">
            <img src="img/banner.jpg" alt="" class="img-fluid w-100">
            <!-- <img src="img/mobile-banner.jpg" alt="" class="img-fluid w-100 d-lg-none d-block"> -->
            <div class="container banner-container">
                <div class="row">
                    <div class="col-lg-5 mt-lg-0 mt-4">
                        <div class="main-heading sub-heading">
                            <h2>World Class Healthcare</h2>
                            <span>In Kerala, India</span>
                            <p>Expert medical care with dedicated support for international patient at KIMSHEALTH</p>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <a href="#" class="secondary-btn">Request a Consultation <i class="fa-solid fa-angle-right"></i></a>
                            <a href="#" class="tertiary-btn"><i class="fa-brands fa-whatsapp"></i> Whatsapp Us</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="h-100"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 international-care international-care-bg">
            <div class="container-fluid">
                <div class="form-box-wrap">
                    <div class="row">
                        <div class="col-md-3 my-lg-auto my-md-auto mb-3">
                            <div class="main-heading">
                                <h5>Plan your treatment with us</h5>
                                <h2>Enquire for <br>
                                    <span>International Care</span>
                                </h2>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <form action="mailer.php" method="post" class="contact-form-with-icons">
                                <div class="row">
                                    <div class="col-md-3 form-group form-group-icon position-relative field-icon">
                                        <img src="img/user.png" alt="" class="img-fluid">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name*" required="">
                                    </div>
                                    <div class="col-md-3 form-group form-group-icon position-relative field-icon">
                                        <img src="img/telephone.png" alt="" class="img-fluid">
                                        <input type="tel" name="phone" inputmode="numeric" maxlength="15" class="form-control" placeholder="Number (with Code)*" required="" autocomplete="tel">
                                    </div>
                                    <div class="col-md-3 form-group form-group-icon position-relative field-icon">
                                        <img src="img/envelope.png" alt="" class="img-fluid">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-3 form-group form-group-icon position-relative field-icon">
                                        <img src="img/internet.png" alt="" class="img-fluid">
                                        <select name="" id="" class="form-select form-select-custom" name="country" style="padding-bottom: 8px;">
                                            <option value="">Country</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 form-group form-group-icon position-relative field-icon">
                                        <img src="img/badge.png" alt="" class="img-fluid">
                                        <select name="" id="" class="form-select form-select-custom" name="speciality" style="padding-bottom: 8px;">
                                            <option value="">Speciality/Treatment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5 form-group form-group-noicon position-relative">
                                        <input type="text" name="message" class="form-control" placeholder="Briefly describe condition">
                                    </div>
                                    
                                    <div class="col-md-6 d-lg-none d-md-none">
                                        <div class="form-check form-group">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck" required>
                                            <label class="form-check-label" for="flexCheck">
                                                I agreed to be contacted via Whatsapp/Email/Phone
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 form-group position-relative form-group-btn">
                                        <input type="submit" class="main-button text-uppercase w-100" value="Submit">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-group d-md-block d-none">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheck" required>
                                            <label class="form-check-label" for="flexCheck">
                                                I agreed to be contacted via Whatsapp/Email/Phone
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-7 mb-lg-0 mb-4">
                        <div class="main-heading sub-heading">
                            <h2>Why International Patients Come To KIMSHEALTH</h2>
                            <h3>World-class medical care for patients everywhere.</h3>
                        </div>
                        <div class="generic-content">
                            <p>KIMSHEALTH is a multi-specialty hospital group based in Thiruvananthapuram (Trivandrum), the capital of Kerala. Our international patient team exists for one reason: so that travelling for care feels organised, not overwhelming.</p>
                            <p>From your first message to your follow-up after returning home, one coordinator knows your case and speaks your language where possible.</p>
                            <div class="row gx-3">
                                <div class="internation-logo-box">
                                    <img src="img/epihc.png" alt="" class="img-fluid">
                                </div>
                                <div class="internation-logo-box">
                                    <img src="img/nabh-logo.png" alt="" class="img-fluid">
                                </div>
                                <div class="internation-logo-box">
                                    <img src="img/ACHS-international.png" alt="" class="img-fluid">
                                </div>
                                <div class="internation-logo-box">
                                    <img src="img/NABL_Official.png" alt="" class="img-fluid">
                                </div>
                            </div>

                            <a href="#" class="main-button mt-3">Talk to a Coordinator</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="internation-review-box">
                            <h6>Specialists who review your case first</h6>
                            <p>Share reports before travelling and know the plan in advance.</p>
                        </div>
                        <div class="internation-review-box">
                            <h6>Costs explained upfront</h6>
                            <p>A written estimate range, so there are fewer surprises on arrival.</p>
                        </div>
                        <div class="internation-review-box">
                            <h6>Care that continues after you leave</h6>
                            <p>Follow-up consults by video with your treating team.</p>
                        </div>
                        <div class="internation-review-box">
                            <h6>A calm, safe setting</h6>
                            <p>Kerala is known for hospitality, English-speaking staff and recovery-friendly surroundings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta-section international-counter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <div class="cta-card">
                            <div class="cta-card-top">
                                <h4>40+</h4>
                            </div>
                            <div class="cta-card-buttom d-flex align-items-center gap-2 gap-lg-2 w-100">
                                <div class="card-ic">
                                    <img src="img/inter_badge.png" alt="" class="img-fluid">
                                </div>
                                <div class="usp-card-content">
                                    <p>Specialities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0 mb-3">
                        <div class="cta-card">
                            <div class="cta-card-top">
                                <h4>100+</h4>
                            </div>
                            <div class="cta-card-buttom d-flex align-items-center gap-2 gap-lg-2 w-100">
                                <div class="card-ic">
                                    <img src="img/inter_doctor.png" alt="" class="img-fluid">
                                </div>
                                <div class="usp-card-content">
                                    <p>Experienced Doctors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0">
                        <div class="cta-card">
                            <div class="cta-card-top">
                                <h4>41000+</h4>
                            </div>
                            <div class="cta-card-buttom d-flex align-items-center gap-2 gap-lg-2 w-100">
                                <div class="card-ic">
                                    <img src="img/inter_nurse.png" alt="" class="img-fluid">
                                </div>
                                <div class="usp-card-content">
                                    <p>Trained Staffs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-lg-0">
                        <div class="cta-card">
                            <div class="cta-card-top">
                                <h4>1750+</h4>
                            </div>
                            <div class="cta-card-buttom d-flex align-items-center gap-3 gap-lg-2 w-100">
                                <div class="card-ic">
                                    <img src="img/inter_hospital_bed.png" alt="" class="img-fluid">
                                </div>
                                <div class="usp-card-content">
                                    <p>Beds Facility</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section exellence-section">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Centers of Excellence</h2>
                </div>
                <div class="owl-carousel owl-theme exellence-slider mb-0">
                    <div class="card border-0 rounded-0">
                        <div class="card-image overflow-hidden position-relative">
                            <img src="img/exellence1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>Cardiology</h4>
                            <p>The KIMSHEALTH Heart Institute brings together a distinguished KIMSHEALTH</p>
                            <div class="main-btn">
                                <a href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0">
                        <div class="card-image overflow-hidden position-relative">
                            <img src="img/exellence2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>Orthopedics & Trauma</h4>
                            <p>KIMSHEALTH is a specialized center with state-of-the-art facility specialized facility</p>
                            <div class="main-btn">
                                <a href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0">
                        <div class="card-image overflow-hidden position-relative">
                            <img src="img/exellence3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>Neurology</h4>
                            <p>The KIMSHEALTH Department of Neurology is one of the best Department</p>
                            <div class="main-btn">
                                <a href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0">
                        <div class="card-image overflow-hidden position-relative">
                            <img src="img/exellence4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>Respiratory Medicine</h4>
                            <p>The KIMSHEALTH Department of Respiratory Medicine is regarded Respiratory</p>
                            <div class="main-btn">
                                <a href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 rounded-0">
                        <div class="card-image overflow-hidden position-relative">
                            <img src="img/exellence4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="card-content">
                            <h4>Respiratory Medicine</h4>
                            <p>The KIMSHEALTH Department of Respiratory Medicine is regarded Respiratory</p>
                            <div class="main-btn">
                                <a href="#">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section pt-lg-0 pt-md-0">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Diseases & Key Procedures</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="faq-card p-lg-4 p-md-4 p-3">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="true"
                                            aria-controls="collapse1">
                                            <span>Coronary Artery Disease (CAD)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Coronary Artery Disease (CAD) occurs when plaque builds up in the coronary arteries, narrowing them and reducing blood flow to the heart. This can cause chest pain (angina), shortness of breath, or lead to a heart attack. Risk factors include high cholesterol, smoking, diabetes, and high blood pressure. Lifestyle changes and medications help manage CAD.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2"
                                            aria-expanded="false" aria-controls="collapse2">
                                            <span>Myocardial Infarction (Heart Attack)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Heart failure is diagnosed based on patient's medical and family
                                                histories, a physical exam, and test results. The signs and symptoms
                                                of heart failure also are common in other conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3"
                                            aria-expanded="false" aria-controls="collapse3">
                                            <span>Heart Failure</span>
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>A heart transplant is carried out under general anaesthesia and
                                                normally takes between four and six hours. The transplant should be
                                                performed within 2 hours from the brain death. Patent is connected
                                                to a heart-lung bypass machine, which will take over the functions
                                                of the heart and lungs while the transplant is being carried out.
                                                CIMS Hospital is the best heart transplant center in Ahmedabad,
                                                Gujarat and perhaps even in India with one of the highest heart
                                                transplant success rates across the country.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4"
                                            aria-expanded="false" aria-controls="collapse4">
                                            <span>Hypertension (High Blood Pressure)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Once the transplant is complete, the patient will be moved to an
                                                intensive care unit (ICU). A machine called a ventilator will assist
                                                in breathing, and a tube will be inserted into a vein to provide
                                                with fluid and nutrients. These will normally be removed after a few
                                                days.</p>
                                            <p>Pain relief is also provided as required.</p>
                                            <p>Most people are well enough to move from the ICU and into a hospital
                                                ward within a few days.</p>
                                            <p>Patient will be able to leave hospital within two or three weeks,
                                                although they need to have regular follow-up appointments and take
                                                medication to help stop their body rejecting patient's new heart.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5"
                                            aria-expanded="false" aria-controls="collapse5">
                                            <span>Valvular Heart Disease</span>
                                        </button>
                                    </h2>
                                    <div id="collapse5" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>The risk factor for the first year is 10-15%. Approximately 50 - 60% patient survive more than 12 years. Their results are as god as kidney transplant survival rates for people who've had a heart transplant vary according to their overall health status, but averages remain high. Rejection is the main cause for a shortened life span.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="faq-card p-lg-4 p-md-4 p-3">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                            <span>Coronary Artery Bypass Grafting (CABG)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Coronary Artery Bypass Grafting (CABG) is a surgical procedure used to treat coronary artery disease (CAD). It involves bypassing blocked or narrowed coronary arteries using a healthy blood vessel from another part of the body, usually the leg, arm, or chest. This restores normal blood flow to the heart, reducing symptoms like chest pain and lowering heart attack risk.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse7"
                                            aria-expanded="false" aria-controls="collapse7">
                                            <span>Angioplasty (Percutaneous Coronary Intervention - PCI)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Heart failure is diagnosed based on patient's medical and family
                                                histories, a physical exam, and test results. The signs and symptoms
                                                of heart failure also are common in other conditions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse8"
                                            aria-expanded="false" aria-controls="collapse8">
                                            <span>Pacemaker Implantation</span>
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>A heart transplant is carried out under general anaesthesia and
                                                normally takes between four and six hours. The transplant should be
                                                performed within 2 hours from the brain death. Patent is connected
                                                to a heart-lung bypass machine, which will take over the functions
                                                of the heart and lungs while the transplant is being carried out.
                                                CIMS Hospital is the best heart transplant center in Ahmedabad,
                                                Gujarat and perhaps even in India with one of the highest heart
                                                transplant success rates across the country.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse9"
                                            aria-expanded="false" aria-controls="collapse9">
                                            <span>Heart Transplant</span>
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Once the transplant is complete, the patient will be moved to an
                                                intensive care unit (ICU). A machine called a ventilator will assist
                                                in breathing, and a tube will be inserted into a vein to provide
                                                with fluid and nutrients. These will normally be removed after a few
                                                days.</p>
                                            <p>Pain relief is also provided as required.</p>
                                            <p>Most people are well enough to move from the ICU and into a hospital
                                                ward within a few days.</p>
                                            <p>Patient will be able to leave hospital within two or three weeks,
                                                although they need to have regular follow-up appointments and take
                                                medication to help stop their body rejecting patient's new heart.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse10"
                                            aria-expanded="false" aria-controls="collapse10">
                                            <span>Valve Replacement or Repair</span>
                                        </button>
                                    </h2>
                                    <div id="collapse10" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>The risk factor for the first year is 10-15%. Approximately 50 - 60% patient survive more than 12 years. Their results are as god as kidney transplant survival rates for people who've had a heart transplant vary according to their overall health status, but averages remain high. Rejection is the main cause for a shortened life span.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section service-section">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Our Services</h2>
                </div>
                <div class="row g-lg-3 g-md-3 g-3">
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/conversation.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Initial Inquiry</h3>
                                <div class="main-list">
                                    <p>Contact our International Patient Services team via email, phone, or our online inquiry form. Provide details about your medical condition and any existing reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/article.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Medical Review</h3>
                                <div class="main-list">
                                    <p>Our specialists will review your medical records and provide a preliminary opinion and recommended treatment plan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/schedule.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Appointment Scheduling</h3>
                                <div class="main-list">
                                    <p>Once you approve the treatment plan, we will help schedule consultations, diagnostic tests, and procedures as needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/conversation.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Initial Inquiry</h3>
                                <div class="main-list">
                                    <p>Contact our International Patient Services team via email, phone, or our online inquiry form. Provide details about your medical condition and any existing reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/article.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Medical Review</h3>
                                <div class="main-list">
                                    <p>Our specialists will review your medical records and provide a preliminary opinion and recommended treatment plan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="home-service-card h-100">
                            <div class="home-service-card-image text-center">
                                <img src="img/schedule.png" class="img-fluid d-block" alt="">
                            </div>
                            <div class="home-service-content text-start">
                                <h3>Appointment Scheduling</h3>
                                <div class="main-list">
                                    <p>Once you approve the treatment plan, we will help schedule consultations, diagnostic tests, and procedures as needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section consultation-bg d-none">
            <div class="container">
                <div class="main-heading sub-heading text-center mb-3">
                    <h2>Book Your Slot Today</h2>
                    <h3>No charges. No obligations. Just expert guidance.</h3>
                </div>
                <div class="form-box">
                    <form action="mailer.php" method="post">

                        <div class="row justify-content-center g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone No" maxlength="10" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);" required>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" name="location" aria-label="Default select example" required>
                                    <option selected>Select Preferred Centre ( North India , New)</option>
                                    <option value="Gurugram">Gurugram</option>
                                    <option value="Lajpat Nagar">Lajpat Nagar</option>
                                    <option value="Faridabad">Faridabad</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" class="navbar-button rounded-2 w-100" value="Get My Free Second Opinion">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="sub-heading mt-3 text-center">
                    <p class="fw-semibold fs-6">* Only 8 slots remaining this week</p>
                </div>
                <div class="book-consultaion-cta">
                    <div class="d-lg-flex d-block align-items-center justify-content-between">
                        <div class="button-cta-box">
                            <a href="tel:+919289893389" class="book-cta-new">Book Your Consultation Today</a>
                            <p class="call-now-text">or call us at <a href="tel:+919289893389">+91 92898 93389</a></p>
                        </div>
                        <div class="border-middle-custom"></div>
                        <div class="profile-image-text">
                            <div class="profile-image">
                                <img src="img/profile1.png" alt="" class="img-fluid">
                                <img src="img/profile2.png" alt="" class="img-fluid">
                                <img src="img/profile3.png" alt="" class="img-fluid">
                            </div>
                            <div>
                                <p>Trusted by 500,000+ Patients & Families</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section second-opinion-section" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="main-heading-light sub-heading-light">
                            <h2>International Patient Relations</h2>
                            <h3>What we handle for you</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aut, est molestias repudiandae dolor recusandae at non expedita itaque voluptatum, quisquam labore ducimus corporis quod velit eos ex tempore voluptates.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="second-opinion-card h-100">
                                    <h3>Before you travel</h3>
                                    <p>Report review, specialist opinion, written estimate and a medical visa invitation letter.</p>
                                    <div class="bottom-card d-flex align-items-center justify-content-between position-relative">
                                        <img src="img/patient.png" alt="">
                                        <div class="numbering">
                                            <h5>1</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="second-opinion-card h-100">
                                    <h3>When you arrive</h3>
                                    <p>Airport pickup, hospital registration and an appointment schedule that respect your jet lag.</p>
                                    <div class="bottom-card d-flex align-items-center justify-content-between position-relative">
                                        <img src="img/airport.png" alt="">
                                        <div class="numbering">
                                            <h5>2</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="second-opinion-card h-100">
                                    <h3>During your stay</h3>
                                    <p>Help with accomodation the hospital, inerepreter support, currency and SIM guidance.</p>
                                    <div class="bottom-card d-flex align-items-center justify-content-between position-relative">
                                        <img src="img/resort.png" alt="">
                                        <div class="numbering">
                                            <h5>3</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="second-opinion-card h-100">
                                    <h3>After treatment</h3>
                                    <p>Discharge summary, medicine plan, travel clearance and video follow-ups.</p>
                                    <div class="bottom-card d-flex align-items-center justify-content-between position-relative">
                                        <img src="img/treatment-plan.png" alt="">
                                        <div class="numbering">
                                            <h5>4</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 mt-lg-0 mt-5 ps-lg-4 ps-md-4">
                        <div class="main-heading sub-heading">
                            <h2>Request a Call Back</h2>
                            <p>We are here to help!</p>
                        </div>
                        <div class="banner-form mt-3">
                            <form action="mailer.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                        <img src="img/user.png" alt="" class="img-fluid">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name*" required="">
                                    </div>
                                    <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                        <img src="img/telephone.png" alt="" class="img-fluid">
                                        <input type="text" name="phone" class="form-control" placeholder="Number (with Code)*" required="">
                                    </div>
                                    <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                        <img src="img/envelope.png" alt="" class="img-fluid">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                        <img src="img/internet.png" alt="" class="img-fluid">
                                        <select name="country" id="" class="form-select form-select-custom" name="country">
                                            <option value="">Country</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/badge.png" alt="" class="img-fluid">
                                        <select name="speciality" id="" class="form-select form-select-custom" name="speciality">
                                            <option value="">Speciality/Treatment</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" rows="4" placeholder="Briefly describe the condition (optional)"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check form-group">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                I agreed to be contacted via Whatsapp/Email/Phone
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="main-button text-uppercase" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section expert-section" id="experts">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Meet the Experts</h2>
                </div>
                <div class="owl-carousel owl-theme doctor-slider mb-0">

                    <div class="expert-card">
                        <div class="card border-0 p-lg-3 p-0 rounded-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert1.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Ajith R</h4>
                                <p>Sr Consultant and Coordinator</p>
                                <h5>Neurosurgery</h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert2.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Deepa Das</h4>
                                <p>Senior Consultant</p>
                                <h5>Critical Care</h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert3.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Shabeerali T U</h4>
                                <p>Chief Coordinator & Senior</p>
                                <h5>Hepatobiliary, Pancreatic & Surgen</h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert4.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Muhammed Nazeer </h4>
                                <p>Senior Consultant & Group . . . </p>
                                <h5>Orthopedics & Trauma </h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert4.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Muhammed Nazeer </h4>
                                <p>Senior Consultant & Group</p>
                                <h5>Orthopedics & Trauma </h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/expert4.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Muhammed Nazeer </h4>
                                <p>Senior Consultant & Group</p>
                                <h5>Orthopedics & Trauma </h5>
                                <div class="from-btn">
                                    <a href="#" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-btn text-center mt-2">
                            <a href="#">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section testimonial-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="main-heading-light sub-heading-light">
                            <h2>Patient Stories & Testimonials</h2>
                            <h3>Real People. Real Recovery.</h3>
                            <p>Every number in our stats is a person who trusted us with their most important fight.</p>
                            <a href="javascript:void(0)" class="secondary-btn">View All <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative mt-lg-0 mt-4">
                        <div class="testimonial-right-part">
                            <div class="owl-carousel owl-theme testi-slider">
                                <div class="slider-item">
                                    <a href="#" data-fancybox data-width="800" data-height="400">
                                        <img src="img/963583.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-item">
                                    <a href="#" data-fancybox data-width="800" data-height="400">
                                        <img src="img/963583.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-item">
                                    <a href="#" data-fancybox data-width="800" data-height="400">
                                        <img src="img/963583.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-item">
                                    <a href="#" data-fancybox data-width="800" data-height="400">
                                        <img src="img/963583.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section why-choose-section position-relative">
            <div class="container">
                <div class="row g-lg-5 g-3 mt-1">
                    <div class="col-md-5">
                        <img src="img/doctor.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="main-heading text-start sub-heading">
                            <h2>Why Choose KIMSHEALTH</h2>
                            <p>Trusted expertise, advanced medical care, personalised treatment, and compassionate support for patients from around the world.</p>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">1</div>
                            <div class="why-content">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum eveniet quia deserunt non! Error excepturi atque cupiditate saepe, doloribus quaerat magnam nihil ipsum consectetur omnis aut reiciendis hic corporis?</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">2</div>
                            <div class="why-content">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum eveniet quia deserunt non! Error excepturi atque cupiditate saepe, doloribus quaerat magnam nihil ipsum consectetur omnis aut reiciendis hic corporis?</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">3</div>
                            <div class="why-content">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum eveniet quia deserunt non! Error excepturi atque cupiditate saepe, doloribus quaerat magnam nihil ipsum consectetur omnis aut reiciendis hic corporis?</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">4</div>
                            <div class="why-content">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum eveniet quia deserunt non! Error excepturi atque cupiditate saepe, doloribus quaerat magnam nihil ipsum consectetur omnis aut reiciendis hic corporis?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Frequently Asked Question</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse70" aria-expanded="true"
                                        aria-controls="collapse70">
                                        <span>How do I get a medical visa to India?</span>
                                    </button>
                                </h2>
                                <div id="collapse70" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>To get a medical visa to India, apply through the official Indian visa portal with your medical documents and hospital invitation. KIMSHEALTH can assist with documentation and visa-related support.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse72"
                                        aria-expanded="false" aria-controls="collapse72">
                                        <span>Is airport pickup really free?</span>
                                    </button>
                                </h2>
                                <div id="collapse72" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis nesciunt, consequatur exercitationem enim, autem deserunt, esse nam labore recusandae laborum facere aliquam ipsum architecto non corrupti odio vel blanditiis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse74"
                                        aria-expanded="false" aria-controls="collapse74">
                                        <span>How quickly can I get a treatment cost estimate?</span>
                                    </button>
                                </h2>
                                <div id="collapse74" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolore deleniti nesciunt ab. Eaque debitis dolor voluptatum reprehenderit sapiente temporibus, ducimus hic nesciunt. Sunt repellendus at aperiam esse unde cumque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse76"
                                        aria-expanded="false" aria-controls="collapse76">
                                        <span>Are interpreters available 24x7?</span>
                                    </button>
                                </h2>
                                <div id="collapse76" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolore deleniti nesciunt ab. Eaque debitis dolor voluptatum reprehenderit sapiente temporibus, ducimus hic nesciunt. Sunt repellendus at aperiam esse unde cumque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse78"
                                        aria-expanded="false" aria-controls="collapse78">
                                        <span>Where will my attendant stay?</span>
                                    </button>
                                </h2>
                                <div id="collapse78" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolore deleniti nesciunt ab. Eaque debitis dolor voluptatum reprehenderit sapiente temporibus, ducimus hic nesciunt. Sunt repellendus at aperiam esse unde cumque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section footer-call-to-action">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="main-heading sub-heading text-center">
                            <h2>Your Journey to Better Health Starts Here.</h2>
                            <p>Compassionate care. Expert specialists. Global support.</p>
                        </div>
                        <div class="d-lg-flex d-none align-items-center gap-3">
                            <a href="#" class="secondary-btn">Request a Consultation <i class="fa-solid fa-angle-right"></i></a>
                            <a href="#" class="tertiary-btn"><i class="fa-brands fa-whatsapp"></i> Whatsapp Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <div class="bottom-footer mb-lg-0 py-2">
        <div class="container">
            <div class="d-lg-flex d-block align-items-center justify-content-center text-center sub-heading-light">
                <p class="mb-0">Copyright © <span class="text-white currentYear"></span>. KIMSHEALTH. All Rights Reserved</p>
            </div>
        </div>
    </div>

    <div class="fixed-footer fixed-footer-img">
        <a href="tel:">
            <img src="img/call-icon-white.svg" class="img-fluid me-2" alt="">
            Request a Consultant
        </a>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.23/bundled/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.0/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

    <script src="js/nav.js"></script>
    <script src="js/custom.js"></script>
    <!-- <script src="js/multislider.min.js"></script> -->

    <script>
        document.querySelector("form").addEventListener("submit", function(e) {

            const phone = phoneInput.value.trim();

            // Empty
            if (phone === "") {
                e.preventDefault();

                iziToast.error({
                    title: "Error",
                    message: "Please enter your phone number.",
                    position: "topRight"
                });

                phoneInput.focus();
                return;
            }

            // Must start with + and contain digits only after +
            if (!/^\+\d+$/.test(phone)) {
                e.preventDefault();

                iziToast.error({
                    title: "Invalid Phone Number",
                    message: "Please enter a valid phone number with country code. Example: +919876543210",
                    position: "topRight"
                });

                phoneInput.focus();
                return;
            }

            // International number length
            if (phone.length < 8 || phone.length > 16) {
                e.preventDefault();

                iziToast.error({
                    title: "Invalid Phone Number",
                    message: "Please enter a valid phone number.",
                    position: "topRight"
                });

                phoneInput.focus();
                return;
            }
        });
    </script>

    <script>
        AOS.init({
            offset: 800,
            delay: 100,
            duration: 2000,
            once: true,
            mirror: false,
            disable: 'mobile',
        });
    </script>


    <script>
        const lenis = new Lenis();
        lenis.on('scroll', ScrollTrigger.update);
        gsap.ticker.add((time) => {
            lenis.raf(time * 500);
        });
        gsap.ticker.lagSmoothing(0);

        /* dynamic date */
        if ($(".currentYear").length > 0) {
            const year = new Date().getFullYear();
            $(".currentYear").text(year);
        }


        $('.about-logo-slide').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            smartSpeed: 4000,
            autoplayTimeout: 4000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>


</body>

</html>
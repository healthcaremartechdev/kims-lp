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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@29.5.3/dist/css/intlTelInput.css">


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
                    <!-- <ul>
                        <li><a href="tel:">Contact Us</a></li>
                    </ul> -->
                    <div class="d-flex align-items-center gap-3 ms-3">
                        <div class="whatapp-icon">
                            <a href="https://wa.me/919072881666" target="_blank">
                                <img src="img/whatsapp.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="cta-button">
                            <a href="#form-cta" class="main-button py-2">Book an Appointment</a>
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
                                <li><a href="#services">Our services</a></li>
                                <li><a href="#approach">Our Approach</a></li>
                                <li><a href="#treatment">Our Treatment</a></li>
                                <li><a href="#expert">Our Expert</a></li>
                                <li><a href="#testimonial">Testimonial</a></li>
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
                    <div class="col-lg-7">
                        <div class="h-100"></div>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-4">
                        <!-- <div class="main-heading sub-heading">
                            <h2>World Class Healthcare</h2>
                            <span>In Kerala, India</span>
                            <p>Expert medical care with dedicated support for international patient at KIMSHEALTH</p>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <a href="#" class="secondary-btn">Request a Consultation <i class="fa-solid fa-angle-right"></i></a>
                            <a href="#" class="tertiary-btn"><i class="fa-brands fa-whatsapp"></i> Whatsapp Us</a>
                        </div> -->
                        <div class="banner-form">
                            <h2>Get Free Second Opinion</h2>
                            <p>Fill the details below to get a call back</p>
                            <form action="mailer.php" method="post" class="contact-form-with-icons">
                                <div class="row">
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/user.png" alt="" class="img-fluid">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name*" required="">
                                    </div>
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/telephone.png" alt="" class="img-fluid">
                                        <input type="tel" name="phone" id="phone" inputmode="numeric" maxlength="15" class="form-control" placeholder="Number (with Code)*" required autocomplete="tel">
                                    </div>
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/badge.png" alt="" class="img-fluid">
                                        <select name="" id="" class="form-select form-select-custom" name="speciality" style="padding-bottom: 8px;">
                                            <option selected disabled>Type of Cancer</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group form-group-noicon position-relative">
                                        <textarea name="message" id="" class="form-control" placeholder="Briefly describe condition"></textarea>
                                    </div>

                                    <div class="col-md-12 form-group position-relative form-group-btn mb-0">
                                        <input type="submit" class="main-button text-uppercase w-100" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="about-us">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-7 mb-lg-0 mb-4">
                        <div class="main-heading sub-heading">
                            <h2>Expert Cancer Care, Compassion & Hope</h2>
                            <p>Personalised Cancer Care Guided by Expertise and Compassion</p>
                        </div>
                        <div class="generic-content">
                            <!-- <p>At KIMSHEALTH, we provide comprehensive and personalised cancer care with a focus on every patient's needs. Our team of experienced specialists works together to ensure a smooth and supportive treatment journey, from the first consultation and accurate diagnosis to treatment planning and ongoing follow-up. We combine advanced medical technology with compassionate care to help patients feel informed, supported and confident at every step.</p> -->
                            <p>At KIMSHEALTH, we bring together experienced cancer specialists, advanced diagnostic technology, and personalised treatment plans to provide comprehensive cancer care.</p>
                            <p>From early diagnosis and specialist consultations to treatment and follow-up, our team works closely with each patient to ensure coordinated care, clear guidance, and compassionate support throughout their journey.</p>
                            <!-- <div class="row gx-3">
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
                            </div> -->

                            <a href="#bannerform" class="main-button mt-3">Talk to a Coordinator</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <img src="img/2148981271.jpg" alt="" class="img-fluid rounded-2">
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

        <!-- <section class="section exellence-section" id="specialists">
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
        </section> -->

        <section class="section speciality-section" id="services">
            <div class="container">
                <div class="main-heading sub-heading text-center">
                    <h2 class="mb-3">Comprehensive Cancer Care Services</h2>
                    <p>Advanced treatments. Personalised care. Hope at every step.</p>
                </div>
                <div class="owl-carousel owl-theme exellence-slider mb-0">
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Medical Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our surgical oncology team provides specialised surgical care for different types of cancer, focusing on safe and effective tumour removal while preserving healthy tissues whenever possible.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Surgical Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our medical oncology team provides personalised cancer treatment using therapies such as chemotherapy, immunotherapy and targeted therapy based on each patient's condition and individual treatment needs.</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Radiation Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our radiation oncology team uses advanced techniques to target cancer cells effectively while minimising damage to nearby healthy tissues and supporting each patient's overall treatment journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Haemato-Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our haemato-oncology team provides specialised care for blood cancers, including leukaemia, lymphoma and myeloma, with personalised treatment plans and regular monitoring throughout each patient's care journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Neuro-Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our neuro-oncology team specialises in diagnosing and treating brain, spinal cord and nervous system tumours through coordinated care and personalised treatment plans for every patient's needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Gynaecologic Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our gynae oncology team provides specialised care for cancers affecting the female reproductive system, focusing on diagnosis, personalised treatment & compassionate support throughout each patient's journey.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-body py-4 px-4">
                            <div class="pt-2 pb-3">
                                <h5>Paediatric Oncology</h5>
                                <div class="under-line"></div>
                                <p>Our paediatric oncology team provides specialised cancer care for children, combining advanced treatment approaches with compassionate support and personalised attention to meet each child's needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section comprehensive-section position-relative pb-0" id="approach">
            <div class="container">
                <div class="main-heading sub-heading text-center">
                    <h2 class="mb-3">Multidisciplinary Approach to Cancer Care</h2>
                    <p>Expert minds working together for personalised care at every stage.</p>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-11 col-md-9 col-lg-7 col-xl-8">
                        <div class="process-wrap" aria-labelledby="process-heading">
                            <h2 id="process-heading" class="visually-hidden">Our treatment process</h2>
                            <ol class="steps">
                                <li class="step" tabindex="0">
                                    <span class="step-number" aria-hidden="true">1</span>
                                    <h3 class="step-title">Specialist Consultation</h3>
                                    <p class="step-desc">Meet our cancer specialists for an initial assessment, discussion of symptoms and understanding of individual health needs.</p>
                                </li>

                                <li class="step" tabindex="0">
                                    <span class="step-number" aria-hidden="true">2</span>
                                    <h3 class="step-title">Diagnosis &amp; Investigation</h3>
                                    <p class="step-desc">Advanced imaging, laboratory tests and biopsies help identify the cancer type, location and stage.</p>
                                </li>

                                <li class="step" tabindex="0">
                                    <span class="step-number" aria-hidden="true">3</span>
                                    <h3 class="step-title">Multidisciplinary Review</h3>
                                    <p class="step-desc">Our specialists collaborate to review medical reports and determine the most suitable treatment approach for each patient.</p>
                                </li>

                                <li class="step" tabindex="0">
                                    <span class="step-number" aria-hidden="true">4</span>
                                    <h3 class="step-title">Personalised Treatment</h3>
                                    <p class="step-desc">Based on the diagnosis, patients receive tailored treatment options such as surgery, chemotherapy, radiation therapy or a combination of treatments.</p>
                                </li>

                                <li class="step" tabindex="0">
                                    <span class="step-number" aria-hidden="true">5</span>
                                    <h3 class="step-title">Follow-up &amp; Support</h3>
                                    <p class="step-desc">Regular follow-up, recovery monitoring and supportive care help patients manage their health throughout and after treatment.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/21516865.png" alt="" class="img-fluid doctor-mockup">
        </section>

        <section class="section" id="treatment">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Cancer Treatments at KIMSHEALTH</h2>
                    <p>Explore specialised cancer care and personalised treatment options tailored to individual patient needs.</p>
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
                                            <span>Bone Marrow Transplantation (BMT)</span>
                                        </button>
                                    </h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Bone marrow transplantation replaces damaged or diseased blood-forming stem cells with healthy stem cells. It may be recommended for certain blood cancers, including leukaemia, lymphoma and multiple myeloma, depending on the patient's condition.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse2"
                                            aria-expanded="false" aria-controls="collapse2">
                                            <span>Interventional Oncology Procedures</span>
                                        </button>
                                    </h2>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Interventional oncology uses image-guided, minimally invasive procedures to treat selected tumours. Techniques such as tumour ablation and certain catheter-based treatments may help target cancer while limiting damage to surrounding tissues.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse3"
                                            aria-expanded="false" aria-controls="collapse3">
                                            <span>Radioisotope Therapy</span>
                                        </button>
                                    </h2>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Radioisotope therapy uses radioactive substances to target specific cancer cells or tissues. It may be suitable for certain cancers, including selected thyroid cancers and other tumours, depending on the type and stage of the disease.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4"
                                            aria-expanded="false" aria-controls="collapse4">
                                            <span>Targeted Therapy</span>
                                        </button>
                                    </h2>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Targeted therapy uses medicines that act on specific molecules or genetic changes involved in cancer growth. Treatment selection depends on the tumour's characteristics and relevant biomarker test results.</p>
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
                                            <span>Immunotherapy</span>
                                        </button>
                                    </h2>
                                    <div id="collapse6" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Immunotherapy helps the body's immune system recognise and fight cancer cells. It may be used for certain cancers based on the cancer type, stage and other clinical factors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse7"
                                            aria-expanded="false" aria-controls="collapse7">
                                            <span>Radiation Therapy</span>
                                        </button>
                                    </h2>
                                    <div id="collapse7" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Radiation therapy uses high-energy radiation to destroy cancer cells or control tumour growth. It may be used alone or alongside surgery and other treatments, depending on the patient's treatment plan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse8"
                                            aria-expanded="false" aria-controls="collapse8">
                                            <span>Chemotherapy</span>
                                        </button>
                                    </h2>
                                    <div id="collapse8" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Chemotherapy uses anti-cancer medicines to destroy cancer cells or slow their growth. It may be recommended before or after surgery, alongside other treatments, or to help manage certain advanced cancers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse9"
                                            aria-expanded="false" aria-controls="collapse9">
                                            <span>Surgical Oncology</span>
                                        </button>
                                    </h2>
                                    <div id="collapse9" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Surgical oncology focuses on the surgical treatment of cancer, including the removal of tumours and affected tissues. Surgery may be used alone or combined with chemotherapy, radiation therapy or other treatments, depending on the patient's condition.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section second-opinion-section d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="main-heading-light sub-heading-light">
                            <h2>Together for Better Cancer Care</h2>
                            <h3>What we handle for you</h3>
                            <p>At KIMSHEALTH, our cancer specialists work together to evaluate each case, plan personalised treatments and provide coordinated care from diagnosis through follow-up.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="second-opinion-card h-100">
                                    <h3>Specialist Collaboration</h3>
                                    <p>Explain that oncologists, surgeons, radiologists, pathologists and other specialists work together to evaluate each patient's condition.</p>
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
                                    <h3>Diagnosis & Evaluation</h3>
                                    <p>Describe how diagnostic imaging (CT, MRI, PET-CT), laboratory tests and biopsy/pathology help doctors identify the cancer type and stage.</p>
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
                                    <h3>Treatment Planning</h3>
                                    <p>Our specialists review each patient's reports to plan the most suitable treatment, including surgery, chemotherapy or radiation therapy.</p>
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
                                    <h3>Continuous Patient Care</h3>
                                    <p>Mention that patients receive coordinated care, support during treatment and regular follow-ups to monitor recovery and progress.</p>
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
                        <div class="cta-form mt-3">
                            <form action="mailer.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/user.png" alt="" class="img-fluid">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name*" required="">
                                    </div>
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/telephone.png" alt="" class="img-fluid">
                                        <input type="text" name="phone" class="form-control" placeholder="Number*" required="">
                                    </div>
                                    <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                        <img src="img/badge.png" alt="" class="img-fluid">
                                        <select class="form-select form-select-custom" name="speciality">
                                            <option selected disabled>Type of Cancer</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                            <option value="">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" name="message" rows="4" placeholder="Briefly describe the condition (optional)"></textarea>
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

        <section class="section expert-section" id="expert">
            <div class="container">
                <div class="main-heading sub-heading">
                    <h2 class="mb-3">Meet the Experts</h2>
                </div>
                <div class="owl-carousel owl-theme doctor-slider mb-0">

                    <div class="expert-card">
                        <div class="card border-0 p-lg-3 p-0 rounded-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/doctor_avatar.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Vishnu KS</h4>
                                <p>Associate Consultant</p>
                                <h5>Surgical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 p-lg-3 p-0 rounded-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_B_Jayanand_Sunil.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Jayanand Sunil B</h4>
                                <p>Senior Consultant & Coordinator</p>
                                <h5>Surgical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_Jayaprakash_Madhavan.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Jayaprakash Madhavan</h4>
                                <p>Senior Consultant</p>
                                <h5>Radiation Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/doctor_avatar.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Jayaprakash P G</h4>
                                <p>Senior Consultant</p>
                                <h5>Radiation Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_Manish_Kumar_Yadav.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Manish Kumar Yadav</h4>
                                <p>Senior Consultant</p>
                                <h5>Neuro Interventional Radiology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_P_P_Abdul_Shahid.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Abdul Shahid P P</h4>
                                <p>Senior Consultant</p>
                                <h5>Medical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/dr_ajmeera_a_azeez.webp" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Ajmeera A Azeez</h4>
                                <p>Associate Consultant</p>
                                <h5>Pediatric Hematology, Oncology & BMT</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_Arun_Raj.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Arun Raj S T</h4>
                                <p>Consultant</p>
                                <h5>Nuclear Medicine</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/doctor_avatar.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Arun V</h4>
                                <p>Consultant</p>
                                <h5>Medical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_E_Grace_Shirley.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Grace Shirley E</h4>
                                <p>Consultant</p>
                                <h5>Radiation Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/doctor_avatar.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. John Sebastian M G</h4>
                                <p>Consultant</p>
                                <h5>Radiation Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_Kumanan_J.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Kumanan J</h4>
                                <p>Consultant</p>
                                <h5>Medical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expert-card">
                        <div class="card border-0 rounded-0 p-lg-3 p-0">
                            <div class="card-image overflow-hidden position-relative">
                                <img src="img/Dr_Azgar_Abdul_Rasheed.webp" class="img-fluid w-100" alt="">
                            </div>
                            <div class="card-content">
                                <h4>Dr. Azgar Abdul Rasheed</h4>
                                <p>Consultant</p>
                                <h5>Medical Oncology</h5>
                                <div class="from-btn">
                                    <a href="#form-cta" class="btn">Book an Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section testimonial-section" id="testimonial">
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
                                    <a href="https://www.youtube.com/watch?v=Vz7FcmKi4T8" data-fancybox data-width="800" data-height="400">
                                        <img src="img/testi1.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                                <div class="slider-item">
                                    <a href="https://www.youtube.com/watch?v=DjgRV9R-5q0" data-fancybox data-width="800" data-height="400">
                                        <img src="img/testi2.jpg" alt="KIMSHEALTH" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section why-choose-section position-relative" id="why-choose-us">
            <div class="container">
                <div class="row g-lg-5 g-3 mt-1">
                    <div class="col-md-5">
                        <img src="img/doctor.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="main-heading text-start sub-heading">
                            <h2>Why Choose KIMSHEALTH for Cancer Care?</h2>
                            <p>Comprehensive cancer care through multidisciplinary expertise, advanced diagnostic support, coordinated treatment planning, and compassionate patient care.</p>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">1</div>
                            <div class="why-content">
                                <h3>Multidisciplinary Cancer Care</h3>
                                <p>A multidisciplinary approach brings together specialists from different oncology disciplines to evaluate cases and discuss appropriate treatment plans.</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">2</div>
                            <div class="why-content">
                                <h3>Experienced Oncology Specialists</h3>
                                <p>Access to specialists in medical oncology, surgical oncology, radiation oncology and clinical haematology for cancer-related consultations and care.</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">3</div>
                            <div class="why-content">
                                <h3>Advanced Diagnostic Support</h3>
                                <p>Diagnostic facilities include PET-CT imaging, nuclear medicine and specialised pathology investigations to support cancer evaluation.</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">4</div>
                            <div class="why-content">
                                <h3>Coordinated Treatment Planning</h3>
                                <p>Treatment options may include surgery, chemotherapy, radiation therapy, brachytherapy and immunotherapy, depending on the patient's condition.</p>
                            </div>
                        </div>
                        <div class="why-point-box">
                            <div class="why-point">5</div>
                            <div class="why-content">
                                <h3>Support Beyond Cancer Treatment</h3>
                                <p>Cancer care extends beyond active treatment, with services such as palliative care and rehabilitation included in the published cancer centre service overview.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="faq">
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
                                        <span>When should I consult an oncologist?</span>
                                    </button>
                                </h2>
                                <div id="collapse70" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>You should consult an oncologist if you have been diagnosed with cancer, your doctor suspects cancer, or your diagnostic reports show findings that require further evaluation. You may also be referred to an oncologist for unexplained symptoms or abnormal screening results. Early medical evaluation can help determine the cause and guide appropriate next steps.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse72"
                                        aria-expanded="false" aria-controls="collapse72">
                                        <span>What happens during an initial oncology consultation?</span>
                                    </button>
                                </h2>
                                <div id="collapse72" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>During your first consultation, the oncologist will review your medical history, symptoms, previous treatments, and available investigation reports. The doctor may perform a physical examination, discuss possible diagnoses, and recommend additional tests if needed. Based on the findings, your specialist will explain the potential treatment options and the next steps in your care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse74"
                                        aria-expanded="false" aria-controls="collapse74">
                                        <span>What diagnostic tests may be required before treatment?</span>
                                    </button>
                                </h2>
                                <div id="collapse74" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Depending on your symptoms and suspected or confirmed cancer type, your doctor may recommend blood tests, imaging studies such as CT, MRI, or PET-CT scans, and a biopsy. Additional investigations, including pathology review or molecular testing, may be needed in selected cases. The tests required will depend on your individual condition and help guide treatment planning.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse76"
                                        aria-expanded="false" aria-controls="collapse76">
                                        <span>How can I book an appointment with an oncology specialist?</span>
                                    </button>
                                </h2>
                                <div id="collapse76" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>You can contact KIMSHEALTH through its official website or hospital contact channels to enquire about an oncology consultation. You may also contact the relevant cancer care unit to confirm specialist availability, appointment timings, and booking procedures. Please verify the appointment details directly with the hospital before visiting.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse78"
                                        aria-expanded="false" aria-controls="collapse78">
                                        <span>What documents should I bring for my consultation?</span>
                                    </button>
                                </h2>
                                <div id="collapse78" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Please bring any previous medical records relevant to your condition, including blood test results, biopsy and pathology reports, imaging reports and scans, discharge summaries, and details of previous cancer treatments, if applicable. You should also carry a list of your current medications and any relevant prescriptions. These documents can help your oncologist assess your medical history and plan further evaluation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse79"
                                        aria-expanded="false" aria-controls="collapse79">
                                        <span>How can I contact the hospital for further information?</span>
                                    </button>
                                </h2>
                                <div id="collapse79" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>For information about cancer care services, oncology consultations, or appointments, visit the official KIMSHEALTH website or contact the hospital directly through its published contact details. For KIMSHEALTH Trivandrum, the hospital's published general contact number is +91 471 2941000. You can also enquire about the appropriate cancer care department and the process for scheduling a consultation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section footer-call-to-action" id="form-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/337933.jpg" alt="" class="img-fluid rounded-2">
                    </div>
                    <div class="col-md-6 my-md-auto mt-3">
                        <div class="form-card">
                            <div class="main-heading sub-heading">
                                <h2>Request a Call Back</h2>
                                <p>We are here to help!</p>
                            </div>
                            <div class="cta-form mt-3">
                                <form action="mailer.php" method="post" class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                            <img src="img/user.png" alt="" class="img-fluid">
                                            <input type="text" name="name" class="form-control" placeholder="Enter your name*" required="">
                                        </div>
                                        <div class="col-md-6 form-group form-group-icon position-relative field-icon">
                                            <img src="img/telephone.png" alt="" class="img-fluid">
                                            <input type="text" name="phone" class="form-control" placeholder="Number*" required="">
                                        </div>
                                        <div class="col-md-12 form-group form-group-icon position-relative field-icon">
                                            <img src="img/badge.png" alt="" class="img-fluid">
                                            <select name="speciality" class="form-select form-select-custom" name="speciality">
                                                <option selected disabled>Type of Cancer</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                                <option value="">Option 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" name="message" rows="3" placeholder="Briefly describe the condition"></textarea>
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
        <a href="tel:+914712941400">
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
    <script src="js/country.js"></script>
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

        const countrySelect = document.getElementById('country');
        const countryData = typeof countries !== 'undefined' ? countries :
            typeof countryList !== 'undefined' ? countryList :
            typeof countryDataList !== 'undefined' ? countryDataList :
            typeof countryData !== 'undefined' ? countryData :
            typeof country !== 'undefined' ? country : [];

        if (countrySelect && Array.isArray(countryData)) {
            countryData.forEach((item) => {
                const name = typeof item === 'string' ?
                    item :
                    item.name || item.country || item.country_name || item.label;

                if (!name) return;

                const option = document.createElement('option');
                option.value = name;
                option.textContent = name;
                countrySelect.appendChild(option);
            });
        }
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@29.5.3/dist/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@29.5.3/dist/js/utils.js"),
        });
    </script> -->


</body>

</html>
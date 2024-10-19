<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labsky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="#">Labsky</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fs-6" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="mailto:labskyservices@gmail.com">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 btn btn-primary text-white px-4 py-2 ms-2" href="login.php">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <!--hero section-->
        <section>
            <div class="container pt-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-6">
                        <h1 class="display-4 fw-bold"><span class="text-primary">Shaping</span> the Future of Diagnostics</h1>
                        <p class="lead pb-4 pt-2">Delivering accurate and reliable laboratory services to support your health and well-being.</p>
                        <a href="services.php"><button class="btn btn-primary px-5 py-3 d-inline-block">Explore More</button></a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img src="assets/Laboratory.png" alt="" class="img-fluid">
                    </div>
                    
                </div>
            </div>
        </section>
    </header>
    <section class="container py-5">
            <div class="row g-5">
                <div class="col-12 col-lg-5">
                    <img src="assets/flasks.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
                <div class="col-12 col-lg-7">
                    <div class="text-center text-md-start">
                    <h2 class="text-primary fs-1 fw-bold mb-3">About Labsky</h2>
                    <p>At Labsky, we deliver accurate and reliable diagnostic services. Our experienced team uses advanced technology to ensure precise results, supporting both healthcare providers and patients. We are committed to maintaining high standards and continually improving our practices.</p>
                    <p>Our focus on quality and innovation ensures that we provide trustworthy diagnostic solutions. With state-of-the-art equipment and rigorous controls, Labsky is dedicated to enhancing patient care through dependable results.</p>
                    <a href="about.php"><button class="btn btn-primary px-5 py-3 d-inline-block fs-5 fw-bold mt-4">Read More About us</button></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="container py-5">
            <div class="row mt-4">
                <div class="col-12">
                    <h2 class="text-primary fs-1 fw-bold mb-3 text-center">Key Features</h2>
                </div>
            </div>
            <div class="row mt-2 g-4">
                <div class="col-12 col-lg-4">
                    <div class="card p-3">
                        <ion-icon name="cash-outline" class="icons"></ion-icon>
                        <h3>Fair Prices</h3>
                        <p class="card-text">
                            We offer competitive pricing without compromising on quality, ensuring value for every service.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card p-3 blue-bg">
                        <ion-icon name="shield-checkmark-outline" class="icons"></ion-icon>
                        <h3>Quality Assurance</h3>
                        <p class="card-text">
                            Our rigorous quality control measures guarantee the highest standards in all our diagnostics.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card p-3">
                        <ion-icon name="time-outline" class="icons"></ion-icon>
                        <h3>Timely Delivery</h3>
                        <p class="card-text">
                            We prioritize quick turnaround times to provide results when you need them, without delay.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container py-5 my-3">
            <div class="row">
                <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fs-4 text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What Services Do You Offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We provide a comprehensive range of diagnostic and analytical services designed to meet the diverse needs of healthcare providers and patients. Our offerings include clinical chemistry for metabolic and chemical profiles, hematology for blood-related diagnostics, microbiology for pathogen identification and sensitivity testing, molecular diagnostics including genetic testing and PCR, and pathology services such as histopathology and cytopathology. Our commitment is to deliver accurate and timely diagnostic information that enhances patient care and treatment outcomes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-4 text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How Do You Ensure Quality in Your Laboratory?
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Quality is the cornerstone of our laboratory operations. We adhere to stringent quality control protocols to ensure the highest standards of accuracy and reliability. This includes regular internal and external audits to maintain compliance, participation in external proficiency testing programs, and continuous education and training for our laboratory personnel. Additionally, we use state-of-the-art equipment and advanced technologies to ensure precise results. Our laboratory is also certified by leading national and international accreditation bodies, reinforcing our commitment to excellence.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed fs-4 text-primary fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What Are Your Research and Development Initiatives?
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Our research and development initiatives are driven by a commitment to innovation and excellence in diagnostics. We focus on developing new and advanced diagnostic tests to meet emerging healthcare needs. We collaborate with academic institutions and research organizations to conduct cutting-edge studies and support clinical trials with accurate and timely laboratory data. Our R&D efforts also involve integrating the latest technological advancements to enhance our diagnostic capabilities and improve patient outcomes. Through our research publications, we contribute to the broader scientific community and stay at the forefront of laboratory science.
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <footer class="blue-bg py-5">
            <p class="fs-5 text-center py-3 text-white">
                &copy;2024 Labsky. All rights reserved.
            </p>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
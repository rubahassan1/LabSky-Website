<?php
session_start();
$role;
if(isset($_SESSION['role'])){
    $role=$_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="services.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
<?php if(!isset($_SESSION['role'])){?>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="#">Labsky</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-6" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-6" href="services.php">Services</a>
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
<?php }else{?>

    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="#">Labsky</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-6" aria-current="page" href="adminhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active fs-6" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="mailto:labskyservices@gmail.com">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php }?>
<div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto" style="max-width: 600px;">
                <h1 class="display-6 mb-3 fw-bold">Reliable & High-Quality Laboratory Service</h1>
                <p class="mb-5">Our lab provides exceptional diagnostic services with precision and care. Trust us for accurate and timely results.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Pathology Testing</h4>
                            <p class="mb-4">Accurate pathology tests for reliable diagnoses, ensuring top patient care.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrE_rRI851m6fIKCARXNyoA;_ylu=Y29sbwNiZjEEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837065/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fClinical_pathology/RK=2/RS=hQQt9DAo7oEcG8XCeLkC9MgEJGg-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-lungs text-dark"></i>
                        </div>
                        <h5 class="mb-3">Microbiology Tests</h4>
                            <p class="mb-4">Detailed microbiology tests to identify and analyze various microorganisms.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrFYpO2851mrGsLq.JXNyoA;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837174/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fDiagnostic_Microbiology/RK=2/RS=hA95aeLDAFoa4YMGnTUQd6Wa49s-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-virus text-dark"></i>
                        </div>
                        <h5 class="mb-3">Biochemistry Tests</h4>
                            <p class="mb-4">Advanced biochemistry tests for critical health insights and treatments.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrijqkH9J1m8B0K0d5XNyoA;_ylu=Y29sbwNiZjEEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837255/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fClinical_chemistry/RK=2/RS=2D86NqEhrYwLVSZkjDThESyI3BE-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule-pill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Histopathology Tests</h4>
                            <p class="mb-4">Detailed tissue sample examinations for precise and accurate diagnoses.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=Awrijqlp9J1m8B0KzDZXNyoA;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837354/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fHistopathology/RK=2/RS=rJoQvEOGaFKq1vmIq5HNMqL5Rkg-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule text-dark"></i>
                        </div>
                        <h5 class="mb-3">Urine Tests</h4>
                            <p class="mb-4">Reliable urine tests to detect and monitor various health conditions.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrE_eyk9J1mLbMKq.JXNyoA;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837413/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fUrine_test/RK=2/RS=ldemTFaWw.o.wwhYx2wRjM1_xrI-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-prescription2 text-dark"></i>
                        </div>
                        <h5 class="mb-3">Blood Tests</h4>
                            <p class="mb-4">Comprehensive blood tests for accurate diagnosis and health monitoring.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrhcvLZ9J1mQFMH89ZXNyoA;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837466/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fBlood_test/RK=2/RS=ienZh2pmkBnInD0txMI9kX85UVs-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-clipboard2-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Fever Tests</h4>
                            <p class="mb-4">Quick and reliable tests to diagnose and manage fever-related illnesses.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=Awrijqkp9Z1mi5AQc0ZXNyoA;_ylu=Y29sbwNiZjEEcG9zAzEEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837546/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fWidal_test/RK=2/RS=Zjsm76oZHlMptVbKhgBTnBn63Ns-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-medical text-dark"></i>
                        </div>
                        <h5 class="mb-3">Allergy Tests</h4>
                            <p class="mb-4">Effective allergy tests to identify and manage various allergic reactions.</p>
                        <a class="btn btn-light px-3" target="_blank" href="https://r.search.yahoo.com/_ylt=AwrFF5hd9Z1mTuEJqrtXNyoA;_ylu=Y29sbwNiZjEEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1722837598/RO=10/RU=https%3a%2f%2fen.wikipedia.org%2fwiki%2fAllergy/RK=2/RS=vR_JFsAygMSaiSp048jHc8zK.8A-">
                            Read More<i class="bi bi-chevron-double-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
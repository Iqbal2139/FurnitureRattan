<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>    
    @yield('title')
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link rel="stylesheet" href="css/gallerystyle.css">
    {{-- Icon --}}
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.css">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
 <!-- Navbar  -->
 <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid pt-4">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gallery">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/order">ORDER</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-info text-white" href="#">LOG IN</a>
        </li>
      </ul>
    </div>
  </div>
 </nav>
 @yield('container')
 {{-- Javascript --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
  <footer>
    <div class="container my-5" style="width: 100%">
      <!-- Footer -->
      <footer
              class="text-center text-lg-start text-dark"
              >
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Links -->
          <section class="">
            <!--Grid row-->
            <div class="row">
              <!--Grid column-->
              <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">FOOTER CONTENT</h5>
    
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae modi cum ipsam ad, illo possimus laborum ut
                  reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
                  Reiciendis assumenda iusto sapiente inventore animi?
                </p>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
    
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Link 1</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 2</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 3</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Link 4</a>
                  </li>
                </ul>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </section>
          <!-- Section: Links -->
    
          <hr class="mb-4" />
    
          <!-- Section: CTA -->
          <section class="">
            <p class="d-flex justify-content-center align-items-center">
              <span class="me-3">Register for free</span>
              <button type="button" class="btn btn-outline-dark btn-rounded">
                Sign up!
              </button>
            </p>
          </section>
          <!-- Section: CTA -->
    
          <hr class="mb-4" />
    
          <!-- Section: Social media -->
          <section class="mb-4 text-center">
            <!-- Facebook -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>
    
            <!-- Twitter -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>
    
            <!-- Google -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>
    
            <!-- Instagram -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
    
            <!-- Linkedin -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
    
            <!-- Github -->
            <a
               class="btn btn-outline-dark btn-floating m-1"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div
             class="text-center p-3"
             >
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/"
             >MDBootstrap.com</a
            >
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
    <!-- End of .container -->
  </footer>
</html>
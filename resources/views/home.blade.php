<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/style.css">
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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href=""><img src="img/chairlogo.png" width="50px" alt="">Rattan Furniture</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Our Collection</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Order Now</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- Carousel Area  -->
  <div id="mainCarousel">
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/Jfurniture.jpg" class="d-block w-100" alt="img/Jfurniture.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>SEND THE WORLD BEST QUALITY RATTAN FURNITURE FROM INDONESIA</h5>
          <p>FROM THE BEST MATERIALS TO TOP QUALITY RATTAN FURNITURE </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/Jfurniture2.jpg" class="d-block w-100" alt="img/Jfurniture2.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>SEE THE ENDLESS POSSIBILITY FOR YOUR INTERIOR DESIGN</h5>
          <p>WE WILL MAKE IT HAPPEN</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/Jfurniture3.jpg" class="d-block w-100" alt="img/Jfurniture3.jpg">
        <div class="carousel-caption d-none d-md-block">
          <h5>SEE OUR PRODUCT</h5>
          <p>TO FIND AND KNOW MORE THE REAL INDONESIAN RATTAN FURNITURE</p>
          <button type="button" class="btn btn-primary">SEE OUR PRODUCT</button>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>  
 </div>
  <!-- Main Content Area -->
    <div class="container" style="margin-top: 120px">
      {{-- Company Word --}}
      <div class="row text-center">
        <div class="col-md">
          <h3>THE FURNITURE INSPIRATIONS</h3>
        </div>
      </div>
      <div class="row">
        <div class="col text-start">
          <div class="p-5">
            <p>Some call them furniture, we call them inspirations! Furniture brings you the latest trends in outdoor furniture at astounding prices.  We scour hard for inspiring designs of highest quality and timeless appeal. We strive to ensure each piece of furniture retains a bit of that natural ruggedness without compromising on the comfort. Our iconic Seychelles wicker collection draws on modern, minimalist design traditions, with a distinctive playful twist. Each piece is meticulously handwoven in our signature weave that echoes the charm of outdoor oasis. At Boulevard, we intertwine inspirational designs with exquisite craftsmanship to deliver heirloom-worthy furniture.Come enliven your patio, deck and garden with a complete outdoor living experience!
            </p>
          </div>
        </div>
      </div>
      {{-- Best Product Section --}}
      <div class="container">
        <div class="row mt-4">
          <div class="col-md text-center">
            <h2>OUR COLLECTIONS</h2>
          </div>
        </div>
        {{-- Carousel Product --}}
        <div id="productCarousel" class="container mt-4 mb-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-3">
                 <a href=""><img src="img/BestChair1.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair2.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair3.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair4.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-3">
                 <a href=""><img src="img/BestChair5.jpeg" class="d-block w-100 rounded" alt="..."></a> 
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair6.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair7.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                  <a href=""><img src="img/BestChair8.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-3">
                 <a href=""><img src="img/BestChair9.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                 <a href=""><img src="img/BestChair10.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                 <a href=""><img src="img/BestChair11.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
                <div class="col-3">
                 <a href=""><img src="img/BestChair12.jpeg" class="d-block w-100 rounded" alt="..."></a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
       </div>
      </div>
      {{-- BEST PRODUCT --}}
      <div class="container mt-5">
        <div class="row mt-4 mb-5">
          <div class="col-md text-center">
            <h2>BEST PRODUCT</h2>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-8 text-center pt-5">
            <img src="img/BestChair13.jpeg" width="750px" height="700px" alt="">
          </div>
          <div class="col-md-4">
            <div class="row">
              <img src="img/BestChair2.jpeg" alt="">
            </div>
            <div class="row">
              <img src="img/BestChair3.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- OUR QUALITY --}}
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-md text-center">
          <h3>OUR QUALITY</h3>
        </div>
      </div>
      <div class="row mt-4 mb-4">
        <div id="text-quality1" style="margin-top: 10px" class="col-md-4">
          <div class="container text-center text-white" style="padding-top: 150px">
            <h3>Spinnin'a robe</h3>
            <p>A textural take on your seating</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="container">
            <img src="img/1.jpeg" style="margin-left: 50px" class="img-fluid rounded" alt="">
          </div>
        </div>
      </div>
      <div class="row mt-2 mb-2">
        <div class="col-md-8">
          <div class="container">
            <img src="img/2.jpg" style="margin-right: 50px" class="img-fluid rounded" alt="">
          </div>
        </div>
        <div id="text-quality2" style="margin-top: 20px" class="col-md-4">
          <div class="container text-center text-white" style="padding-top: 120px">
            <h3>Hit your straps</h3>
            <p>Poised to impress.</p>
          </div>
        </div>
        <div class="row mt-4 mb-4">
          <div id="text-quality3" style="margin-top: 10px" class="col-md-4">
            <div class="container text-center text-white" style="padding-top: 70px">
              <h3>NOT YOUR USUAL TWIST
                SIGNATURE WEAVE</h3>
              <p>Furniture's signature collection of premium Wintech polyrod synthetic wicker 3 by 3 twisted profile.</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="container">
              <img src="img/3.jpg" style="margin-left: 50px" class="img-fluid rounded" alt="">
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-2">
          <div class="col-md-8">
            <div class="container">
              <img src="img/4.jpg" style="margin-right: 50px" class="img-fluid rounded" alt="">
            </div>
          </div>
          <div id="text-quality4" style="margin-top: 20px" class="col-md-4">
            <div class="container text-center text-white" style="padding-top: 60px">
              <h3>HEIRLOOM-WORTHY
                FINE CRAFTSMANSHIPs</h3>
              <p>Our signature collections are intricately handwoven by our master artisans in Cirebon, West Java</p>
            </div>
          </div>
      </div>
      {{-- Testimonial --}}
      <div class="row justify-content-center mt-5 mb-2">
        <div class="col-lg text-center">
          <h1>TESTIMONIAL</h1>
        </div>
      </div>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
   <div id="testiCarousel" class="carousel-inner">
    <div class="carousel-item active">
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-8 text-center">
          <h5>"Great place to buy furniture!"</h5>
          <p>The quality of the Boulevard's furniture is impeccable! Customer service from sales to after-sales is commendable as well. The sales consultant who served me was really polite throughout and we did not feel any pressure in making our decision. We opted for self-collection and the process was a breeze, just pick and go! -Raditya Dika</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-8 text-center">
          <h5>"Love this store!"</h5>
          <p>TIt’s very spacious so there’s a wide selection of different types and styles of outdoor furniture for a broad range of uses and functions. Really good quality and value as well. The fabric material for their outdoor furniture is weather and rain resistant so it’s well suited for Singapore weather. And the styles of their pieces are very refined, sleek, and timeless. -Julia Robert</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row justify-content-center mt-5 mb-5">
        <div class="col-lg-8 text-center">
          <h5>"This place realy rock!"</h5>
          <p>You must visit this place for the next level furniture quality, you gonna love the furniture in this shop -Robert Downey Jr</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <div class="row justify-content-center mb-5 ">
        <div class="col-6 justify-content-center d-flex">
          <figure class="figure" style="margin-right: 20px  ">
            <img src="img/6.jpeg" class="figure-img img-fluid rounded-circle" alt="...">
            <figcaption class="figure-caption text-center">
              <h5>Raditya Dika</h5>
              <span>Indonesia</span>
            </figcaption>
          </figure>
          <figure class="figure" style="margin-right: 20px">
            <img src="img/5.jpeg" class="figure-img img-fluid rounded-circle" alt="...">
            <figcaption class="figure-caption text-center">
              <h5>Julia Robert</h5>
              <span>English</span>
            </figcaption>
          </figure>
          <figure class="figure">
            <img src="img/7.jpeg" class="figure-img img-fluid rounded-circle" alt="...">
            <figcaption class="figure-caption text-center">
              <h5>Robert Downey Jr</h5>
              <span>America</span>
            </figcaption>
        </div>
      </div>
    {{-- Javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
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
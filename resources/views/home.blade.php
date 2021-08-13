@extends('layouts.main')
  {{-- Title --}}
  @section('title')
  <title>Homepage</title>
  @endsection
  <!-- Carousel Area  -->
  @section('container')
   <div id="mainCarousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Jfurniture.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SEND THE WORLD BEST QUALITY RATTAN FURNITURE FROM INDONESIA</h5>
           <p>FROM THE BEST MATERIALS TO TOP QUALITY RATTAN FURNITURE </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Jfurniture2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SEE THE ENDLESS POSSIBILITY FOR YOUR INTERIOR DESIGN</h5>
           <p>WE WILL MAKE IT HAPPEN</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/Jfurniture3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>SEE OUR PRODUCT</h5>
           <p>TO FIND AND KNOW MORE THE REAL INDONESIAN RATTAN FURNITURE</p>
           <a href=""><button type="button" class="btn btn-primary">SEE OUR PRODUCT</button></a>
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
  {{-- Company Word --}}
  <div class="container" style="margin-top: 120px">
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
        <img class="img-fluid" src="img/BestChair13.jpeg" alt="">
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
  {{-- OUR QUALITY --}}
  <div class="row mb-5">
        <div class="col-md text-center">
          <h3>OUR QUALITY</h3>
        </div>
  </div>
  <div class="row mt-4 mb-4">
        <div id="text-quality1"     class="col-md-4">
          <div class="container text-center text-white" style="padding-top: 150px">
            <h3>Spinnin'a robe</h3>
            <p>A textural take on your seating</p>
          </div>
        </div>
        <div class="col-md-8">
          <div class="container">
            <img src="img/1.jpeg" class="img-fluid rounded" alt="">
          </div>
        </div>
  </div>
  <div class="row mt-2 mb-2">
        <div class="col-md-8">
          <div class="container">
            <img src="img/2.jpg" class="img-fluid rounded" alt="">
          </div>
        </div>
        <div id="text-quality2" style="margin-top: 20px" class="col-md-4">
          <div class="container text-center text-white" style="padding-top: 120px">
            <h3>Hit your straps</h3>
            <p>Poised to impress.</p>
          </div>
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
              <img src="img/3.jpg" class="img-fluid rounded" alt="">
            </div>
          </div>
        </div>
        <div class="row mt-2 mb-2">
          <div class="col-md-8">
            <div class="container">
              <img src="img/4.jpg" class="img-fluid rounded" alt="">
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
<div class="container-fluid">  
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
        <figure class="figure" style="margin-right: 20px">
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
</div>  
@endsection    
    


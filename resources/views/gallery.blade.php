@extends('layouts.main')
@section('container')
{{-- Carousel --}}
<div id="gcarousel">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/fur1.jpeg" class="d-block w-100 image-fluid" alt="...">
        <div id="gcaption" class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fur2.jpeg" class="d-block w-100 image-fluid" alt="...">
        <div id="gcaption" class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/fur3.jpeg" class="d-block w-100 image-fluid" alt="...">
        <div id="gcaption" class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
{{-- Chair Collection --}}
<div class="container mt-5 mb-5">
    <div class="row mt-4">
      <div class="col-md text-center">
        <h2>Chair Collection</h2>
      </div>
    </div>
    {{-- Carousel Product --}}
    <div id="productCarousel" class="container mt-4 mb-4">
    <div id="carouselchair" class="carousel slide" data-bs-ride="carousel">
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
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselchair" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselchair" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>
</div>
{{-- Table Collection --}}
<div class="container mt-5 mb-5">
    <div class="row mt-4">
      <div class="col-md text-center">
        <h2>Table Collection</h2>
      </div>
    </div>
    {{-- Carousel Product --}}
    <div id="productCarousel" class="container mt-4 mb-4">
    <div id="carouseltable" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/T1.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/T2.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/T3.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/T4.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/T5.jpeg" class="d-block w-100 rounded" alt="..."></a> 
            </div>
            <div class="col-3">
              <a href=""><img src="img/T6.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/T7.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/T8.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/T9.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/T10.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/T11.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/T12.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouseltable" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouseltable" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>
</div>
{{-- Shelf Collection --}}
<div class="container mt-5 mb-5">
    <div class="row mt-4">
      <div class="col-md text-center">
        <h2>Shelf Collection</h2>
      </div>
    </div>
    {{-- Carousel Product --}}
    <div id="productCarousel" class="container mt-4 mb-4">
    <div id="carouselcupboard" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/C1.jpg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/C2.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/C3.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/C4.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/C5.jpg" class="d-block w-100 rounded" alt="..."></a> 
            </div>
            <div class="col-3">
              <a href=""><img src="img/C6.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/C7.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
              <a href=""><img src="img/C8.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-3">
             <a href=""><img src="img/C9.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/C10.jpg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/C11.jpg" class="d-block w-100 rounded" alt="..."></a>
            </div>
            <div class="col-3">
             <a href=""><img src="img/C12.jpeg" class="d-block w-100 rounded" alt="..."></a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselcupboard" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselcupboard" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>
</div>
  @endsection
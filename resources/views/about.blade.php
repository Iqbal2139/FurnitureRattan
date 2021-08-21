@extends('layouts.main')
@section('title')
  <title>About</title>
  @endsection
  
@section('container')
{{-- Jumbotron --}}
  <div class="jumbotron jumbotron-fluid" style="background-image: url(img/About.jpeg)">
   <div class="container text-white">
    <h1 class="display-4">About Rattan Furniture</h1>
    <P class="lead">We Will Tell You About Our Company</P>
   </div>
  </div>
{{-- Heroes --}}
  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/Heroes About.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h2>Here A Word From Our CEO</h2>
        <h1 class="display-5 fw-bold lh-1 mb-3">Reza Rahardian</h1>
        <p>CEO of Rattan Furniture</p>
        <p class="lead">Stand as rattan furniture, we proudly present our collection through this site. Available in rattan chair living set, dining set, bar set, Lounge chair attend in modern design.We have been developing designs as outdoor rattan furniture and ever changing products as we adapt to our customer needs . </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">CONTACT ME</button>
        </div>
      </div>
    </div>
  </div>
{{-- About Company --}}
<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Story Of Our Company</h1>
      <p>Rattan Furniture</p>
      <p class="lead">PT AIDA Rattan Industry is established in 2003 with main strength and specialization in rattan processing. On 1 st of June, 2004 the new factory of PT AIDA Rattan Industry was inaugurated in Cirebon, West Java. It is a part of VIVERE Group, a company that has more than 30 years of experience in Indonesia for interior and furniture solution.</p>
    </div>
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/About2.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
  </div>
</div>
{{-- Our Location --}}
<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="img/Map.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h2>Our Location</h2>
      <h1 class="display-5 fw-bold lh-1 mb-3">Cirebon,West Java, Indonesia</h1>
      <p class="lead">Cirebon is a port city on the northern coast of the Indonesian island of Java. It is the only coastal city of West Java, located about 40 km west of the provincial border with Central Java </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
       <a href="https://www.google.com/maps/place/Cirebon,+Cirebon+City,+West+Java/@-6.7427761,108.5190192,13z/data=!3m1!4b1!4m5!3m4!1s0x2e6ee2649e6e5bbb:0x70a07638a7fe12fe!8m2!3d-6.7320229!4d108.5523164"><button type="button" class="btn btn-outline-secondary btn-lg px-4">SEE ON MAP</button></a> 
      </div>
    </div>
  </div>
</div>
{{-- Our Factory --}}
<div class="container mt-2 mb-4 text-center">
  <h2>Our Factory</h2>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <img class="img-fluid" src="img/F1.jpg" alt="">
    </div>
    <div class="col-4">
      <div class="row">
        <img class="img-fluid" src="img/F2.jpg" alt="">
      </div>
      <div class="row">
        <img class="img-fluid mt-3" src="img/F3.jpg" alt="">
      </div>
    </div>
  </div>
  <div class="row justify-content-start">
    <div class="col-8">
      <img id="img-f1" class="img-fluid" src="img/F4.jpg" alt="">
    </div>
    <div class="col-4">
      <img id="img-f2" class="img-fluid" src="img/F2.jpg" alt="">
    </div>
  </div>
</div>
@endsection
  
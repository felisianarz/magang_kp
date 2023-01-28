@extends('index.app')

@section('container')

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="height: 500px;">
    <div class="carousel-item active">
      <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="d-block w-100" alt="...">
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

<!-- Group -->

<div class="btn-group py-5 mx-5" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary rounded-0" for="btnradio1">Jogja</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary rounded-0" for="btnradio2">Semarang</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary rounded-0" for="btnradio3">Solo</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
  <label class="btn btn-outline-primary rounded-0" for="btnradio4">Bali</label>
</div>

<!-- Group -->

<!-- ======= Our Location Section ======= -->
<div class="container px-4 py-5" data-aos="fade-up" id="custom-cards">
 <h2 class="pb-3">Our Location</h2>

  <div class="row">

<div class="col">
 <div class="card rounded-0" style="width: 14rem;">
 <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
     <div class="card-body text-center">
     <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Yogyakarta</h5>
     
     <button type="button rounded-0" class="btn btn-primary rounded-0 " data-bs-toggle="button">Location Detail</button>
     </div>
 </div>
</div>

<div class="col">
 <div class="card rounded-0 " style="width: 14rem;">
 <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
     <div class="card-body text-center">
     <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Semarang</h5>
     
     <a href="#" class="btn btn-primary rounded-0">Location Detail</a>
     </div>
 </div>
</div>

<div class="col">
 <div class="card" style="width: 14rem;">
 <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top" alt="...">
     <div class="card-body text-center">
     <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz<br> Solo<br></h5>
     
     <a href="#" class="btn btn-primary">Location Detail</a>
     </div>
 </div>
</div>

<div class="col">
 <div class="card" style="width: 14rem;">
 <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top" alt="...">
     <div class="card-body text-center">
     <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz  <br>Bali <br></h5>
     
     <a href="#" class="btn btn-primary">Location Detail</a>
     </div>
 </div>
</div>

</div>


  
</div>

<!-- Our Location Section -->


@endsection
@extends('index.app')

@section('container')


 <!-- Hero -->
 <div class="p-5 text-center bg-image " style="
background-image: url('tema/img/home/homebg1.png');
height: 500px;
">

    <div>
        <div class="d-flex h-200 py-5 my-5">
            <div class="text-white text-start">
                
                <h1 class="mb-3">PT Kalimas AI, Mercedes-Benz Yogya</h1>
                <a class="btn btn-light text-black btn-outline-light btn-lg rounded-0" href="#!" role="button">Learn more</a>
            </div>
        </div>
    </div>
</div>

<!-- Hero -->


  <!-- End Hero -->

  <main id="main">

  <!-- ======= Our Location Section ======= -->
  <div class="container px-4 py-5" data-aos="fade-up" id="custom-cards">
    <h2 class="pb-3">Our Location</h2>

<div class="row">

  <div class="col">
    <div class="card" style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Yogyakarta</h5>
        
        <button type="button" class="btn btn-primary " data-bs-toggle="button">Location Detail</button>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card " style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Semarang</h5>
        
        <a href="#" class="btn btn-primary">Location Detail</a>
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

    <!-- Product Section -->
    <div div class="container px-4 py-5" data-aos="fade-up" id="custom-cards">
    <h2 class="pb-3">Our Product</h2>
    </div>
    <!-- Product Section -->


@endsection
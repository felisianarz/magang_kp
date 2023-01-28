@extends('index.app')

@section('container')

<div class="p-5 text-center bg-image " style="
background-image: url('tema/img/home/homebg1.png');
height: 500px;
">

    <div>
        <div class="d-flex h-200 py-5 my-5">
            <div class="text-white text-start">
                <h1 class="mb-3">About </h1>
                <h1 class="mb-3">PT Kalimas AI, Mercedes-Benz Yogya</h1>
                <a class="btn btn-light text-black btn-outline-light btn-lg rounded-0" href="#!" role="button">Learn more</a>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 ml-5 text-black">

    <h5 class="mb-3">HEAD OFFICE : </h5>
    <h6 class="mb-3">KALIMAS  AI  Yogyakarta: Jl. Raya Yogya – Solo Km. 9 Yogyakarta - 55010</h6>
    <h6 class="mb-3">Telp. : ( 0274 ) 488130, 484213, 488916/h1>
    <h6 class="mb-3">Fax.  : ( 0274 ) 488932</h6>
    <h6 class="mb-3">24 hours assist : 085868397777</h6>
    <h6 class="mb-3">Jam kerja : Senin-Sabtu  / 08.00 – 17.00</h6>
    <h6 class="mb-3">Layanan  yang tersedia : Sales/Service/Sparepart/24 hours assist/Body Repair/Painting</h6>

</div>

<div class="container pt-3 text-black">

    <h5 class="mb-3">BRANCH OFFICE :</h5>
    <h6 class="mb-3">KALIMAS  AI  Semarang: Jl. Raya Semarang – Demak  Km. 7 Semarang - 50118 , Jawa Tengah</h6>
    <h6 class="mb-3">Telp. : ( 024 ) 6592811, 6592812, 6581940</h6>
    <h6 class="mb-3">WA : 0895 3842 65759</h6>
    <h6 class="mb-3">Fax. : ( 024 ) 6592811</h6>

</div>

<div class="container pt-3 text-black">

    <h6 class="mb-3">KALIMAS  SI  Solo: Jl. Raya Solo Permai Solo Baru - Sukoharjo HH / 09 - 57552 , Jawa Tengah</h6>
    <h6 class="mb-3">Telp. :  ( 0271 ) 621354, 621356</h6>
    <h6 class="mb-3">Fax.  : ( 0271 ) 621358</h6>

</div>

<div class="container pt-3 mb-2 text-black">

    <h6 class="mb-3">KALIMAS  BI  Bali: Jl.By Pass Gusti Ngurah Rai  No.101 X Sanur Denpasar - 80228 , Bali</h6>
    <h6 class="mb-3">Telp. : ( 0361 ) 288115, 288668, 289025, 289030</h6>
    <h6 class="mb-3">Fax.  : ( 0361 ) 288662</h6>

</div>

 <!-- ======= Our Location Section ======= -->
 <div class="container px-4 py-5" data-aos="fade-up" id="custom-cards">
    <h2 class="pb-3">Our Location</h2>

<div class="row">

  <div class="col">
    <div class="card rounded-0" style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Yogyakarta</h5>
        
        <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="button">Location Detail</button>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card rounded-0" style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz Semarang</h5>
        
        <a href="#" class="btn btn-primary rounded-0">Location Detail</a>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card rounded-0" style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz<br> Solo<br></h5>
        
        <a href="/location/bali" class="btn btn-primary rounded-0">Location Detail</a>
        </div>
    </div>
  </div>

  <div class="col">
    <div class="card rounded-0" style="width: 14rem;">
    <img src="tema/img/location/semarang/kalimas-semarang.jpg" class="card-img-top rounded-0" alt="...">
        <div class="card-body text-center">
        <h5 class="card-title">PT. Kalimas AI, Mercedes-Benz  <br>Bali <br></h5>
        
        <a href="/location/bali" class="btn btn-primary rounded-0">Location Detail</a>
        </div>
    </div>
  </div>

</div>


     
  </div>

  <!-- Our Location Section -->

@endsection
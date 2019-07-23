@extends('layouts.master')

<style>
    section {
      min-height: 420px;
    }

    #satu {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
    }

    #imgop {
      opacity: 0.6;
      filter: alpha(opacity=20);
      /* For IE8 and earlier */
    }


  </style>

@section('title', 'universal | Home')

@section('content')
<div class=" bd-example" id="satu">
    <div id="imgop">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider/slider1.jpg" class="d-block w-100" alt="Responsive image">
          </div>
          <div class="carousel-item">
            <img src="img/slider/slider2.jpg" class="d-block w-100" alt="Responsive image">
          </div>
          <div class="carousel-item">
            <img src="img/slider/slider3.jpg" class="d-block w-100" alt="Responsive image">
          </div>
        </div>
      </div>

    </div>
  </div>





<div class="container" style="">

<div class="row ">
    <div class="col" style="">.

      <div class="jumbotron text-center bg-transparent" style="height:10px">
          <h3 class="display-5 font-weight-bold">Pondok Pesanten Mahasiswa Universal</h3>
          <p class="lead ">Jl. Desa Cipadung No.01, RT.03/RW.08, Cipadung, Cibiru, Kota Bandung, Jawa Barat 40614</p>
          <hr class="my-4">
        </div>


    </div>
  </div>


<!-- SECTION 2 -->

  <div class="row">
    <div class="col-sm-6" style="">
      <nav class="jumbotron  " style="background-color:#0e74c0; width:400">


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach($artikels as $i => $artikel)
            <div class="carousel-item @if($i == 0) {{ 'active' }} @endif">
              <img src="img_artikel/{{$artikel->gambar_artikel}}" class="d-block" height="300px" width="100%" alt="Responsive imag">
              <p style="text-align:center">{{$artikel->isi_artikel}}</p>
            </div>
          @endforeach

          </div>
        </div>

            </nav>

    </div>

    <div class="col-sm-6">
      <nav class="navbar justify-content-center mb-3 pb-1 pt-1 " style="background-color : #0e74c0 ">
              <a class="navbar-brand  font-weight-bold " id="white">TERBARU</a>
            </nav>

    </div>

    <div class="col">
      <nav class="navbar justify-content-center mb-3 pb-1 pt-1 " style="background-color : #0e74c0 ">
              <a class="navbar-brand  font-weight-bold " id="white">TERBARU</a>
            </nav>

    </div>

  </div>
</div>



@endsection

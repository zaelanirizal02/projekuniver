@extends('layouts.master')

@section('title', 'universal | home')


@section('content')
<style>
#satu {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
</style>
<section id="satu" style="padding-top:50px">
  <img src="/img/header2.png" class="d-block w-100" alt="img-responsive"  width="50%">

</section>

  <div class="container py-5">
    <div class="card">
      <div class="jumbotron-fluid pt-2" style="background-color:white;padding-bottom:10px">
        <img src="/img/header3.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
      </div>
      <div class="card mb-3">
        <div class="card-header my-0">
          <h5 class="font-weight-bold">BERITA</h5>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header my-0">
          <h5 class="font-weight-bold">FASILITAS</h5>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
      <div class="card">
        <div class="card-header my-0">
          <h5 class="font-weight-bold">U K S</h5>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Selengkapnya</a>
        </div>
      </div>
    </div>
  </div>



<!-- <section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2019 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section> -->



@endsection

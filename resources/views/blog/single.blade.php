@extends('layouts.master')

@section('title', 'universal | home')


@section('content')
<div class="container py-3">
  <div class="row">
    <div class="col-sm-3 pr-1">
      <div class="card">
        <div class="container text-center py-1" style="background-color:#d1d1d1">
          <h4>ARSIP</h4>
        </div>
        <div class="row">
          <div class="col-md-4 text-center py-3">
            <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-sm-left">
              <h5 class="card-title" href="/" >Berita 1</h5>
              <p class="card-text">Isi Berita 1</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>

          <div class="col-md-4 text-center py-3">
            <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body text-sm-left">
              <h5 class="card-title" href="/" >Berita 1</h5>
              <p class="card-text">Isi Berita 1</p>
              <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="card">
        <div class="jumbotron d-flex align-items-center text-center" style="width:auto;height:100px;background-color:#d1d1d1">
          <div class="container ">
            <h1>{{$artikel->nama_artikel}}</h1>
          </div>
        </div>
        <div class="container">
          <div class="container">
                <div class="text-center mx-2">
                  <img src="/img_artikel/{{$artikel->gambar_artikel}}"  style="width:50%">
                </div>
                <div class="text py-3 my-2 mx-2" style="border-box">
                  <p>{{$artikel->isi_artikel}}</p>
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>










@endsection

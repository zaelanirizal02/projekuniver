@extends('layouts.master')

@section('title', 'create banner')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/banner">Banner</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:190px">
  <form class="shadow-lg mt-3 py-2 px-3"  action="/banner" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama_banner">Nama Banner :</label>
      <input type="text" class="form-control" name="nama_banner"id="nama_banner">
    </div>

      <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
      <label for="gambar_banner">Gambar Banner :</label>
      <input type="file" class="form-control" name="gambar_banner"id="gambar_banner">
    </div>

          <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
          {{ csrf_field() }}
      </form>


  </div>
  </div>
</div>

<section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2019 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section>



<!-- <div class="" style="padding-top:100px">


<h1 class="text-center">MASUKAN BANNER</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/banner" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_banner">Nama Banner :</label>
    <input type="text" class="form-control" name="nama_banner"id="nama_banner">
  </div>

    <div class="form-group">
    <label for="gambar_banner">Gambar Banner :</label>
    <input type="file" class="form-control" name="gambar_banner"id="gambar_banner">
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div> -->

    @endsection

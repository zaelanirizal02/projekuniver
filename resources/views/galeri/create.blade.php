@extends('layouts.master')

@section('title', 'create galeri')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/galeri">Galeri</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:80px">
  <form class="shadow-lg mt-3 py-2 px-3"  action="/galeri" method="post" enctype="multipart/form-data">


    <div class="form-group">
      <label for="nama_galeri">Nama Galeri :</label>
      <input type="text" class="form-control" name="nama_galeri"id="nama_galeri">
    </div>
      <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label for="jenis_galeri">Jenis Galeri :</label>
          <select class="form-control" name="jenis_galeri"id="jenis_galeri">
          <option value="fasilitas">Fasilitas</option>
          <option value="ukegiatan">Unit Kegiatan</option>
          </select>
<br>
          <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
            <label for="gambar_galeri">Gambar Galeri :</label>
            <input type="file" class="form-control" name="gambar_galeri"id="gambar_galeri">
          </div>
      </div>

      <div class="col-sm-8">
        <div class="form-group">
        <label for="isi_galeri">Keterangan Galeri :</label>
        <textarea name="keterangan_galeri" rows="5" cols="110"></textarea>
        </div>
      </div>
    </div>

          <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
          {{ csrf_field() }}
      </form>
  </div>
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



<!-- <div class="" style="padding-top:50px">


<h1 class="text-center">BUAT GALERI</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/galeri" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_galeri">Nama Galeri :</label>
    <input type="text" class="form-control" name="nama_galeri"id="nama_galeri">
  </div>

    <div class="form-group">
    <label for="jenis_galeri">Jenis Galeri :</label>

    <div class="row">
      <div class="col-sm-3">
        <select class="form-control" name="jenis_galeri"id="jenis_galeri">
        <option value="Acara">Acara</option>
        <option value="kegiatan">kegiatan</option>
        </select>
    </div>
  </div>

    <div class="form-group">
    <label for="gambar_galeri">Gambar Galeri :</label>
    <input type="file" class="form-control" name="gambar_galeri"id="gambar_galeri">
  </div>

    <div class="form-group">
    <label for="isi_galeri">Keterangan Galeri :</label>
    <textarea name="keterangan_galeri" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div> -->

    @endsection

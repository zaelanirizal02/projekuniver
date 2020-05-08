@extends('layouts.master')

@section('title', 'create organisasi')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/uks">UKS</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:60px">
  <form class="shadow-lg mt-3 py-2 px-3" action="/uks" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="nama_uks">Nama Kegiatan :</label>
      <input type="text" class="form-control" name="nama_uks"id="nama_uks">
    </div>
      <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label for="jenis_uks">Jenis Kegiatan :</label>
          <select class="form-control" name="jenis_uks"id="jenis_uks">
          <option value="Hadroh">Hadroh</option>
          <option value="Nasyid">Nasyid</option>
          <option value="Marawis">Marawis</option>
          <option value="Avicena">Avicena</option>
          <option value="Seblak_Basho">Seblak Basho</option>
          <option value="Tradisi">Tradisi</option>
          <option value="Tukang_Pelm">Tukang Pelm</option>
          </select>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-5">
          <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
            <label for="gambar_uks">Gambar Kegiatan :</label>
            <input type="file" class="form-control" name="gambar_uks"id="gambar_uks">
          </div>
        </div>
      </div>
    </div>



      <div class="form-group">
      <label for="isi_uks">Isi Kegiatan :</label>
      <textarea class="ckeditor" id="isi_uks" name="isi_uks" rows="5" cols="45"></textarea>
    </div>

          <button type="submit" class="btn btn-primary" style="border: 2px">CREATE</button>
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



<!-- <div class="" style="padding-top:50px">


<h1 class="text-center">BUAT KEGIATAN</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/uks" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_uks">Nama Kegiatan :</label>
    <input type="text" class="form-control" name="nama_uks"id="nama_uks">
  </div>

    <div class="form-group">
    <label for="jenis_uks">Jenis Kegiatan :</label>

    <div class="row">
      <div class="col-sm-3">
        <select class="form-control" name="jenis_uks"id="jenis_uks">
        <option value="Hadroh">Hadroh</option>
        <option value="Nasyid">Nasyid</option>
        <option value="Marawis">Marawis</option>
        <option value="Avicena">Avicena</option>
        <option value="Seblak_Basho">Seblak Basho</option>
        <option value="Tradisi">Tradisi</option>
        <option value="Tukang_Pelm">Tukang Pelm</option>
        </select>
      </div>
    </div>
  </div>

    <div class="form-group">
    <label for="gambar_uks">Gambar Kegiatan :</label>
    <input type="file" class="form-control" name="gambar_uks"id="gambar_uks">
  </div>

    <div class="form-group">
    <label for="isi_uks">Isi Kegiatan :</label>
    <textarea class="ckeditor" id="isi_uks" name="isi_uks" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div> -->

    @endsection

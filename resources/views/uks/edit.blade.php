@extends('layouts.master')

@section('title', 'edit-uks')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/uks">UKS</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:60px">
  <form action="/uks/{{$uks->id}}"  class="shadow-lg mt-3 py-2 px-3"  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama_uks">Nama Kegiatan :</label>
      <input type="text" class="form-control" name="nama_uks"id="nama_uks" value="{{$uks->nama_uks}}">
    </div>

    <div class="form-group">
      <div class="row">
        <div class="col-sm-4">
          <label for="jenis_uks">Jenis Kegiatan :</label>
          <select class="form-control" name="jenis_uks"id="jenis_uks">
          <option value="Hadroh" @if($uks->jenis_uks == "Hadroh")selected @endif>Hadroh</option>
          <option value="Nasyid" @if($uks->jenis_uks == "Nasyid")selected @endif>Nasyid</option>
          <option value="Marawis" @if($uks->jenis_uks == "Marawis")selected @endif>Marawus</option>
          <option value="Avicena" @if($uks->jenis_uks == "Avicena")selected @endif>Avicena</option>
          <option value="Seblak_Basho" @if($uks->jenis_uks == "Seblak_Basho")selected @endif>Seblak Basho</option>
          <option value="Tradisi" @if($uks->jenis_uks == "Tradisi")selected @endif>Tradisi</option>
          <option value="Tukang_Pelm" @if($uks->jenis_uks == "Tukang_Pelm")selected @endif>Tukang Pelm</option>
          </select>
          <br>
          <label for="gambar_uks">Gambar Kegiatan :</label>
          <input type="file" class="form-control" name="gambar_uks"id="gambar_uks">{{$uks->gambar_uks}}
        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-5">
          <img class="shadow" src="/img_uks/{{$uks->gambar_uks}}"  style="height:200px">
        </div>
      </div>
    </div>


      <div class="form-group">
      <label for="isi_uks">Isi Kegiatan :</label>
      <textarea class="ckeditor" id="isi_uks" name="isi_uks" rows="5" cols="45">{!!$uks->isi_uks!!}</textarea>
    </div>

          <button type="submit" class="btn btn-primary" style="border: 2px">EDIT</button>
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


<h1 class="text-center">EDIT UKS</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/uks/{{$uks->id}}" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_uks">Nama Kegiatan :</label>
    <input type="text" class="form-control" name="nama_uks"id="nama_uks" value="{{$uks->nama_uks}}">
  </div>

    <div class="form-group">
    <label for="jenis_uks">Jenis Kegiatan :</label>

    <div class="row">
      <div class="col-sm-3">
        <select class="form-control" name="jenis_uks"id="jenis_uks">
        <option value="Hadroh" @if($uks->jenis_uks == "Hadroh")selected @endif>Hadroh</option>
        <option value="Nasyid" @if($uks->jenis_uks == "Nasyid")selected @endif>Nasyid</option>
        <option value="Marawis" @if($uks->jenis_uks == "Marawis")selected @endif>Marawus</option>
        <option value="Avicena" @if($uks->jenis_uks == "Avicena")selected @endif>Avicena</option>
        <option value="Seblak_Basho" @if($uks->jenis_uks == "Seblak_Basho")selected @endif>Seblak Basho</option>
        <option value="Tradisi" @if($uks->jenis_uks == "Tradisi")selected @endif>Tradisi</option>
        <option value="Tukang_Pelm" @if($uks->jenis_uks == "Tukang_Pelm")selected @endif>Tukang Pelm</option>
        </select>
      </div>
    </div>
  </div>

    <div class="form-group">
    <label for="gambar_uks">Gambar Kegiatan :</label>
    <input type="file" class="form-control" name="gambar_uks"id="gambar_uks">{{$uks->gambar_uks}}
  </div>

    <div class="form-group">
    <label for="isi_uks">Isi Kegiatan :</label>
    <textarea class="ckeditor" id="isi_uks" name="isi_uks" rows="5" cols="45">{!!$uks->isi_uks!!}</textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div> -->

    @endsection

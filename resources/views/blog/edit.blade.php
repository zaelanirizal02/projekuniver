@extends('layouts.master')

@section('title', 'edit-artikel')

@section('content')


<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/artikel">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:60px">

  <form action="/blog/{{$artikel->id}}" class="shadow-lg mt-3 py-2 px-3" method="post">


    <div class="form-group">
      <label for="nama_artikel">Nama Artikel :</label>
      <input type="text" class="form-control" name="nama_artikel"id="nama_artikel" value="{{$artikel->nama_artikel}}">
    </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-4">
            <label for="jenis_artikel">Jenis Artikel :</label>
            <select class="form-control" name="jenis_artikel" id="exampleFormControlSelect">
              <option value="berita" @if($artikel->jenis_artikel == "berita")selected @endif>berita</option>
              <option value="artikel" @if($artikel->jenis_artikel == "artikel")selected @endif>artikel</option>
            </select>
            <br>
            <label for="gambar_artikel">Gambar Artikel :</label>
            <input type="file" class="form-control" name="gambar_artikel"id="gambar_artikel">{{$artikel->gambar_artikel}}
          </div>
          <div class="col-sm-3">

          </div>
          <div class="col-sm-5" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
            <img class="shadow" src="/img_artikel/{{$artikel->gambar_artikel}}"  style="height:200px">
          </div>
        </div>
      </div>

      <div class="form-group">
      <label for="isi_artikel">Isi Artikel :</label>
      <textarea class="ckeditor" id="isi_artikel" name="isi_artikel" rows="5" cols="45" >{!!$artikel->isi_artikel!!}</textarea>
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


<!--
<div class="" style="padding-top:100px">


<h1 class="text-center">EDIT ARTIKEL</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/blog/{{$artikel->id}}" method="post" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_artikel">Nama Artikel :</label>
    <input type="text" class="form-control" name="nama_artikel"id="nama_artikel" value="{{$artikel->nama_artikel}}">
  </div>

    <div class="form-group">
    <label for="jenis_artikel">Jenis Artikel :</label>
    <select class="form-control" name="jenis_artikel" id="exampleFormControlSelect">
      <option value="berita" @if($artikel->jenis_artikel == "berita")selected @endif>berita</option>
      <option value="artikel" @if($artikel->jenis_artikel == "artikel")selected @endif>artikel</option>
    </select>
  </div>

    <div class="form-group">
    <label for="gambar_artikel">Gambar Artikel :</label>
    <input type="file" class="form-control" name="gambar_artikel"id="gambar_artikel">{{$artikel->gambar_artikel}}
  </div>

    <div class="form-group">
    <label for="isi_artikel">Isi Artikel :</label>
    <textarea class="ckeditor" id="isi_artikel" name="isi_artikel" rows="5" cols="45" >{!!$artikel->isi_artikel!!}</textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Edit</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div> -->

  <!-- <div class="form-group">
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div class="col-sm-3">

      </div>
      <div class="col-sm-5">

      </div>
    </div>
  </div> -->



    @endsection

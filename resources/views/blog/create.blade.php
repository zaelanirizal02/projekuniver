@extends('layouts.master')

@section('title', 'create artikel')

@section('content')
<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/artikel">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:60px">

<form class="shadow-lg mt-3 py-2 px-3" action="/blog" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nama_artikel">Judul Artikel :</label>
    <input type="text" class="form-control" name="nama_artikel"id="nama_artikel">
  </div>

    <div class="form-group">


    <div class="row">
      <div class="col-sm-3">
        <label for="jenis_artikel">Jenis Artikel :</label>
        <select class="form-control" name="jenis_artikel"id="jenis_artikel">
        <option value="Artikel">Artikel</option>
        <option value="Berita">Berita</option>
        </select>
      </div>
      <div class="col-sm-4">

      </div>
      <div class="col-sm-5">
        <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
        <label for="gambar_artikel">Gambar Artikel :</label>
        <input  type="file" class="form-control" name="gambar_artikel"id="gambar_artikel">
        </div>
      </div>

    </div>
  </div>



    <div class="form-group">
    <label for="isi_artikel">Isi Artikel :</label>
    <textarea class="ckeditor" id="isi_artikel" name="isi_artikel" rows="5" cols="45"></textarea>
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

    @endsection

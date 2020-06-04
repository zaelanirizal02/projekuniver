@extends('layouts.master')

@section('title', 'create kegiatan')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb border-bottom" >
    <li class="breadcrumb-item"><a href="/dashboard/home">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="/dashboard/uks">Kegiatan</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="card-body px-5 rounded-lg" style="padding-bottom:60px">
  <form class="shadow-lg mt-3 py-2 px-3" action="/kegiatan" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="nama_kegiatan">Nama Kegiatan :</label>
      <input type="text" class="form-control" name="nama_kegiatan"id="nama_kegiatan">
    </div>
      <div class="form-group">
      <div class="row">
        <div class="col-sm-3">
          <label for="jenis_kegiatan">Jenis Kegiatan :</label>
          <select class="form-control" name="jenis_kegiatan"id="jenis_kegiatan">
          <option value="Harian">Harian</option>
          <option value="Mingguan">Mingguan</option>
          <option value="Bulanan">Bulanan</option>
          <option value="Semesteran">Semester</option>
          <option value="Tahunan">Tahunan</option>

          </select>
        </div>
        <div class="col-sm-4">

        </div>
        <div class="col-sm-5">
          <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
            <label for="gambar_kegiatan">Gambar Kegiatan :</label>
            <input type="file" class="form-control" name="gambar_kegiatan"id="gambar_kegiatan">
          </div>
        </div>
      </div>
    </div>



      <div class="form-group">
      <label for="isi_kegiatan">Isi Kegiatan :</label>
      <textarea class="ckeditor" id="isi_kegiatan" name="isi_kegiatan" rows="5" cols="45"></textarea>
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

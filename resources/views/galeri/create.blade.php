@extends('layouts.master')

@section('title', 'create galeri')

@section('content')


<div class="" style="padding-top:50px">


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
  </div>

    @endsection

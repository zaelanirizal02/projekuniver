@extends('layouts.master')

@section('title', 'create kegiatan')

@section('content')


<div class="" style="padding-top:50px">


<h1 class="text-center">BUAT KEGIATAN</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/kegiatan" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_kegiatan">Nama Kegiatan :</label>
    <input type="text" class="form-control" name="nama_kegiatan"id="nama_kegiatan">
  </div>

    <div class="form-group">

    <div class="form-group">
    <label for="gambar_kegiatan">Gambar Kegiatan :</label>
    <input type="file" class="form-control" name="gambar_kegiatan"id="gambar_kegiatan">
  </div>

    <div class="form-group">
    <label for="isi_kegiatan">Isi Kegiatan :</label>
    <textarea class="ckeditor" id="isi_kegiatan" name="isi_kegiatan" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection

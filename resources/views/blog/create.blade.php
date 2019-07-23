@extends('layouts.master')

@section('title', 'create artikel')

@section('content')



<h1 class="text-center">BUAT ARTIKEL</h1>
<div class="container" style="border: 2px solid black">
<form action="/blog" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="nama_artikel">Nama Artikel :</label>
    <input type="text" class="form-control" name="nama_artikel"id="nama_artikel">
  </div>

    <div class="form-group">
    <label for="jenis_artikel">Jenis Artikel :</label>
    <input type="text" class="form-control" name="jenis_artikel"id="jenis_artikel">
  </div>

    <div class="form-group">
    <label for="gambar_artikel">Gambar Artikel :</label>
    <input type="file" class="form-control" name="gambar_artikel"id="gambar_artikel">
  </div>

    <div class="form-group">
    <label for="isi_artikel">Isi Artikel :</label>
    <textarea name="isi_artikel" rows="8" cols="40"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>

    @endsection

@extends('layouts.master')

@section('title', 'create banner')

@section('content')


<div class="" style="padding-top:100px">


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
  </div>

    @endsection

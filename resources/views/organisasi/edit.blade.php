@extends('layouts.master')

@section('title', 'create organisasi')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">EDIT ARTIKEL</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/organisasi/{{$organisasi->id}}" method="post" style="padding:10px; border:1px solid black">



    <div class="form-group">
    <label for="jenis_organisasi">Jenis Organisasi :</label>
    <input type="text" value="{{$organisasi->jenis_organisasi}}" class="form-control" name="jenis_organisasi"id="jenis_organisasi">
  </div>

    <div class="form-group">
    <label for="gambar_organisasi">Gambar Organisasi :</label>
    <input type="file"  class="form-control" name="gambar_organisasi"id="gambar_organisasi">
  </div>

    <div class="form-group">
    <label for="isi_organisasi">Isi Organisasi :</label>
    <textarea type="text" value="{{$organisasi->isi_organisasi}}" name="isi_organisasi" rows="5" cols="45"></textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Edit</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection
s
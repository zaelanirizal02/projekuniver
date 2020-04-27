@extends('layouts.master')

@section('title', 'create organisasi')

@section('content')


<div class="" style="padding-top:50px">


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
  </div>

    @endsection


@extends('layouts.master')

@section('title', 'edit-kegiatan')

@section('content')


<div class="" style="padding-top:50px">


<h1 class="text-center">EDIT KEGIATAN</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/kegiatan/{{$kegiatan->id}}" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">


  <div class="form-group">
    <label for="nama_kegiatan">Nama Kegiatan :</label>
    <input type="text" class="form-control" name="nama_kegiatan"id="nama_kegiatan" value="{{$kegiatan->nama_kegiatan}}">
  </div>

    <div class="form-group">
    <label for="jenis_kegiatan">Jenis Kegiatan :</label>

    <div class="row">
      <div class="col-sm-3">
        <select class="form-control" name="jenis_kegiatan"id="jenis_kegiatan">
        <option value="Harian" @if($kegiatan->jenis_kegiatan == "Harian")selected @endif>Harian</option>
        <option value="Mingguan" @if($kegiatan->jenis_kegiatan == "Mingguan")selected @endif>Mingguan</option>
        <option value="Bulanan" @if($kegiatan->jenis_kegiatan == "Bulanan")selected @endif>Bulanan</option>
        <option value="Semesteran" @if($kegiatan->jenis_kegiatan == "Semesteran")selected @endif>Semesteran</option>
        <option value="Tahunan" @if($kegiatan->jenis_kegiatan == "Tahunan")selected @endif>Tahunan</option>
        </select>
      </div>
    </div>
  </div>

    <div class="form-group">
    <label for="gambar_kegiatan">Gambar Kegiatan :</label>
    <input type="file" class="form-control" name="gambar_kegiatan"id="gambar_kegiatan">{{$kegiatan->gambar_kegiatan}}
  </div>

    <div class="form-group">
    <label for="isi_kegiatan">Isi Kegiatan :</label>
    <textarea class="ckeditor" id="isi_kegiatan" name="isi_kegiatan" rows="5" cols="45">{!!$kegiatan->isi_kegiatan!!}</textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection

@extends('layouts.master')

@section('title', 'edit-profile')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">EDIT PROFILE</h1>
<div class="container" style=" width: 700px; height:300px">
<form action="/profile/{{$profile->id}}" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">



    <div class="form-group">
    <label for="nama_profile">Nama profile :</label>
    <input type="text" class="form-control" name="nama_profile"id="nama_profile" value="{{$profile->nama_profile}}">
  </div>

  <div class="form-group">
  <label for="jenis_profile">Jenis Profile :</label>

  <div class="row">
    <div class="col-sm-3">
      <select class="form-control" name="jenis_profile"id="jenis_profile">
      <option value="Sejarah" @if($profile->jenis_profile == "Sejarah")selected @endif>Sejarah</option>
      <option value="Visi_Misi" @if($profile->jenis_profile == "Visi_Misi")selected @endif>Visi Misi</option>
      <option value="Dasar_Hukum" @if($profile->jenis_profile == "Dasar_Hukum")selected @endif>Dasar Hukum</option>
      <option value="Kurikulum" @if($profile->jenis_profile == "Kurikulum")selected @endif>Kurikulum</option>
      <option value="Sistem_Penilaian" @if($profile->jenis_profile == "Sistem_Penilaian")selected @endif>Sistem Penilaian</option>
      <option value="Tradisi" @if($profile->jenis_profile == "Tradisi")selected @endif>Tradisi</option>
      <option value="Fasilitas" @if($profile->jenis_profile == "Fasilitas")selected @endif>Fasilitas</option>

      </select>
    </div>
  </div>
</div>

    <div class="form-group">
    <label for="gambar_profile">Gambar profile :</label>
    <input type="file" class="form-control" name="gambar_profile"id="gambar_profile">{{$profile->gambar_profile}}
  </div>

    <div class="form-group">
    <label for="isi_profile">Isi profile :</label>
    <textarea class="ckeditor" id="isi_profile" name="isi_profile" rows="5" cols="45">{!!$profile->isi_profile!!}</textarea>
  </div>

        <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection

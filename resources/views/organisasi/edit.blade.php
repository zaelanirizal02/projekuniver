@extends('layouts.master')

@section('title', 'Edit Dewan')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-color:#d1d1d1">
  <div class="container">
    <h1 class="display-4 text-center pt-4 font-weight-bold">DATA DEWAN PENGURUS</h1>
      <h3 class="lead text-center font-weight-bold pt-0">Pondok Pesantren Mahasiswa Universal</h3>
  </div>
</div>

<h1 class="text-center">Edit DEWAN PENGURUS</h1>
<div class="container" style=" width: 900px; height:600px">
  <form action="/organisasi/{{$organisasi->id}}" method="post" style="padding:10px; border:1px solid black">
  <input type="hidden" name="_method" value="PUT">


  <div class="form-group row">
    <label for="jenis_organisasi" class="col-sm-3 col-form-label">Dewan</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="jenis_organisasi" id="jenis_organisasi" value="{{$organisasi->jenis_organisasi}}" >
    </div>
  </div>

  <div class="form-group row">
    <label for="isi_organisasi" class="col-sm-3 col-form-label">Deskripsi Dewan</label>
      <div class="col-sm-9">
        <textarea class="form-control" name="isi_organisasi" id="isi_organisasi" rows="5">{{ $organisasi->isi_organisasi }}</textarea>
    </div>
  </div>

  <div class="form-group row mt-4">
     <label for="organisasi_uks" class="col-sm-3 col-form-label">Upload Photo :</label>
     <div class="col-sm-9">
       <input type="file" class="form-control" name="organisasi_uks" id="organisasi_uks" style="width:300px;height:50px" value="">
  {{$organisasi->jenis_organisasi}}

     </div>
  </div>



 <button type="submit" class="btn btn-default" style="border:2px">SIMPAN</button>
{{ csrf_field() }}

</div>

   </form>

  @endsection

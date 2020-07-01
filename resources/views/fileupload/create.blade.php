@extends('layouts.master')

@section('title', 'create fileupload')

@section('content')

<div class="container-fluid" >
<div class="card border-0">
<div class="card-header border-bottom" style="background-color:white">

</div>

<div class="card-body px-5 rounded-lg" style="padding-bottom:190px">
  <form class="shadow-lg mt-3 py-2 px-3"  action="/fileupload" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama_fileupload">Nama Ebook :</label>
      <input type="text" class="form-control" name="nama_fileupload"id="nama_fileupload">
    </div>

    

   <div class="form-group" data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
      <label for="isi_fileupload">Pilih Ebook :</label>
      <input type="file" class="form-control" name="isi_fileupload"id="isi_fileupload">
    </div>

          <button type="submit" class="btn btn-primary" style="border: 2px">Upload</button>
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

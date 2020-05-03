@extends('layouts.master')

@section('title', 'universal | home')


@section('content')
<style>
#satu {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
</style>
<section id="satu" style="padding-top:50px">
  <img src="/img/header2.png" class="d-block w-100" alt="img-responsive"  width="50%">
</section>

<div class="container py-5">
  <div class="card shadow">
    <div class="row">
      <div class="col-sm-3 pr-1">


        <div class="card ml-2 mb-3 border-0">
          <div class="card-header text-center py-1 border-bottom" style="background-color:white;margin-top:50px">
            <h5>TERBARU</h5>
          </div>

          <div class="row">
            <div class="card-body">
                <a href="#">Judul 1 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
                <a href="#">Judul 2 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>

        </div>

        <div class="card ml-2 my-2 border-0">
          <div class="card-header text-center py-1 border-bottom" style="background-color:white">
            <h5>POPULER</h5>
          </div>

          <div class="row">
            <div class="card-body">
                <a href="#">Judul 1 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
                <a href="#">Judul 2 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
                <a href="#">Judul 3 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
                <a href="#">Judul 4 yang agak panjangan pokonya batas ini sekitar 80 character buat hudul</a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-sm-9 ">
        <div class="card border-0 ">
          <div class="card-header d-flex align-items-center text-center" style="background-color:white">
            <div class="container py-3 font-weight-bold text-uppercase ">
              <h3>{{$artikel->nama_artikel}}</h3>
            </div>
          </div>
          <div class="container">
            <div class="container">
                  <div class="text-center mt-5">
                    <img class="shadow" src="/img_artikel/{{$artikel->gambar_artikel}}"  style="width:50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    <p>{!!$artikel->isi_artikel!!}</p>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid pb-1">
      <a href="/blog" class="btn btn-primary btn-sm btn-block rounded-lg" style="background-color:#3282B8">Lihat lebih banyak</a>
    </div>
  </div>

</div>


<section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2020 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section>








@endsection

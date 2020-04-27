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
  <div class="card">
    <div class="jumbotron-fluid pt-2" style="background-color:white">
      <img src="/img/header3.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
    </div>

    <div class="row">
      <div class="col-sm-3 pr-1">
        <div class="card ml-2 my-2">
          <div class="container text-center py-1" style="background-color:#d1d1d1">
            <h4>TERBARU</h4>
          </div>
          <div class="row">
            <div class="col-md-4 text-center py-3">
              <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-sm-left">
                <h5 class="card-title" href="/" >Berita 1</h5>
                <p class="card-text">Isi Berita 1</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>

            <div class="col-md-4 text-center py-3">
              <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-sm-left">
                <h5 class="card-title" href="/" >Berita 1</h5>
                <p class="card-text">Isi Berita 1</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>

          </div>
        </div>
        <div class="card ml-2 my-2">
          <div class="container text-center py-1" style="background-color:#d1d1d1">
            <h4>POPULER</h4>
          </div>
          <div class="row">
            <div class="col-md-4 text-center py-3">
              <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-sm-left">
                <h5 class="card-title" href="/" >Berita 1</h5>
                <p class="card-text">Isi Berita 1</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>

            <div class="col-md-4 text-center py-3">
              <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body text-sm-left">
                <h5 class="card-title" href="/" >Berita 1</h5>
                <p class="card-text">Isi Berita 1</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div class="card my-2 mr-2">
          <div class="jumbotron d-flex align-items-center text-center" style="width:auto;height:100px;background-color:#d1d1d1">
            <div class="container ">
              <h1>{{$profile->nama_profile}}</h1>
            </div>
          </div>
          <div class="container">
            <div class="container">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}"  style="width:50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    <p>{!!$profile->isi_profile!!}</p>
                  </div>

            </div>
          </div>
        </div>
      </div>
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

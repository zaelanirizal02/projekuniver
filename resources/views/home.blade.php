@extends('layouts.master')

<style>
body {
     background: url('background.jpg');
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
  }

body {
  background: url('');
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
}

section {cara menampilkan artikel dari databa
  min-height: 420px;
}

#satu {
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
.event {
  height: 350px;
  width: 250px;
  margin-bottom: 40px;

  -webkit-transform: scale(1.08);
  transform: scale(1.08);
  background: transparent;
  color: white;
  text-shadow: 1px 2px 2px #111;
  transition: all 0.8s;
  -moz-transition: all 0.8s;
  -webkit-transition: all 0.8s;
  -ms-transition: all 0.8s;
  -o-transition: all 0.8s;
}
#social:hover{
  -webkit-transform:scale(1.1);
  -moz-transform:scale(1.1);
  -o-transform:scale(1,1);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration:0.5s;
}

#imgop {
  opacity: 0.6;
  filter: alpha(opacity=20);
  /* For IE8 and earlier */
}

.imgtrans {
  opacity: 0.3;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
.profil-gradient{
  background: linear-gradient(to bottom, #66ccff 0%, #6600ff 100%);
}

.kegiatan{

}

.waktu-slider {
  position: absolute;
  width:3900px;

  /*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
  animation-name:slider;
  animation-duration:16s;
  animation-timing-function: ease-in-out;
  animation-iteration-count:infinite;
  -webkit-animation-name:slider;
  -webkit-animation-duration:16s;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count:infinite;
  -moz-animation-name:slider;
  -moz-animation-duration:16s;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-iteration-count:infinite;
  -o-animation-name:slider;
  -o-animation-duration:16s;
  -o-animation-timing-function: ease-in-out;
  -o-animation-iteration-count:infinite;
}


</style>

@section('title', 'universal | Home')

@section('content')

<!-- Page 1 -->
<section>
  <div class="jumbotron-fluid">
    <div class="card">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner justify-content-center py-5 px-5" style="background:">
          @foreach($artikels as $i => $artikel)
          <div class="carousel-item @if($i == 0) {{ 'active' }} @endif justify-content-center">
            <a href="{{ route('link', $artikel->id) }}"><img src="img_artikel/{{$artikel->gambar_artikel}}" class="mx-auto d-block pb-5" alt="Cinque Terre"  height="400px" width="70%"></a>
            <p class="carousel-caption text-center font-weight-bold bg-dark" style="opacity: 0.8; font-size:25px">{{ str_limit($artikel->nama_artikel, 50)}}</p>
          </div>
          @endforeach
        </div>

        <div class="container">
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Page 1 -->

<!-- Page 2 -->

<section id="page2" class="kegiatan bg-dark">
  <div class="container pb-5" id="kegiatan" class="kegiatan">
    <div class="row" style="padding-top:50px; padding-bottom:50px">
      <div class="col-sm-6 rounded-lg" style="border:2px solid white ;padding-top:30px; background-color:white">
        <div class="container">
          <h2>POPULER</h2>
          <br>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs font-weight-bold" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#menuBerita">BERITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menuArtikel">ARTIKEL</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="menuBerita" class="container tab-pane active"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
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
                  </div>
                </div>
              </div>

            </div>
            <div id="menuArtikel" class="container tab-pane fade"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 text-center py-3">
                      <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body text-sm-left">
                        <h5 class="card-title" href="/" >Artikel 1</h5>
                        <p class="card-text">Isi artikel 1</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    <div class="col-sm-6">
        <div class="card py-3 px-3 rounded-lg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JxUnUo5lfmQ?rel=0" allowfullscreen></iframe>
          </div>
        </div>

        <div class="card mt-4 rounded-lg" width=15%>
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner justify-content-center pt-4" style="background:">
              @foreach($artikels as $i => $artikel)
              <div class="carousel-item @if($i == 0) {{ 'active' }} @endif justify-content-center">
                <a href="{{ route('link', $artikel->id) }}"><img src="img_artikel/{{$artikel->gambar_artikel}}" class="mx-auto d-block" alt="Cinque Terre"  height="400px" width="70%"></a>
                <p class="carousel-caption text-center font-weight-bold bg-dark" style="opacity: 0.8; font-size:25px">{{ str_limit($artikel->nama_artikel, 50)}}</p>
              </div>
              @endforeach
            </div>

            <div class="container">
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card-body  text-center">
            <a href="#" class="btn btn-primary">Lihat Profile</a>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
<!-- END Page 2 -->



<!-- Page 3 -->
<section id="page3">
  <div class="container">
    <div class="row" style="padding-top:50px; padding-bottom:50px">
      <div class="col-sm-6 rounded-lg" >
        <div class="container">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs font-weight-bold" role="tablist">
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menuDownload">DOWNLOAD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#menuPSB">PENERIMAAN SANTRI BARU</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="menuDownload" class="container tab-pane active"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 text-center py-3">
                      <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body text-sm-left">
                        <h5 class="card-title" href="/" >Download 1</h5>
                        <p class="card-text">File Download</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div id="menuPSB" class="container tab-pane fade"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 text-center py-3">
                      <img src="img/logoPPMU.png" class="card-img img-thumbnail rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body text-sm-left">
                        <h5 class="card-title" href="/" >Persyaratan</h5>
                        <p class="card-text">isi dari Persyaratan</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 rounded-lg">
        <div class="jumbotron ">
          <div class="row">

              <div class="container">
                <div class="row">
                  <div class="card-group">
                    <div class="card bg-dark text-white mx-1 mb-1 rounded-lg" href="/">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="opacity:0.5">
                          <div class="carousel-item active">
                              <img src="img/Slider1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider2.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div class="card-img-overlay">
                        <h5 class="card-title">BERITA</h5>
                      </div>
                    </div>
                    <div class="card bg-dark text-white mx-1 mb-1 rounded-lg" href="/">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="opacity:0.5">
                          <div class="carousel-item active">
                              <img src="img/Slider3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider2.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div class="card-img-overlay">
                        <h5 class="card-title">ARTIKEL</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          <div class="row">

              <div class="container">
                <div class="row">
                  <div class="card-group">
                    <div class="card bg-dark text-white mx-1 my-1 rounded-lg" href="/">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="opacity:0.5">
                          <div class="carousel-item active">
                              <img src="img/Slider2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider3.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div class="card-img-overlay">
                        <h5 class="card-title">FASILITAS</h5>
                      </div>
                    </div>
                    <div class="card bg-dark text-white mx-1 my-1 rounded-lg" href="/">
                      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="opacity:0.5">
                          <div class="carousel-item active">
                              <img src="img/Slider1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/Slider2.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>
                      <div class="card-img-overlay">
                        <h5 class="card-title">UKS</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- END page 3 -->

<!-- Page 4 kontak -->
<section id="kontak" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 rounded-lg">
        <div class="jumbotron">
          ce
        </div>
      </div>
      <div class="col-sm-6 rounded-lg">
        <div class="jumbotron">
          ce
        </div>
      </div>
    </div>
  </div>
</section>

<!-- END Page 4 kontak -->





@endsection

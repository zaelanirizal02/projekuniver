@extends('layouts.master')

<style>
body {
     background-color: white;
     background-size: cover;
     background-attachment: fixed;
     background-repeat: no-repeat;
  }


.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 80%; margin: auto;}

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
  <div class="jumbotron-fluid" style="background:#3282B8" alt="img-responsive">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner justify-content-center " style="background:">
          @foreach($artikels as $i => $artikel)
          <div class="carousel-item @if($i == 0) {{ 'active' }} @endif ">
            <a href="{{ route('link', $artikel->id) }}"><img src="img_artikel/{{$artikel->gambar_artikel}}" class="mx-auto d-block img-fluid" alt="Responsive image"  height="1080px" width="1920px"></a>
            <!-- <p class="carousel-caption text-center font-weight-bold bg-dark" style="opacity: 0.8; font-size:25px">{{ str_limit($artikel->nama_artikel, 50)}}</p> -->
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
</section>
<!-- end Page 1 -->


<!-- Page 2 -->

<section id="page2" class="kegiatan">
  <div class="container pb-5" id="kegiatan" class="kegiatan">
    <div class="row" style="padding-top:50px">
      <div class="col-sm-6 rounded-lg  img-thumbnail" style="background-color:#fffff">
        <div class="container mb-3 py-3">
          <!-- <h2>POPULER</h2> -->

          <!-- Nav tabs -->
          <ul class="nav nav-tabs font-weight-bold" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#menuBerita">BERITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menuArtikel">ARTIKEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#menuDownload">DOWNLOAD</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="menuBerita" class="container tab-pane active"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  @foreach($artikels as $i => $artikel)
                  <div class="row py-2">
                    <div class="col-md-4 text-center">
                      <a href="{{ route('link', $artikel->id) }}"><img src="img_artikel/{{$artikel->gambar_artikel}}" class="mx-auto d-block my-3 pb-4" alt="Cinque Terre" width="100%"></a>
                    </div>
                    <div class="col-md-8">
                      <div class="card">
                        <p class="card-header text-left font-weight-bold text-dark justify-content-center" style="font-size:15px">{{ str_limit($artikel->nama_artikel, 25)}}</p>
                        <!-- <div class="">
                          Disini di isi waktu
                        </div> -->
                        <div class="card-body">
                          <p class="card-text text-left text-dark justify-content-center" style="font-size:15px">{{ str_limit($artikel->isi_artikel, 30)}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>

            </div>
            <div id="menuArtikel" class="container tab-pane fade"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  @foreach($artikels as $i => $artikel)
                  <div class="row py-2">
                    <div class="col-md-4 text-center">
                      <a href="{{ route('link', $artikel->id) }}"><img src="img_artikel/{{$artikel->gambar_artikel}}" class="mx-auto d-block my-3 pb-4" alt="Cinque Terre" width="100%"></a>
                    </div>
                    <div class="col-md-8">
                      <div class="card">
                        <p class="card-header text-left font-weight-bold text-dark justify-content-center" style="font-size:15px">{{ str_limit($artikel->nama_artikel, 25)}}</p>
                        <!-- <div class="">
                          Disini di isi waktu
                        </div> -->
                        <div class="card-body">
                          <p class="card-text text-left text-dark justify-content-center" style="font-size:15px">{{ str_limit($artikel->isi_artikel, 30)}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>

            <div id="menuDownload" class="container tab-pane"><br>
              <div class="card rounded my-3" style="max-width: 500px;">
                <div class="container">
                  <div class="row py-2">
                    <div class="col-md-4 text-center">
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
          </div>
        </div>
      </div>

    <div class="col-sm-6" >
      <div class="container mb-3 py-3 px-3 rounded-lg  img-thumbnail" style="background-color:white" >
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pViPQvwXT5w" allowfullscreen></iframe>
        </div>
      </div>

        <div class="container mb-auto pt-3 px-3 rounded-lg  img-thumbnail"  style="background-color:white">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="img/Slider/Profil1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Slider/Profil2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/Slider/Profil3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
          <div class="card-body  text-center">
            <a href="/profile/home" class="btn btn-primary">Lihat Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END Page 2 -->



<!-- Page 3 -->
<section id="page3">
    <div class="container pb-5" id="kegiatan" class="kegiatan">
      <div class="row" style="padding-top:50px; padding-bottom:50px">
        <div class="col">
          <a href="/" data-toggle="tooltip" data-placement="top" title="pilih untuk melihat lebih banyak Foto">
          <div class="card card-link bg-dark text-white mx-1 mb-1 rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" style="opacity:0.5">
                <div class="carousel-item active">
                    <img src="img/Slider/Slider1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider2.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="card-img-overlay">
              <h5 class="card-title">BERITA</h5>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <a href="/" data-toggle="tooltip" data-placement="top" title="pilih untuk melihat lebih banyak Foto">
          <div class="card bg-dark text-white mx-1 mb-1 rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" style="opacity:0.5">
                <div class="carousel-item active">
                    <img src="img/Slider/Slider2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider3.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="card-img-overlay">
              <h5 class="card-title">FASILITAS</h5>
            </div>
          </div>
          </a>
        </div>
        <div class="col">
          <a href="/" data-toggle="tooltip" data-placement="top" title="pilih untuk melihat lebih banyak Foto">
          <div class="card bg-dark text-white mx-1 mb-1 rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" style="opacity:0.5">
                <div class="carousel-item active">
                    <img src="img/Slider/Slider1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/Slider/Slider2.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            <div class="card-img-overlay">
              <h5 class="card-title">UKS</h5>
            </div>
          </div>
          </a>
        </div>
    </div>
  </div>
</section>

<!-- END page 3 -->

<!-- Page 4 karya -->
  <section id="karya" style="padding-top:20px; padding-bottom:50px; background-color:#3282B8">
  <div class="jumbotron-fluid py-2">
    <div class="container text-white text-center">
      <h1 class="display-4">KARYA SANTRI</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
  </div>
  <div class="container py-auto" >
    <div class="row" style="padding-bottom:20px">
      <div class="col rounded-lg py-auto">
        <div class="card">
          <div class="embed-responsive embed-responsive-16by9 ">
            <iframe class="container pt-2 px-2 rounded-lg img-thumbnail" width="727" height="409" src="https://www.youtube.com/embed/r6JyyZapQz8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">UNIVERSAL TV</h3>
            <p class="card-text">Official Channel Pondok Pesantren Mahasiswa Universal Kota Bandung. Berisikan konten positif kegiatan dan kreasi seni santri PPMU.</p>
            <a href="https://www.youtube.com/channel/UC1jytVi48EdtvqCSpq2w9RQ" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col rounded-lg py-auto">
        <div class="card">
          <div class="embed-responsive embed-responsive-16by9 ">
            <iframe class="container pt-2 px-2 rounded-lg img-thumbnail" width="727" height="409" src="https://www.youtube.com/embed/dGCbi5gurJ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">KOPI SAJAK</h5>
            <p class="card-text">Kopi Sajak merupakan sebuah media yang menjadi jembatan perubahan dalam karya sastra di era digital. kualitas karya tersebut karena tak ada yang memfilter kualitasnya</p>
            <a href="https://www.youtube.com/channel/UCu-hcAVLMsj5vBhQLYcAEZA/featured" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
      </div>
      <!-- style="width:100px;height:100px" -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col rounded-lg pb-auto-lg">
          <div class="card"  style="background:#ffff">
            <div class="embed-responsive embed-responsive-16by9 pt-2" style="width:100%;height:100px">
              <iframe class="container py-2 px-2 rounded-lg" width="727" height="409" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/612140550&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"  allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <!-- <h5 class="card-title">KOPI SAJAK</h3> -->
              <p class="card-text">Kopi Sajak merupakan sebuah media yang menjadi jembatan perubahan dalam karya sastra di era digital. kualitas karya tersebut karena tak ada yang memfilter kualitasnya</p>
              <a href="https://www.youtube.com/channel/UCu-hcAVLMsj5vBhQLYcAEZA/featured" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- END Page 4 karya -->

<!-- Page 4 kontak -->
<section class="kontak" style="background:#1B2626">
  <div class="container py-3" >
    <div class="row">
      <div class="col">
        <div class="row mx-sm-n2">
          <div class="col px-sm-1">
            <a href="https://www.instagram.com/mahad_universal/" target="_blank">
              <img class="card-img rounded-circle mx-auto d-block my-4" border="0" title="Facebook" src="img/IG.png" style="width:50px;height:50px">
            </a>
          </div>
          <div class="col px-sm-1">
            <a href="https://web.facebook.com/medkominfoppmu?fref=ts" target="_blank">
              <img class="card-img rounded-circle mx-auto d-block my-4" border="0" title="Facebook" src="img/FB.png" style="width:50px;height:50px">
            </a>
          </div>
          <div class="col px-sm-1">
            <a href="https://www.youtube.com/channel/UC1jytVi48EdtvqCSpq2w9RQ" target="_blank">
              <img class="card-img rounded-circle mx-auto d-block my-4" border="0" title="Facebook" src="img/YT.png" style="width:50px;height:50px">
            </a>
          </div>
        </div>
        <div class="row text-white px-auto">
          <p><h3>Pondok Pesantren Mahasiswa Universal</h3></p>


          <br>
          Jl. Desa Cipadung No. 1 RT 03/08, kelurahan Cipadung, kec. Cibiru, kota Bandung (depan MAN 2 kota Bandung) kode pos 40614
          <br>
          Akta Notaris
          No. 25 Tanggal 08-09-2010
          S.K. MENKUMHAM Republik Indonesia

          Nomor AHU-4556.AH.01.04 Tahun 2010
          Nomor Statistik Pondok Pesantren: 5100.32.73.0145
        </div>
      </div>
      <div class="col">
        <div class="card bg-light py-2 px-2">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.6326572128653!2d107.71690814821244!3d-6.9275231712967145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fe7e4c1655190da!2sPondok%20Pesantren%20Mahasiswa%20Universal!5e0!3m2!1sen!2sid!4v1575960085872!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2019 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section>
<!-- END Page 4 kontak -->





@endsection

@extends('layouts.master')
@section('tittle', 'Galeri PPMU')

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
    <div class="jumbotron-fluid pt-2" style="background-color:white">
      <img src="/img/galerihome.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
    </div>
    <div class="container">
      <div class="card mx-2 my-2 border-0">
      <div class="row py-3 px-2">
          <div class="col-3 ">
            <div class="card-header" style="background-color:white">
              <h4>BERITA</h4>
            </div>
          </div>
          <div class="col-9  border-bottom">
            <div class="card-deck">
              @foreach($artikels2 as $artikel)
                  <div class="card-body border-0 mb-3"style="background-color:white">
                    <a href="#{{$artikel->id}}"  data-toggle="modal" data-target="#{{$artikel->id}}" style="width:200px; height:200px">
                       <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                    </a>
                  </div>
                  <!-- MODAL -->
                  <div class="modal fade" id="{{$artikel->id}}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="show_image">
                            <a href="">
                              <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:100%">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                  </button> -->

                  <!-- Modal -->
                  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div> -->

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="card mx-2 my-2 border-0">
    <div class="row py-3 px-2">
        <div class="col-3 ">
          <div class="card-header" style="background-color:white">
            <h4>Fasilitas</h4>
          </div>
        </div>
        <div class="col-9  border-bottom">
          <div class="card-deck">
          @foreach($fasilitass as $i => $galeri)

                <div class="card-body border-0 mb-3"  style="background-color:white">
                  <a href="#{{$galeri->id}}" data-toggle="modal" data-target="#{{$galeri->id}}" style="width:200px; height:200px">
                     <img class="shadow " src="/img_galeri/{{$galeri->gambar_galeri}}" alt="Snow" style="width:200px;height:200px">
                  </a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="{{$galeri->id}}">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="show_image">
                          <a href="">
                            <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:100%">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

          @endforeach
          </div>
        </div>
    </div>
    </div>
    <div class="card mx-2 my-2 border-0">
    <div class="row py-3 px-2">
        <div class="col-3 ">
          <div class="card-header" style="background-color:white">
            <h4>UNIT KEGIATAN</h4>
          </div>
        </div>
        <div class="col-9  border-bottom">
          <div class="card-deck">
          @foreach($ukegiatans as $i => $galeri)

                <div class="card-body border-0 mb-3"  style="background-color:white">
                  <a href="{{ route('link', $galeri->id) }}" style="width:200px; height:200px">
                     <img class="shadow " src="/img_galeri/{{$galeri->gambar_galeri}}" alt="Snow" style="width:200px;height:200px">
                  </a>
                </div>

          @endforeach
          </div>
        </div>
    </div>
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

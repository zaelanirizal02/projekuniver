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
    <div class="card mx-2 my-2 border-0">
    <div class="row py-3 px-2">
        <div class="col-3 ">
          <div class="card-header" style="background-color:white">
            <h4>BERITA</h4>
          </div>
        </div>
        <div class="col-9  border-bottom">
          @foreach($artikels as $i => $artikel)
            <div class="row">
                <div class="card-header border-0 mb-3"  style="background-color:white">
                  <a href="{{ route('link', $artikel->id) }}" style="width:200px; height:200px">
                     <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                  </a>
                </div>
            </div>
          @endforeach
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
          @foreach($artikels as $i => $artikel)
            <div class="row">
                <div class="card-header border-0 mb-3"  style="background-color:white">
                  <a href="{{ route('link', $artikel->id) }}" style="width:200px; height:200px">
                     <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                  </a>
                </div>
            </div>
          @endforeach
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
          @foreach($artikels as $i => $artikel)
            <div class="row">
                <div class="card-header border-0 mb-3"  style="background-color:white">
                  <a href="{{ route('link', $artikel->id) }}" style="width:200px; height:200px">
                     <img class="shadow " src="/img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                  </a>
                </div>
            </div>
          @endforeach
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



<div class="container">
  <div class="row" style="padding-top:50px">

    @foreach($artikels as $i => $artikel)
    <div class="col">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class=""><a href="{{$artikel->id}}" data-toggle="modal" >
            <img src="/img_artikel/{{$artikel->gambar_artikel}}" style="width:20%"</a>
          </div>
        </div>
      </div>
    </div>

    <!-- modal -->
    <div class="modal fade" id="{{$artikel->id}}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!-- Modal Header -->
          <!-- <div class="modal-header">
          <h4 class="modal-title">{{$artikel->nama_artikel}}</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->
        <div class="modal-body">
          <img src="/img_artikel/{{$artikel->gambar_artikel}}" style="width:20%"</a>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="myModal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>


@endsection

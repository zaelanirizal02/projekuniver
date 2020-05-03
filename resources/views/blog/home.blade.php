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
    <div class="jumbotron-fluid py-2" style="background-color:white">
        <img src="/img/artikelhome.png" class="d-block w-100 px-2" alt="img-responsive" width="50%">
    </div>

    <div class="card-body pt-0" style="padding-bottom:70px">
      <div class="accordion" id="accordionExample">
        <div class="row text-center">
          <div class="col-sm">
            <div class="card mt-2">
              <div class="card shadow" id="headingOne">
                  <button class="btn btn-link py-2 img-thumbnail border-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#f7f7f7">
                    <h5 class="mb-0">ARTIKEL</h5>
                  </button>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card mt-2">
              <div class="card shadow" id="headingOne">
                  <button class="btn btn-link py-2 img-thumbnail border-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="background-color:#f7f7f7">
                    <h5 class="mb-0">BERITA</h5>
                  </button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="card border-0">


          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="d-flex justify-content-center">
              @foreach($artikels2 as $artikel)
                <div class="row px-2">
                  <div class="container">
                    <a href="{{ route('link', $artikel->id) }}" style="width:200px; height:200px">
                      <div class="card border-0 shadow mt-3">
                       <img src="img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                        <div class="card-header text-uppercase font-weight-bold" style="background-color:white;font-size:12px">
                           {{ str_limit($artikel->nama_artikel, 50)}}
                         </div>
                      </div>
                    </a>
                    </div>
                </div>
              @endforeach
            </div>
            <div class="card-footer pb-2" style="margin-top:100px">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
          <div class="col-sm">
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="container">
                      @foreach($beritas as $artikel)
                         <a href="{{ route('link', $artikel->id) }}" style="width:200px; height:200px;border:1px transparent black;float:left;margin:20px">
                           <img src="img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px; height:200px">
                           <div class=""style="margin">
                             {{$artikel->nama_artikel}}
                           </div>
                         </a>
                      @endforeach
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

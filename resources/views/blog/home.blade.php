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

    <div class="card-body pt-1">
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

        <div class="card border-0">
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-deck pt-4 justify-content-center">
              @foreach($artikels2 as $artikel)
                <a href="{{ route('link', $artikel->id) }}">
                    <img class="card-img-top shadow-sm" src="img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                    <div class="card-body px-1 mx-2 mb-3 border-bottom"  style="width:200px; height:200px">
                      <div class="card-title text-uppercase font-weight-bold" style="background-color:white;font-size:12px">
                         {{ str_limit($artikel->nama_artikel, 70)}}
                       </div>
                       <span class="card-text text-left text-dark font-italic" style="font-size:12px">
                         <p >{!! str_limit($artikel->isi_artikel, 80)!!}</p>
                        </span>
                      </div>
                </a>
              @endforeach
              <div class="container pt-0 mb-0" style="margin-top:100px">
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


          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-deck pt-4 justify-content-center">
              @foreach($beritas as $artikel)

                <a href="{{ route('link', $artikel->id) }}">
                    <img class="card-img-top" src="img_artikel/{{$artikel->gambar_artikel}}" alt="Snow" style="width:200px;height:200px">
                    <div class="card-body px-1 mx-2 pb-1 border-bottom"  style="width:200px; height:200px">
                      <div class="card-title text-uppercase font-weight-bold" style="background-color:white;font-size:12px">
                         {{ str_limit($artikel->nama_artikel, 70)}}
                       </div>
                       <span class="card-text text-left text-dark font-italic" style="font-size:12px">
                         <p >{!! str_limit($artikel->isi_artikel, 80)!!}</p>
                        </span>

                      </div>
                </a>
              @endforeach
              <div class="container pt-0 mb-0" style="margin-top:100px">
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

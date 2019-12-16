@extends('layouts.master')

@section('title', 'universal | home')


@section('content')
<div class="container">
  <div class="card">
    <div class="jumbotron jumbotron-fluid py-4">
      <div class="container text-center">
        <img src="/img/logoPPMU.png" class="rounded-circle img-thumbnail" alt="" width="15%">
      </div>
    </div>

    <div class="card-body py-0">
      <div class="accordion" id="accordionExample">
        <div class="row text-center pb-3">
          <div class="col-sm">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ARTIKEL
                  </button>
                </h2>
              </div>

            </div>
          </div>
          <div class="col-sm">
            <div class="col-sm">
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      BERITA
                    </button>
                  </h2>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <div class="container text-center">
                  @foreach($artikels as $artikel)
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
          <div class="col-sm">
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="container">
                      @foreach($artikels as $artikel)
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

<div class="container pt-5 mt-5">

</div>






@endsection

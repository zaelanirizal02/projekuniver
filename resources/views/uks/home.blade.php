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
  <div class="jumbotron-fluid py-2" style="background-color:white">
    <img src="/img/header3.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
  </div>

  <div class="accordion" id="accordionExample">
    <div class="row pt-1">
      <div class="col-sm-3">
        {{! $i = 1 }}
        @foreach($ukss as $uks)
        <div class="col pb-2 ">
          <div class="card text-center" id="headingOne" style="margin-top:2px;margin-bottom:2px;background-color:#f7f7f7">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                  {{$uks->nama_uks}}
                </button>
          </div>
        </div>
        {{! $i++ }}
        @endforeach
      </div>

      <div class="col-sm-9">
        {{! $i = 1 }}
        @foreach($ukss as $uks)
        <div id="collapse{{$i}}" class="collapse {{ 1==$i ? 'show' : '' }}" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="col pr-3">
            <div class="card-header text-center">
                  <h1 class="text-uppercase font-weight-bold">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2 pb-4">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="90%">
                </div>

                <div class="text py-4 mx-2" style="border-box">
                      <h6>{{$uks->isi_uks}}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{! $i++ }}
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


<div class="container" style="padding-top:100px">
<h1> Data UKS yang terdaftar</h1>

@foreach($ukss as $uks)
<br>

<li>
   <a href="{{ route('link', $uks->id) }}">{{$uks->nama_uks}}</a>

</li>
@endforeach
</div>

@endsection

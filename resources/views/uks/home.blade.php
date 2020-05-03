@extends('layouts.master')

@section('title', 'universal | home | Kegiatan')




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
<section>
<div class="container py-5">
  <div class="card shadow">
  <div class="jumbotron-fluid py-2" style="background-color:white">
    <img src="/img/ukshome.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
    <div class="container text-black text-center">
  </div>
  </div>

  <div class="accordion" id="accordionExample">
    <div class="row">
      <div class="col-sm-3 pl-4">


        <div class="col pt-4 pb-2 ">
          <div class="card text-center shadow" id="headingOne" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6>HADROH</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingTwo"  style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <h6>NASYID</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingThree" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <h6>MARAWIS</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingFour" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  <h6>AVICENA</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingFive" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  <h6>SEBLAQ BASHO</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingSix" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  <h6>TRADISI</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingSeven" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  <h6>TUKANG PELM</h6>
                </button>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        @foreach($hadrohs as $i => $uks)
        <div class="col py-4 pr-4">
          <div class="card-header" style="background-color:white">
              <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="col-sm">
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          @foreach($nasyids as $i => $uks)
          <div class="col py-4 pr-4">
            <div class="card-header" style="background-color:white">
                <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>





              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            @foreach($marawiss as $i => $uks)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>





              </div>
            </div>
          </div>
          @endforeach
        </div>
        </div>
        <div class="col-sm">
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            @foreach($avicenas as $i => $uks)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>





              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
             @foreach($seblaks as $i => $uks)
             <div class="col py-4 pr-4">
               <div class="card-header" style="background-color:white">
                   <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>





              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            @foreach($tradisis as $i => $uks)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>





              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            @foreach($tukangs as $i => $uks)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$uks->nama_uks}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_uks/{{$uks->gambar_uks}}" alt="" width="50%">
                </div>
                <div  class="text py-3 my-2 mx-2" style="border-box">
                  {!!$uks->isi_uks!!}
                </div>



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




@endsection

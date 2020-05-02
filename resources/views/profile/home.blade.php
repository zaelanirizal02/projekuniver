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
    <img src="/img/profilehome.png" class="d-block w-100 px-2" alt="img-responsive" width="50%">
  </div>

  <div class="accordion" id="accordionExample">
    <div class="row">
      <div class="col-sm-3 pl-4">
        <div class="col pt-4 pb-2 ">
          <div class="card text-center shadow" id="headingOne" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6>SEJARAH</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingTwo"  style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <h6>VISI MISI</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingThree" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <h6>DASAR HUKUM</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingFour" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  <h6>KURIKULUM</h6>
                </button>
          </div>
        </div>
        <div class="col py-2">
          <div class="card text-center shadow" id="headingFive" style="margin-top:5px;margin-bottom:5px;background-color:#f7f7f7">
                <button class="btn btn-link mt-1 shadow-sm" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  <h6>SISTEM PENILAIAN</h6>
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
                  <h6>FASILITAS</h6>
                </button>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          @foreach($sejarahs as $i => $profile)
          <div class="col py-4 pr-4">
            <div class="card-header" style="background-color:white">
                <h1 class="text-center">{{$profile->nama_profile}}</h1>
              <div class="card-body">
                <div class="text-center mx-2">
                  <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                </div>
                <div class="text py-3 my-2 mx-2" style="border-box">
                  {!!$profile->isi_profile!!}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            @foreach($visimisis as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            @foreach($dasarhukums as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            @foreach($kurikulums as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            @foreach($sistempenilaians as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="col-sm">
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            @foreach($tradisis as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="col-sm">
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            @foreach($fasilitass as $i => $profile)
            <div class="col py-4 pr-4">
              <div class="card-header" style="background-color:white">
                  <h1 class="text-center">{{$profile->nama_profile}}</h1>
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img_profile/{{$profile->gambar_profile}}" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                    {!!$profile->isi_profile!!}
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

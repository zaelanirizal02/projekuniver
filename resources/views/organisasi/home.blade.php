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
    <div class="jumbotron-fluid pt-2" style="background-color:white">
      <img src="/img/organisasihome.png" class="d-block w-100 px-2" alt="img-responsive"  width="50%">
    </div>
    <div class="card-body py-0">
      <div class="accordion" id="accordionExample">
        <div class="row text-center">
          <div class="col-sm">
            <div class="card mt-3">
              <div class="card shadow" id="headingOne">
                  <button class="btn btn-link py-2 img-thumbnail border-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color:#f7f7f7">
                    <h5 class="mb-0">DEWAN PENGASUH</h5>
                  </button>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="card mt-3">
              <div class="card shadow" id="headingOne">
                  <button class="btn btn-link py-2 img-thumbnail border-0" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="background-color:#f7f7f7">
                    <h5 class="mb-0">DEWAN SANTRI</h5>
                  </button>
              </div>
            </div>
          </div>
        </div>

        <div class="row py-1">
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="col py-4 pr-3">
              <div class="card-header text-center shadow">
                    Dewan Pengasuh
                <div class="card-body">
                  <div class="text-center mx-2">
                    <img src="/img/Slider/Slider1.jpg" alt="" width="50%">
                  </div>
                  <div class="text py-3 my-2 mx-2" style="border-box">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="col py-4 pr-3">
                <div class="card-header text-center shadow">
                      Dewan Santri
                  <div class="card-body">
                    <div class="text-center mx-2">
                      <img src="/img/Slider/Slider2.jpg" alt="" width="50%">
                    </div>
                    <div class="text py-3 my-2 mx-2" style="border-box">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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

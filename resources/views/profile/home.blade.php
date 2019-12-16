@extends('layouts.master')

@section('title', 'universal | home')


@section('content')
<div class="container">
  <div class="accordion" id="accordionExample">
    <div class="row">
      <div class="col-sm-3">
        <div class="col pt-4 pb-2">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="my-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Dewan Pengasuh
                </button>
              </h2>
            </div>
          </div>
        </div>
        <div class="col py-2">
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="my-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Dewan Santri
                </button>
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-9">
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">

          </div>
        </div>
        <div class="col-sm">
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              akjdakjkajdadkjkl jnkn
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@endsection

@extends('layouts.master')
@section('tittle', 'Galeri PPMU')

@section('content')

<div class="container">
  <div class="row" style="padding-top:50px">

    @foreach($artikels as $i => $artikel)
    <div class="col">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class=""><a href="{{$artikel->id}}" data-toggle="modal" >
            <img src="/img_artikel/{{$artikel->gambar_artikel}}" style="width:100%; height:100px"</a>
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
          <img src="/img_artikel/{{$artikel->gambar_artikel}}" style="width:100%; height:100px"</a>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="myModal">Close</button>
        </div>
      </div>
    </div>
  </div>

  @endforeach
</div>

@endsection

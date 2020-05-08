@extends('layout_dashboard.admin')

@section('title')
Universal | Ganti Banner
@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="card my-3 mx-0 shadow">
    <div class="card-header">
      <h1 class="text-center font-weight-bold">BANNER DEPAN</h1>
    </div>
    <div class="card-body">
      <div class="container"style="">
        <div class="row">
          <div class="col-7">
            <a href="/banner/create" class="btn btn-sm btn-primary">CREATE</a>
          </div>
          <div class="col-1">

          </div>
          <div class="col-1 text-right">

          </div>
          <div class="col-3 text-right">

          </div>

        </div>

        <table class="table table-striped table-bordered mt-3">
        <thead class="warning">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($banners as $banner)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('linkbanner', $banner->id) }}">{{$banner->nama_banner}}</a>
            </td>
            <td>  <div class="container text-center">
                 <a href="{{ route('linkbanner', $banner->id) }}" style="width:200px; height:200px;border:1px transparent black;float:left;margin:20px">
                   <img src="img_banner/{{$banner->gambar_banner}}" alt="" style="width:200px">
                   <div class=""style="margin">
                   </div>
                 </a>

              </div></td>
             <td>
              <form style="float:left" action="/banner/{{$banner->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}
            </form>
            </td>


          </tr>

            @endforeach
        </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>




@endsection

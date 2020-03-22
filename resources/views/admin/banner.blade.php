@extends('layout_dashboard.admin')

@section('title')
Universal | Ganti Banner
@endsection

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">

    <div class="card-body">
      <div class="container"style="">
      <h1 class="display-5 text-center pt-1 font-weight-bold">BANNER</h1>
        <hr>

        <a href="/banner/create" class="btn btn-info">Create</a>

        <table class="table table-striped table-bordered">
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
                   <img src="img_banner/{{$banner->gambar_banner}}" alt="" style="width:200px; height:200px">
                   <div class=""style="margin">
                   </div>
                 </a>
            
              </div></td>
             <td>
              <form style="float:left" action="/banner/{{$banner->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditbanner', $banner->id) }}">GANTI</a>
            </td>


          </tr>

            @endforeach
        </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>




@endsection

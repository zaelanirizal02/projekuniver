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
            <td>{{$banner->gambar_banner}}</td>
             <td>
              <form style="float:left" action="/blog/{{$banner->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditbanner', $banner->id) }}">Edit</a>
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

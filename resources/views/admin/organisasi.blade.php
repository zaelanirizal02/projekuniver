@extends('layout_dashboard.admin')

@section('content')

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-body">
      <div class="container"style="padding-top:px">
        <h1 class="display-5 text-center pt-1 font-weight-bold">DAFTAR ORGANISASI</h1
        <hr>

        <a href="/organisasi/create" class="btn btn-info">Create</a>

        <table class="table table-striped table-bordered">
        <thead class="warning">
          <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Gambar</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($organisasis as $organisasi)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('linkorganisasi', $organisasi->id) }}">{{$organisasi->jenis_organisasi}}</a>
            </td>
            <td>{{$organisasi->gambar_organisasi}}</td>
             <td>
              <form style="float:left" action="/organisasi/{{$organisasi->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditorganisasi', $organisasi->id) }}">Edit</a>
            </td>


          </tr>

            @endforeach
        </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <!-- Footer -->
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

@endsection

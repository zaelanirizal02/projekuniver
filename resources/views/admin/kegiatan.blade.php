

@extends('layout_dashboard.admin')

@section('content')

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <!-- <div class="card-header">

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div> -->
    <div class="card-body">
      <div class="container"style="padding-top:px">
  <h1 class="display-5 text-center pt-1 font-weight-bold">GALERI</h1>
        <hr>

        <a href="/kegiatan/create" class="btn btn-info">Create</a>

        <table class="table table-striped table-bordered">
        <thead class="warning">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>jenis</th>
            <th>Gambar</th>
            <th>keterangan</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($kegiatans as $kegiatan)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('linkkegiatan', $kegiatan->id) }}">{{$kegiatan->nama_kegiatan}}</a></td>
            <td>{{$kegiatan->jenis_kegiatan}}</td>
            <td>{{$kegiatan->gambar_kegiatan}}</td>
            <td>{{$kegiatan->keterangan_kegiatan}}</td>
             <td>
              <form style="float:left" action="/kegiatan/{{$kegiatan->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditkegiatan', $kegiatan->id) }}">Edit</a>
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
<!-- /.content -->

@endsection

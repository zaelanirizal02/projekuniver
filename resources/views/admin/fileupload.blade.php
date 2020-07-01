@extends('layout_dashboard.admin')

@section('title')
Universal | File Ebook
@endsection

@section('content')

<!-- Main content -->
<section class="content">
  <div class="card my-3 mx-0 shadow">
    <div class="card-header">
      <h1 class="text-center font-weight-bold">UPLOAD BUKU</h1>
    </div>
    <div class="card-body">
      <div class="container"style="">
        <div class="row">
          <div class="col-7">
            <a href="/fileupload/create" class="btn btn-sm btn-primary">UPLOAD</a>
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
            <th>File</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($fileuploads as $fileupload)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('downloadfile', $fileupload->id) }}">{{$fileupload->nama_fileupload}}</a>
            </td>
            <td>{{$fileupload->isi_fileupload}}</td>
             <td>
              <form style="float:left" action="/fileupload/{{$fileupload->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="DELETE">
              <input type="hidden" name="_method" value="DELETE">
              <a href="{{ route('downloadfile', $fileupload->id) }}" class="btn btn-primary">Download</a>
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

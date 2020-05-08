@extends('layout_dashboard.admin')

@section('title')
Universal | Data Artikel
@endsection

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
<div class="card my-3 mx-0 shadow">
  <div class="card-header">
    <h1 class="text-center font-weight-bold">DAFTAR ARTIKEL</h1>
  </div>
  <div class="card-body">
      <div class="container"style="">
        <div class="row">
          <div class="col-7">
            <a href="/blog/create" class="btn btn-sm btn-primary">CREATE</a>
          </div>
          <div class="col-1">

          </div>
          <div class="col-1 text-right">
            <div class="form-group">
              <!-- <label for="sel1">Select list:</label> -->
              <select class="form-control-sm" id="sel1">
              @foreach ($jenis_artikel as $jenis)
                <option value="">{{$jenis->jenis_artikel}}</option>
              @endforeach
              </select>
            </div>
          </div>
          <div class="col-3 text-right">
            <form action="/dashboard/artikel" method="GET">
              <input type="text" name="query" placeholder=" Judul artikel/berita" value="{{ old('cari') }}">
              <input type="submit" value="CARI">
            </form>
          </div>

        </div>






        <table class="table table-striped table-bordered table">
        <thead class="warning">
          <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th  >Jenis</th>
            <!-- <th>Gambar</th> -->
            <th >action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($artikels as $artikel)
          <tr>
            <td class="text-center">{{$no++}}</td>
            <td><a href="{{ route('linkartikel', $artikel->id) }}">{!! str_limit($artikel->nama_artikel, 110)!!}</a></td>
            <td class="text-center">{{$artikel->jenis_artikel}}</td>
            <!-- <td>{{$artikel->gambar_artikel}}</td> -->
             <td class="text-center">
              <form style="float:left" action="/blog/{{$artikel->id}}" method="post">
              <input class="btn btn-sm btn-danger" type="submit" name="submit" value="DELETE">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

              </form>

              <span style="padding:5px"> </span>
              <a class="btn btn-sm btn-success" href="{{ route('ngeditartikel', $artikel->id) }}">Edit</a>
              </td>


          </tr>

            @endforeach
        </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>




@endsection

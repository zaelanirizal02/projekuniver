@extends('layout_dashboard.admin')

@section('title')
Universal | Data Artikel
@endsection

@section('content')

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">

    <div class="card-body">
      <div class="container"style="">
      <h1 class="display-5 text-center pt-1 font-weight-bold">DAFTAR ARTIKEL</h1>
        <hr>

        <a href="/blog/create" class="btn btn-info">Create</a>
        <p>Cari Berdasarkan Jenis :</p>
<form action="/dashboard/artikel" method="GET">
  <input type="text" name="query" placeholder="cari artikel .." value="{{ old('cari') }}">
  <input type="submit" value="CARI">
</form>

<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1">
  @foreach ($jenis_artikel as $jenis)
    <option value="">{{$jenis->jenis_artikel}}</option>
  @endforeach
  </select>
</div>

        <table class="table table-striped table-bordered">
        <thead class="warning">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th >Jenis Artikel</th>
            <th>Gambar</th>
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($artikels as $artikel)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('linkartikel', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
            </td>
            <td>{{$artikel->jenis_artikel}}</td>
            <td>{{$artikel->gambar_artikel}}</td>
             <td>
              <form style="float:left" action="/blog/{{$artikel->id}}" method="post">
              <input class="btn btn-danger" type="submit" name="submit" value="delete">
              <input type="hidden" name="_method" value="DELETE">
              {{ csrf_field() }}

            </form>

            <span style="padding:5px">|</span>
            <a class="btn btn-success" href="{{ route('ngeditartikel', $artikel->id) }}">Edit</a>
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

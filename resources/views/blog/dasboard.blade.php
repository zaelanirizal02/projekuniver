@extends('layouts.master')

@section('title')
Universal | data artikel
@endsection

@section('content')
<div class="container"style="padding-top:100px">
  <h1 class="text-center">Daftar Artikel</h1
  <hr>

  <a href="/blog/create" class="btn btn-info">Create</a>

  <table class="table table-striped table-bordered">
  <thead class="warning">
    <tr>
      <th>Nama</th>
      <th>Nama</th>
      <th>Jenis</th>
      <th>Gambar</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    {{!$no=1}}
    @foreach($artikels as $artikel)
    <tr>
      <td>{{$no++}}</td>
      <td><a href="{{ route('link', $artikel->id) }}">{{$artikel->nama_artikel}}</a>
      </td>
      <td>{{$artikel->jenis_artikel}}</td>
      <td>{{$artikel->gambar_artikel}}</td>
       <td>
        <form style="float:left" action="/artikel/{{$artikel->id}}" method="post">
        <input class="btn btn-danger" type="submit" name="submit" value="delete">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

      </form>

      <span style="padding:5px">|</span>
      <a class="btn btn-success" href="{{ route('ngedit', $artikel->id) }}">Edit</a>
      </td>


    </tr>

      @endforeach
  </tbody>
  </table>
</div>




@endsection

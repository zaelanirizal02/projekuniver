

@extends('layout_dashboard.admin')

@section('content')

<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
  <div class="card my-3 mx-0 shadow">
    <div class="card-header">
      <h1 class="text-center font-weight-bold">DATA PROFIL</h1>
    </div>
    <div class="card-body">
      <div class="container"style="padding-top:px">
        <div class="row">
          <div class="col-7">
            <a href="/profile/create" class="btn btn-sm btn-primary">CREATE</a>
          </div>
          <div class="col-1">

          </div>
          <div class="col-1 text-right">

          </div>
          <div class="col-3 text-right">

          </div>

        </div>





        <table class="table table-striped table-bordered table mt-3">
        <thead class="warning">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Isi</th>
              <!-- <th>Gambar</th> -->
            <th>action</th>
          </tr>
        </thead>
        <tbody>
          {{!$no=1}}
          @foreach($profiles as $profile)
          <tr>
            <td>{{$no++}}</td>
            <td><a href="{{ route('linkprofile', $profile->id) }}">{{$profile->nama_profile}}</a></td>
            <td>{{$profile->jenis_profile}}</td>
            <td>{!! str_limit($profile->isi_profile, 70)!!}</td>

            <!-- <td>{{$profile->gambar_profile}}</td> -->


            <td>
            <form style="float:left" action="/profile/{{$profile->id}}" method="post">
            <input class="btn btn-sm btn-danger" type="submit" name="submit" value="DELETE">
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}

            </form>
            <span style="padding:5px">|</span>
            <a class="btn btn-sm btn-success" href="{{ route('ngeditprofile', $profile->id) }}">Edit</a>
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
<!-- /.content -->

@endsection

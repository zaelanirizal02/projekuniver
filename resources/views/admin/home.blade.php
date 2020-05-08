@extends('layout_dashboard.admin')

@section('title')
Universal | Data Artikel
@endsection

@section('content')

<section>
  <div class="container" style="padding-top:60px;padding-bottom:50px">
    <div class="card shadow" style="margin-left:60px;margin-right:60px">
      <div class="jumbotron-fluid text-center">
        <img src="/img/logoPPMU.png" alt="img-responsive" height="200px" style="margin-top:30px">
        <div class="card-header mt-3">
          <h5 class="font-weight-bold">Assalamu'alikum Warahmatullahi Wabarakatuh</h5>
        </div>
        <div class="card-body">
          Selamat datang pada halaman dashboard
        </div>
        <div class="card-footer border-top">
          <a href="/register" class="card-link mx-5">Daftar admin</a>
          <a href="#" class="card-link mx-5">Lupa Password</a>
        </div>

      </div>
    </div>
  </div>
</section>



@endsection

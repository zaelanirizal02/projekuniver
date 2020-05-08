@extends('layouts.master')

@section('title', 'Pendaftaran Santri')

@section('content')

<div class="card">

    <div class="card-header">
      <h4 class="display-4 text-center pt-1 font-weight-bold">INPUT DATA SANTRI</h4>
        <h5 class="lead text-center font-weight-bold pt-0">Pondok Pesantren Mahasiswa Universal</h5>
    </div>

<div class="card-body">

<div class="container border-0" style=" width: 1000px">
<form action="/santri" method="post" enctype="multipart/form-data">
<div class="card rounded-lg shadow">
<div class="card-header text-center mb-3 pt-3 font-weight-bold border-bottom">
  DATA PRIBADI
</div>
<div class="card-body">


  <div class="form-group row  mb-3">
    <label for="nis_santri" class="col-sm-3 col-form-label">NIS </label>
      <div class="col-sm-9">
        <input type="number" class="form-control" name="nis_santri" id="nis_santri">
      </div>
  </div>

  <div class="form-group row">
    <label for="nama_santri" class="col-sm-3 col-form-label">Nama Lengkap</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="nama_santri" id="nama_santri">
    </div>
  </div>
  <div class="form-group row">
    <label for="panggilan_santri" class="col-sm-3 col-form-label">Nama Panggilan</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="panggilan_santri"id="panggilan_santri">
      </div>
  </div>
  <div class="form-row mb-2">
    <label class="col-form-label col-sm-3 pt-0">Jenis Kelamin</label>
    <div class="col-sm-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk_santri" id="jk_santri" value="laki" checked>
          Laki-laki
      </div>
      </div>
      <div class="col-sm-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk_santri" id="jk_santri" value="Perempuan">
          Perempuan
      </div>
    </div>
  </div>

<!-- ganti sama tempatlahir_santri -->

<div class="form-group row">
    <label for="panggilan_santri" class="col-sm-3 col-form-label">Tempat Tanggal Lahir</label>
      <div class="col mr-2">
        <input type="text" class="form-control" name="tempatlahir_santri" id="tempatlahir_santri" style="width:350px" placeholder="Kota/kabupaten">
      </div>
      <div class="col ml-2">
        <input type="date" class="form-control" name="ttl_santri" id="ttl_santri" style="width:200px">
      </div>
</div>

<!-- ganti sama tempatlahir_santri -->

<!-- ganti kecamatan kota -->
  <div class="form-group">
    <div class="row">
      <div class="col">
        <label for="alamat_santri">Alamat</label>
      </div>
      <div class="col-sm-6">
        <label for="alamat_santri">Kecamatan</label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <textarea class="form-control" name="alamat_santri" id="alamat_santri" rows="5"></textarea>
      </div>
    <div class="col-sm-6">
        <div class="form-group">
          <input type="text" class="form-control" name="kecamatan_santri" id="kecamatan_santri" style="width:300px">
        </div>
        <div class="form-group">
          <label for="telepon_santri">Kota / Kabupaten </label>
          <input type="text" class="form-control" name="kota_santri" id="kota_santri" style="width:300px">
        </div>
    </div>
      </div>
  </div>
<!-- ganti kecamatan kota -->
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="telepon_santri">Nomor Telepom :</label>
    </div>
    <div class="col">
      <label for="hp_santri">Nomor HP :</label>
    </div>
    <div class="col">
      <label for="email_santri">Email :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="number" class="form-control" name="telepon_santri" id="telepon_santri">
    </div>
    <div class="col">
      <input type="number" class="form-control" name="hp_santri"id="hp_santri">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email_santri"id="email_santri">
    </div>
  </div>
</div>
</div>
</div>

<!-- DATA ORANGTUA -->
<div class="card mt-5 shadow">
<div class="card-header text-center mb-3 font-weight-bold">
  DATA ORANG TUA
</div>
<div class="card-body">
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="namaayah_santri">Nama Ayah :</label>
    </div>
    <div class="col">
      <label for="pekerjaanayah_santri">Pekerjaan Ayah :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="namaayah_santri"id="namaayah_santri">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="pekerjaanayah_santri"id="pekerjaanayah_santri">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="namaibu_santri">Nama Ibu :</label>
    </div>
    <div class="col">
      <label for="pekerjaanibu_santri">Pekerjaan Ibu :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="namaibu_santri"id="namaibu_santri">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="pekerjaanibu_santri"id="pekerjaanibu_santri">
    </div>
  </div>
</div>


<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="alamatortu_santri">Alamat :</label>

    </div>
    <div class="col-sm-6">
      <label for="teleponortu_santri">Nomor Telepom :</label>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <textarea class="form-control" name="alamatortu_santri" rows="5" cols="45"></textarea>
    </div>
  <div class="col-sm-6">
      <div class="form-group">
        <input type="number" class="form-control" name="teleponortu_santri" id="teleponortu_santri" style="width:300px">
      </div>
      <div class="form-group">
        <label for="hportu_santri">Nomor HP :</label>
        <input type="number" class="form-control" name="hportu_santri"id="hportu_santri" style="width:300px">
      </div>
  </div>
    </div>
</div>
</div>
</div>

<div class="card mt-5 shadow">
<div class="card-header text-center mb-3 font-weight-bold">
  PENDIDIKAN
</div>
<div class="card-body">

<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="pendidikan_santri">Intansi Pendidikan :</label>
    </div>
    <div class="col">
      <label for="fakultas_santri">Fakultas :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="pendidikan_santri"id="pendidikan_santri">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="fakultas_santri"id="fakultas_santri">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col">
      <label for="jurusan_santri">Jurusan :</label>
    </div>
    <div class="col">
      <label for="angkatan_santri">Angkatan Masuk :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="jurusan_santri"id="jurusan_santri">
    </div>
    <div class="col">
      <input type="number" class="form-control" name="angkatan_santri" id="angkatan_santri">
    </div>
  </div>
</div>
<div class="form-grup">
  <div class="row">
    <div class="col">
      <label for="asalsekolah_santri">Asal Sekolah :</label>
    </div>
    <div class="col">
      <label for="tahunlulus_santri">Tahun Lulus Sekolah :</label>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="asalsekolah_santri"id="asalsekolah_santri">
    </div>
    <div class="col">
      <input type="number" class="form-control" name="tahunlulus_santri" id="tahunlulus_santri">
    </div>
  </div>
</div>

<div class="form-group row mt-4">
    <label for="asalpesantren_santri" class="col-sm-3 col-form-label">Asal Pondok Pesantren :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="asalpesantren_santri"id="asalpesantren_santri">
    </div>
</div>
</div>
</div>


<div class="card mt-5 shadow">
<div class="card-header text-center mb-3 font-weight-bold">
  DATA LAIN
</div>
<div class="card-body">
<div class="form-group">
  <div class="row">
    <div class="col-sm-2 ">
      <label for="anakke_santri">Anak Ke </label>
    </div>
    <div class="col-sm-2 text-left">
      <input type="number" class="form-control" name="anakke_santri" id="anakke_santri">
    </div>
    <div class="col-sm-1 text-center">
      <label for="bersaudara_santri">Dari </label>
    </div>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="bersaudara_santri" id="bersaudara_santri">
    </div>
    <div class="col-sm-4">
      Bersaudara
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-sm-8">
      <label for="hobby_santri">Hobby :</label>
    </div>
    <div class="col-sm-3">
      <label for="golongandarah_santri">Golongan Darah :</label>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <input type="text" class="form-control" name="hobby_santri"id="hobby_santri">
    </div>
    <div class="col-sm-3">
      <select class="form-control" name="golongandarah_santri"id="golongandarah_santri">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="AB">AB</option>
      <option value="O">O</option>
      </select>
    </div>
  </div>
</div>
<div class="form-group row mt-4">
    <label for="penyakit_santri" class="col-sm-3 col-form-label">Riwayat Penyakit :</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="penyakit_santri"id="penyakit_santri">
    </div>
</div>
<div class="form-group row mt-4">
    <label for="gambar_santri" class="col-sm-3 col-form-label">Upload Photo :</label>
    <div class="col-sm-9"  data-toggle="tooltip" data-placement="top" title="File Max. 2 mb">
      <input type="file" class="form-control" name="gambar_santri" id="gambar_santri" style="width:300px;height:50px">
    </div>
</div>


  </div>
</div>
</form>
</div>
<div class="card-footer mt-5" style="background-color:white">
  <button type="submit" class="btn btn-block btn-primary shadow-lg">CREATE</button>
        {{ csrf_field() }}
</div>
</div>
</div>

<section id="footer" class="footer">
  <div class="jumbotron-fluid text-light" style="background:#1B2626" >
    <div class="container text-center">
      <div class="footer-copyright text-center py-1">© 2019 Copyright :
        <a > PPMU </a>
      </div>
    </div>
  </div>
</section>

    @endsection

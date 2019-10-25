@extends('layouts.master')

@section('title', 'Pendaftaran Santri')

@section('content')


<div class="" style="padding-top:100px">


<h1 class="text-center">PENDAFTARAN SANTRI</h1>
<div class="container" style=" width: 500px; height:300px">
<form action="/santri" method="post" enctype="multipart/form-data" style="padding:10px; border:1px solid black">

Data Pribadi
  <div class="form-group">
    <label for="nis_santri">NIS :</label>
    <input type="number" class="form-control" name="nis_santri" id="nis_santri">
  </div>
  <div class="form-group">
    <label for="nama_santri">Nama Lengkap :</label>
    <input type="text" class="form-control" name="nama_santri"id="nama_santri">
  </div>
  <div class="form-group">
    <label for="panggilan_santri">Nama Panggilan :</label>
    <input type="text" class="form-control" name="panggilan_santri"id="panggilan_santri">
  </div>
  <div class="form-group">
    <label for="jk_santri">Jenis Kelamin :</label>
    <input name="jk_santri" class="form-control" id="jk_santri" type="radio" value="laki" width="25px" height="25px"/> Laki-Laki
    <input name="jk_santri" class="form-control" id="jk_santri" type="radio" value="perempuan" /> Perempuan
  </div>
  <div class="form-group">
    <label for="ttl_santri">Tempat, Tanggal Lahir :</label>
    <input type="date" class="form-control" name="ttl_santri"id="ttl_santri">
  </div>
  <div class="form-group">
    <label for="alamat_santri">Alamat :</label>
    <textarea name="alamat_santri" rows="5" cols="45"></textarea>
  </div>
  <div class="form-group">
    <label for="telepon_santri">Nomor Telepom :</label>
    <input type="number" class="form-control" name="telepon_santri" id="telepon_santri">
  </div>
  <div class="form-group">
    <label for="hp_santri">Nomor HP :</label>
    <input type="number" class="form-control" name="hp_santri"id="hp_santri">
  </div>
  <div class="form-group">
    <label for="email_santri">Email :</label>
    <input type="text" class="form-control" name="email_santri"id="email_santri">
  </div>
<br>
<br>
Data Orang Tua
  <div class="form-group">
    <label for="namaayah_santri">Nama Ayah :</label>
    <input type="text" class="form-control" name="namaayah_santri"id="namaayah_santri">
  </div>
  <div class="form-group">
    <label for="pekerjaanayah_santri">Pekerjaan Ayah :</label>
    <input type="text" class="form-control" name="pekerjaanayah_santri"id="pekerjaanayah_santri">
  </div>
  <div class="form-group">
    <label for="namaibu_santri">Nama Ibu :</label>
    <input type="text" class="form-control" name="namaibu_santri"id="namaibu_santri">
  </div>
  <div class="form-group">
    <label for="pekerjaanibu_santri">Pekerjaan Ibu :</label>
    <input type="text" class="form-control" name="pekerjaanibu_santri"id="pekerjaanibu_santri">
  </div>
  <div class="form-group">
    <label for="alamatortu_santri">Alamat :</label>
    <textarea name="alamatortu_santri" rows="5" cols="45"></textarea>
  </div>
  <div class="form-group">
    <label for="teleponortu_santri">Nomor Telepom :</label>
    <input type="number" class="form-control" name="teleponortu_santri" id="teleponortu_santri">
  </div>
  <div class="form-group">
    <label for="hportu_santri">Nomor HP :</label>
    <input type="number" class="form-control" name="hportu_santri"id="hportu_santri">
  </div>
<br>
<br>
Pendidkan
  <div class="form-group">
    <label for="pendidikan_santri">Intansi Pendidikan :</label>
    <input type="text" class="form-control" name="pendidikan_santri"id="pendidikan_santri">
  </div>
  <div class="form-group">
    <label for="fakultas_santri">Fakultas :</label>
    <input type="text" class="form-control" name="fakultas_santri"id="fakultas_santri">
  </div>
  <div class="form-group">
    <label for="jurusan_santri">Jurusan :</label>
    <input type="text" class="form-control" name="jurusan_santri"id="jurusan_santri">
  </div>
  <div class="form-group">
    <label for="angkatan_santri">Angkatan :</label>
    <input type="number" class="form-control" name="angkatan_santri" id="angkatan_santri">
  </div>
  <div class="form-group">
    <label for="asalsekolah_santri">Asal Sekolah :</label>
    <input type="text" class="form-control" name="asalsekolah_santri"id="asalsekolah_santri">
  </div>
  <div class="form-group">
    <label for="tahunlulus_santri">Tahun Lulus Sekolah :</label>
    <input type="number" class="form-control" name="tahunlulus_santri" id="tahunlulus_santri">
  </div>
  <div class="form-group">
    <label for="asalpesantren_santri">Asal Pesantren :</label>
    <input type="text" class="form-control" name="asalpesantren_santri"id="asalpesantren_santri">
  </div>
<br>
<br>
Data Lain
  <div class="form-group">
    <label for="hobby_santri">Hobby :</label>
    <input type="text" class="form-control" name="hobby_santri"id="hobby_santri">
  </div>
  <div class="form-group">
    <label for="anakke_santri">Anak Ke :</label>
    <input type="number" class="form-control" name="anakke_santri" id="anakke_santri">
  </div>
  <div class="form-group">
    <label for="bersaudara_santri">Jumlah Saudara :</label>
    <input type="number" class="form-control" name="bersaudara_santri" id="bersaudara_santri">
  </div>
  <div class="form-group">
    <label for="golongandarah_santri">Golongan Darah :</label>
    <select class="form-control" name="golongandarah_santri"id="golongandarah_santri">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
    <option value="O">O</option>
    </select>
  </div>
  <div class="form-group">
    <label for="penyakit_santri">Riwayat Penyakit :</label>
    <input type="text" class="form-control" name="penyakit_santri"id="penyakit_santri">
  </div>
  <div class="form-group">
    <label for="gambar_santri">Upload Photo :</label>
    <input type="file" class="form-control" name="gambar_santri"id="gambar_santri">
  </div>
  <button type="submit" class="btn btn-primary" style="border: 2px">Create</button>
        {{ csrf_field() }}
    </form>
  </div>
  </div>

    @endsection

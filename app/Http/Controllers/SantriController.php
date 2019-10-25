<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Santri;
use Laravel\User;

class SantriController extends Controller
{
    public function index()
    {
      $santri = Santri::All();
      return view('santri/home')->with('santris', $santris);
    }

    public function create()
    {
      return view('santri/create');
    }

    public function show($id)
    {
      $santri = Santri::find($id);

      if(!$santri)
      dd('Halaman tidak ditemukan');

      return view ('santri/single',['santri'=>$id,'santri'=>$santri]);
    }


    public function store(Request $req)
    {
      $santri = new Santri;
      $santri->nis_santri = $req->nis_santri;
      $santri->nama_santri = $req->nama_santri;
      $santri->panggilan_santri= $req->panggilan_santri;
      $santri->jk_santri= $req->jk_santri;
      $santri->ttl_santri= $req->ttl_santri;
      $santri->alamat_santri= $req->alamat_santri;
      $santri->telepon_santri= $req->telepon_santri;
      $santri->hp_santri= $req->hp_santri;
      $santri->email_santri= $req->email_santri;
      //Data ortu
      $santri->namaayah_santri= $req->namaayah_santri;
      $santri->pekerjaanayah_santri= $req->pekerjaanayah_santri;
      $santri->namaibu_santri= $req->namaibu_santri;
      $santri->pekerjaanibu_santri= $req->pekerjaanibu_santri;
      $santri->alamatortu_santri= $req->alamatortu_santri;
      $santri->telponortu_santri= $req->telponortu_santri;
      $santri->hportu_santri= $req->hportu_santri;
      //pendidikan santri
      $santri->pendidikan_santri= $req->pendidikan_santri;
      $santri->fakultas_santri= $req->fakultas_santri;
      $santri->jurusan_santri= $req->jurusan_santri;
      $santri->angkatan_santri= $req->angkatan_santri;
      $santri->asalsekolah_santri= $req->asalsekolah_santri;
      $santri->tahunlulus_santri= $req->tahunlulus_santri;
      $santri->asalpesantren_santri= $req->asalpesantren_santri;
      //Data Lain
      $santri->hobby_santri= $req->hobby_santri;
      $santri->anakke_santri= $req->anakke_santri;
      $santri->bersaudara_santri= $req->bersaudara_santri;
      $santri->golongandarah_santri= $req->golongandarah_santri;
      $santri->penyakit_santri= $req->penyakit_santri;
      //Data file/gambar
      $file = $req->file('gambar_santri');
      $ext = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_santri',$newName);
      $santri->gambar_santri = $newName;
      $santri->save();
      return redirect('santri');
    }

    public function edit($id)
    {
      $santri = Santri::find($id);

      if (!$santri)
      dd('Halaman tidak tersedia ');

      return view ('santri/edit', ['santri'=>$id, 'santri'=>$santri]);
    }


    public function update(Request $req, $id)
    {
      $santri = Santri::find($id);

      $santri->update([
        'nis_santri' => $req->nis_santri,
        'nama_santri' => $req->nama_santri,
        'panggilan_santri' => $req->panggilan_santri,
        'jk_santri' => $req->jk_santri,
        'ttl_santri' => $req->ttl_santri,
        'alamat_santri' => $req->alamat_santri,
        'telepon_santri' => $req->telepon_santri,
        'hp_santri' => $req->hp_santri,
        'email_santri' => $req->email_santri,

  //Data Ortu
        'namaayah_santri' => $req->namaayah_santri,
        'pekerjaanayah_santri' => $req->pekerjaanayah_santri,
        'namaibu_santri' => $req->namaibu_santri,
        'pekerjaanibu_santri' => $req->pekerjaanibu_santri,
        'alamatortu_santri' => $req->alamatortu_santri,
        'telponortu_santri' => $req->teleponortu_santri,
        'hportu_santri' => $req->hportu_santri,

  //Pendidikan Santri
        'pendidikan_santri' => $req->penyakit_santri,
        'fakultas_santri' => $req->fakultas_santri,
        'jurusan_santri' => $req->jurusan_santri,
        'angkatan_santri' => $req->angkatan_santri,
        'asalsekolah_santri' => $req->asalsekolah_santri,
        'tahunlulus_santri' => $req->tahunlulus_santri,
        'asalpesantren_santri' => $req->asalpesantren_santri,

  //Data Lain
        'hobby_santri' => $req->hobby_santri,
        'anakke_santri' => $req->anakke_santri,
        'bersaudara_santri' => $req->bersaudara_santri,
        'golongandarah_santri' => $req->golongandarah_santri,
        'penyakit_santri'=> $req->penyakit_santri,

  //Data File/Gambar
        'gambar_santri' => $req->gambar_santri,

      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $santri= Santri::find($id);
       $santri->delete();
       return redirect('santri');
    }
}

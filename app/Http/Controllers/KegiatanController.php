<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Kegiatan;
use Laravel\User;


class KegiatanController extends Controller
{
    public function index()
    {

      $kegiatans = Kegiatan::all();
      $harians = Kegiatan::where('jenis_kegiatan','=','Harian')->get();
      $mingguans = Kegiatan::where('jenis_kegiatan','=','Mingguan')->get();
      $bulanans = Kegiatan::where('jenis_kegiatan','=','Bulanan')->get();
      $semesterans = Kegiatan::where('jenis_kegiatan','=','Semesteran')->get();
      $tahunans = Kegiatan::where('jenis_kegiatan','=','Tahunan')->get();




      return view ('kegiatan/home')
      ->with('kegiatans', $kegiatans)
      ->with('harians',$harians)
      ->with('mingguans',$mingguans)
      ->with('bulanans',$bulanans)
      ->with('semesterans',$semesterans)
      ->with('tahunans',$tahunans);
    }


    public function dasboard()
    {
         $kegiatans = Kegiatan::all();


      return view ('kegiatan/dashoard')->with('kegiatans', $kegiatans);
    }



    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $kegiatan = Kegiatan::find($id);

      if(!$kegiatan)

      dd('Halaman tidak ditemukan');

      return view ('kegiatan/single', ['kegiatan'=>$id, 'kegiatan'=>$kegiatan]);
    }



    public function create()
    {
      return view('kegiatan/create');
    }



    public function store(Request $req)
    {
      $kegiatan = new Kegiatan;
      $kegiatan->nama_kegiatan = $req->nama_kegiatan;
      $kegiatan->isi_kegiatan = $req->isi_kegiatan;
      $kegiatan->jenis_kegiatan = $req->jenis_kegiatan;
      $file    = $req->file('gambar_kegiatan');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_kegiatan',$newName);
      $kegiatan->gambar_kegiatan = $newName;
      $kegiatan->save();


      return redirect('dashboard/kegiatan');
    }


    public function edit($id)
    {
      $kegiatan = Kegiatan::find($id);

      if (!$kegiatan)
      dd('Halaman tidak tersedia ');

      return view ('kegiatan/edit', ['kegiatan'=>$id, 'kegiatan'=>$kegiatan]);
    }


    public function update(Request $req, $id)
    {
      $kegiatan = Kegiatan::find($id);

      $kegiatan->update([
        'nama_kegiatan' => $req->nama_kegiatan,
        'isi_kegiatan' => $req->isi_kegiatan,
        'jenis_kegiatan' => $req->jenis_kegiatan,
        'gambar_kegiatan' => $req->gambar_kegiatan,
      ]);

      return redirect('dashboard/kegiatan');
    }


    public function destroy($id)
    {
       $kegiatan= Kegiatan::find($id);
       $kegiatan->delete();
       return redirect('dashboard/kegiatan');
    }

    public function cari(Request $request)
    {
      $cari=$request->cari;

      $kegiatans= DB::table("kegiatan")
      ->where('nama_kegiatan','like',"%".$cari."%")
      ->paginate();

      return view ('kegiatan/dashoard')->with('kegiatans', $kegiatans);
    }
}

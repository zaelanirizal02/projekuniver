<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Galeri;
use Laravel\User;
use Laravel\Artikel;
use Laravel\Kegiatan;
use Laravel\Uks;

class GaleriController extends Controller
{
    public function index()
    {


      $artikels = Artikel::all();
      $beritas= Artikel::where('jenis_artikel','=', 'berita')->get();
      $artikels2= Artikel::where('jenis_artikel','=', 'artikel')->get();

      // $ukss = Uks::All();
      // $hadrohs = uks::where('jenis_uks','=','Hadroh')->get();
      // $nasyids = Uks::where('jenis_uks','=','Nasyid')->get();
      // $marawiss = Uks::where('jenis_uks','=','Marawis')->get();
      // $avicenas = Uks::where('jenis_uks','=','Avicena')->get();
      // $seblaks = Uks::where('jenis_uks','=','Seblak_Basho')->get();
      // $tradisis = Uks::where('jenis_uks','=','Tradisi')->get();
      // $tukangs = Uks::where('jenis_uks','=','Tukang_Pelm')->get();

      $galeris = Galeri::All();
      $fasilitass = Galeri::where('jenis_galeri','=','fasilitas')->get();
      $ukegiatans = Galeri::where('jenis_galeri','=','ukegiatan')->get();


      return view ('galeri/home')
          ->with('artikels', $artikels)->with('beritas',$beritas)->with('artikels2' , $artikels2)
          ->with('galeris', $galeris)->with('fasilitass', $fasilitass)->with('ukegiatans', $ukegiatans);
          // ->with('ukss', $ukss)->with('hadrohs',$hadrohs)->with('marawiss',$marawiss)->with('avicenas',$avicenas)->with('seblaks',$seblaks)->with('tradisis',$tradisis)->with('tukangs',$tukangs)->with('nasyids', $nasyids);

    }


    public function dasboard()
    {
         $galeris = Galeri::all();


      return view ('galeri/home')->with('galeris', $galeris);
    }



    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $galeri = Galeri::find($id);

      if(!$galeri)

      dd('Halaman tidak ditemukan');

      return view ('galeri/single', ['galeri'=>$id, 'galeri'=>$galeri]);
    }



    public function create()
    {
      return view('galeri/create');
    }



    public function store(Request $req)
    {
      $galeri = new Galeri;
      $galeri->nama_galeri = $req->nama_galeri;
      $galeri->keterangan_galeri = $req->keterangan_galeri;
      $galeri->jenis_galeri = $req->jenis_galeri;
      $file    = $req->file('gambar_galeri');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_galeri',$newName);
      $galeri->gambar_galeri = $newName;
      $galeri->save();


      return redirect('dashboard/galeri');
    }


    public function edit($id)
    {
      $galeri = Galeri::find($id);

      if (!$galeri)
      dd('Halaman tidak tersedia ');

      return view ('galeri/edit', ['galeri'=>$id, 'galeri'=>$galeri]);
    }


    public function update(Request $req, $id)
    {
      $galeri = Galeri::find($id);

      $galeri->update([
        'nama_galeri' => $req->nama_galeri,
        'isi_galeri' => $req->isi_galeri,
        'jenis_galeri' => $req->jenis_galeri,
        'gambar_galeri' => $req->gambar_galeri,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $galeri= Galeri::find($id);
       $galeri->delete();
       return redirect('dashboard/galeri');
    }
}

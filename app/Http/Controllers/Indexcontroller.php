<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\Banner;
use Laravel\Uks;
use Laravel\Organisasi;

class Indexcontroller extends Controller
{
    //
    public function index()
    {
      $artikels = Artikel::orderBy('created_at', 'desc')->limit(3)->get();
      $beritas= Artikel::where('jenis_artikel','=', 'berita')->limit(3)->get();
      $artikels2= Artikel::where('jenis_artikel','=', 'artikel')->limit(3)->get();
      $ukss= Uks::all();
      $banners= Banner::all();

      return view ('home')->with('artikels', $artikels)->with('ukss',$ukss)->with('banners',$banners)->with('beritas',$beritas)->with('artikels2' , $artikels2);
    }



    public function show ($id)
    {

      $artikels = Artikel::find($id);

      dd('artikel tidak ditemukan');

      return view ('blog/single', ['blog'=>$id, 'artikel'=>$artikel]);
    }

    public function store(Requesr $req)
    {
      $artikel = new Artikel;
      $artikel->nama_artikel = $req->nama_artikel;
      $artikel->isi_artikel = $req->isi_artikel;
      $artikel->jenis_artikel = $req->jenis_artikel;
      $artikel->gambar_artikel = $req->gambar_artikel;
      $artikel->save();

      return redirect('home');
    }

    public function update(Request $req, $id)
    {
      $artikel = Artikel::find($id);

      $artikel->update([
        'nama_artikel' => $req->nama_artikel,
        'isi_artikel' => $req->isi_artikel,
        'jenis_artikel' => $req->jenis_artikel,
        'gambar_artikel' => $req->gambar_artikel,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $artikel= Artikel::find($id);
       $artikel->delete();
       return redirect('blog');
    }
}

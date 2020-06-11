<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\User;


class BlogController extends Controller
{
    public function index()
    {

      $artikels = Artikel::all();
      $beritas= Artikel::where('jenis_artikel','=', 'Berita')->paginate(10);
      $artikels2= Artikel::where('jenis_artikel','=', 'Artikel')->paginate(10);

      // // Beritas
      //   // mengambil data dari table pegawai
		  //   $beritas = Artikel::where('jenis_artikel','=', 'berita')->paginate(3);
      //
    	//   // mengirim data pegawai ke view index
		  //   return view('blog/home',['jenis_artikel','=', 'berita' => $artikels]);







      return view ('blog/home')->with('artikels', $artikels)->with('beritas',$beritas)->with('artikels2' , $artikels2);
    }


    public function dasboard()
    {
         $artikels = Artikel::all();


      return view ('blog/dashoard')->with('artikels', $artikels);
    }



    public function show($slug)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $artikel = Artikel::where('slug','=', $slug)->first();

      if(!$artikel)

      dd('Halaman tidak ditemukan');

      return view ('blog/single', ['blog'=>$slug, 'artikel'=>$artikel]);
    }



    public function create()
    {
      return view('blog/create');
    }



    public function store(Request $req)
    {
      $artikel = new Artikel;
      $artikel->nama_artikel = $req->nama_artikel;
      $artikel->slug = str_slug($artikel->nama_artikel);
      $artikel->isi_artikel = $req->isi_artikel;
      $artikel->jenis_artikel = $req->jenis_artikel;
      $file    = $req->file('gambar_artikel');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_artikel',$newName);
      $artikel->gambar_artikel = $newName;
      $artikel->save();


      return redirect('dashboard/artikel');
    }


    public function edit($id)
    {
      $artikel = Artikel::find($id);

      if (!$artikel)
      dd('Halaman tidak tersedia ');

      return view ('blog/edit', ['blog'=>$id, 'artikel'=>$artikel]);
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

      return redirect('dashboard/artikel');
    }


    public function destroy($id)
    {
       $artikel= Artikel::find($id);
       $artikel->delete();
       return redirect('dashboard/artikel');
    }

    public function cari(Request $request)
    {
      $cari=$request->cari;

      $artikels= DB::table("artikel")
      ->where('nama_artikel','like',"%".$cari."%")
      ->paginate();

      return view ('blog/dashoard')->with('artikels', $artikels);
    }
}

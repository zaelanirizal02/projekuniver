<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Organisasi;
use laravel\user;

class OrganisasiController extends Controller
{
    public function index()
    {

      $organisasis = Organisasi::all();
      $dpengasuhs = Organisasi::where('jenis_organisasi','=','Dpengasuh')->get();
      $dsantris = Organisasi::where('jenis_organisasi','=','Dsantri')->get();




      return view ('organisasi/home')->with('organisasis', $organisasis)
      ->with('dpengasuhs', $dpengasuhs)
      ->with('dsantris', $dsantris);
    }


    public function show($id)
    {
      $organisasi = Organisasi::find($id);

      if(!$organisasi)

      dd('Halaman tidak ditemukan');

      return view ('organisasi/single', ['organisasi'=>$id, 'organisasi'=>$organisasi]);
    }



    public function create()
    {
      return view('organisasi/create');
    }



    public function store(Request $req)
    {
      $organisasi = new Organisasi;
      $organisasi->nama_organisasi = $req->nama_organisasi;
      $organisasi->jenis_organisasi = $req->jenis_organisasi;
      $organisasi->isi_organisasi = $req->isi_organisasi;
      $file    = $req->file('gambar_organisasi');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_organisasi',$newName);
      $organisasi->gambar_organisasi = $newName;
      $organisasi->save();


      return redirect('dashboard/organisasi');
    }


    public function edit($id)
    {
      $organisasi = organisasi::find($id);

      if (!$organisasi)
      dd('Halaman tidak tersedia ');

    // return view('organisasi.edit');

      return view ('organisasi/edit', ['organisasi'=>$id, 'organisasi'=>$organisasi]);
    }


    public function update(Request $req, $id)
    {
      $organisasi = Organisasi::find($id);

      $organisasi->update([
        'nama_organisasi' => $req->nama_organisasi,
        'isi_organisasi' => $req->isi_organisasi,
        'jenis_organisasi' => $req->jenis_organisasi,
        'gambar_organisasi' => $req->gambar_organisasi,
      ]);

      return redirect('dashboard/organisasi');
    }


    public function destroy($id)
    {
       $organisasi= organisasi::find($id);
       $organisasi->delete();
       return redirect('dashboard/organisasi');
    }
}

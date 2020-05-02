<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Uks;
use Laravel\User;

class UksController extends Controller
{
    public function index()
    {
      $ukss = Uks::All();
      $hadrohs = uks::where('jenis_uks','=','Hadroh')->get();
      $nasyids = Uks::where('jenis_uks','=','Nasyid')->get();
      $marawiss = Uks::where('jenis_uks','=','Marawis')->get();
      $avicenas = Uks::where('jenis_uks','=','Avicena')->get();
      $seblaks = Uks::where('jenis_uks','=','Seblak_Basho')->get();
      $tradisis = Uks::where('jenis_uks','=','Tradisi')->get();
      $tukangs = Uks::where('jenis_uks','=','Tukang_Pelm')->get();



      return view ('uks/home')->with('ukss', $ukss)->with('hadrohs',$hadrohs)->with('marawiss',$marawiss)->with('avicenas',$avicenas)->with('seblaks',$seblaks)->with('tradisis',$tradisis)->with('tukangs',$tukangs)->with('nasyids',$nasyids);
    }

    public function create()
    {
      return view('uks/create');
    }

    public function show($id)
    {
      $uks = Uks::find($id);

      if(!$uks)
      dd('Halaman tidak ditemukan');

      return view ('uks/single',['uks'=>$id,'uks'=>$uks]);
    }


    public function store(Request $req)
    {
      $uks = new Uks;
      $uks->nama_uks = $req->nama_uks;
      $uks->jenis_uks = $req->jenis_uks;
      $uks->isi_uks = $req->isi_uks;
      $file = $req->file('gambar_uks');
      $ext = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_uks',$newName);
      $uks->gambar_uks = $newName;
      $uks->save();

      return redirect('/dashboard/uks');
    }

    public function edit($id)
    {
      $uks = Uks::find($id);

      if (!$uks)
      dd('Halaman tidak tersedia ');

      return view ('uks/edit', ['uks'=>$id, 'uks'=>$uks]);
    }


    public function update(Request $req, $id)
    {
      $uks = Uks::find($id);

      $uks->update([
        'nama_uks' => $req->nama_uks,
        'jenis_uks'=> $req->jenis_uks,
        'isi_uks' => $req->isi_uks,
        'gambar_uks' => $req->gambar_uks,
      ]);

      return redirect('dashboard/uks');
    }


    public function destroy($id)
    {
       $uks= Uks::find($id);
       $uks->delete();
       return redirect('uks');
    }
}

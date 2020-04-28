<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Profile;
use Laravel\User;

class ProfileController extends Controller
{
    public function index()
    {
      $profile = Profile::All();
      $sejarahs = Profile::where('jenis_profile','=','Sejarah')->get();
      $visimisis = Profile::where('jenis_profile','=','Visi_misi')->get();
      $dasarhukums = Profile::where('jenis_profile','=','Dasar_hukum')->get();
      $kurikulums = Profile::where('jenis_profile','=','Kurikulum')->get();
      $sistempenilaians = Profile::where('jenis_profile','=','Sistem_penilaian')->get();
      $tradisis = Profile::where('jenis_profile','=','Tradisi')->get();
      $fasilitass = Profile::where('jenis_profile','=','Fasilitas')->get();

      return view('profile/home')
      ->with('profile', $profile)
      ->with('sejarahs', $sejarahs)
      ->with('visimisis',$visimisis)
      ->with('dasarhukums',$dasarhukums)
      ->with('kurikulums',$kurikulums)
      ->with('sistempenilaians',$sistempenilaians)
      ->with('tradisis',$tradisis)
      ->with('fasilitass',$fasilitass);
    }

    public function create()
    {
      return view('profile/create');
    }

    public function show($id)
    {
      $profile = Profile::find($id);

      if(!$profile)
      dd('Halaman tidak ditemukan');

      return view ('profile/single',['profile'=>$id,'profile'=>$profile]);
    }


    public function store(Request $req)
    {
      $profile = new Profile;
      $profile->nama_profile = $req->nama_profile;
      $profile->jenis_profile = $req->jenis_profile;
      $profile->isi_profile = $req->isi_profile;
      $file = $req->file('gambar_profile');
      $ext = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_profile',$newName);
      $profile->gambar_profile = $newName;
      $profile->save();

      return redirect('dashboard/profile');
    }

    public function edit($id)
    {
      $profile = Profile::find($id);

      if (!$profile)
      dd('Halaman tidak tersedia ');

      return view ('profile/edit', ['profile'=>$id, 'profile'=>$profile]);
    }


    public function update(Request $req, $id)
    {
      $profile = Profile::find($id);

      $profile->update([
        'nama_profile' => $req->nama_profile,
        'jenis_profile' => $req->jenis_profile,
        'isi_profile' => $req->isi_profile,
        'gambar_profile' => $req->gambar_profile,
      ]);

      return redirect('dashboard/profile');
    }


    public function destroy($id)
    {
       $profile= Profile::find($id);
       $profile->delete();
       return redirect('dashboard/profile');
    }
}

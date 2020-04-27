<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\Organisasi;
use Laravel\User;
use Laravel\Santri;
use Laravel\Uks;
use Laravel\Profile;
use Laravel\Banner;
use Laravel\Galeri;
use Laravel\Kegiatan;
class AdminController extends Controller
{
    public function index()
    {
      $artikels = Artikel::all();
      $organisasis = Organisasi::all();

      return view ('admin.home', compact('artikels','organisasis'));
    }

    public function artikel(Request $req)
    {
      $artikels = Artikel::all();

      $query = $req->get('query');

      if (!is_null($query)) {
        $artikels = Artikel::where('nama_artikel', 'like', '%'.$query.'%')->get();
      }

      $jenis_artikel = DB::table('artikels')
                        ->select(DB::raw('count(*) as artikel_count, jenis_artikel'))
                        ->groupBy('jenis_artikel')
                        ->get();

      return view ('admin.artikel',['artikels'=>$artikels, 'jenis_artikel'=>$jenis_artikel]);
    }

    public function organisasi()
    {

      $organisasis = Organisasi::all();

      return view ('admin.organisasi',['organisasis'=>$organisasis]);
    }

    public function santri()
    {
      $santris = Santri::all();
      return view ('admin.santri',['santris'=>$santris]);
    }

    public function uks()
    {
      $ukss = uks::all();
      return view ('admin.uks',['ukss'=>$ukss]);
    }

    public function profile()
    {
      $profiles = profile::all();
      return view ('admin.profile',['profiles'=>$profiles]);
    }

    public function banner()
    {
      $banners = banner::all();
      return view ('admin.banner',['banners'=>$banners]);
    }

    public function register()
    {
      return view ('auth.register');
    }

    public function galeri()
    {
      $galeris = galeri::all();
      return view ('admin.galeri',['galeris'=>$galeris]);
    }

    public function kegiatan()
    {
      $kegiatans = kegiatan::all();
      return view ('admin.kegiatan',['kegiatans'=>$kegiatans]);
    }
}

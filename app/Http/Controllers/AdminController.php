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
class AdminController extends Controller
{
    public function index()
    {
      $artikels = Artikel::all();
      $organisasis = Organisasi::all();

      return view ('admin.home', compact('artikels','organisasis'));
    }

    public function artikel()
    {

      $artikels = Artikel::all();

      return view ('admin.artikel',['artikels'=>$artikels]);
    }

    public function organisasi()
    {

      $organisasis = Organisasi::all();

      return view ('admin.dashboard',['organisasis'=>$organisasis]);
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

}

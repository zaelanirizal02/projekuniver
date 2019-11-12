<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Laravel\Artikel;
use Laravel\Organisasi;
use Laravel\User;

class AdminController extends Controller
{
    public function index()
    {
      $artikels = Artikel::all();
      $organisasis = Organisasi::all();

      return view ('admin.dashboard', compact('artikels','organisasis'));
    }

    public function artikel()
    {

      $artikels = Artikel::all();

      return view ('blog.dasboard',['artikels'=>$artikels]);
    }

    public function organisasi()
    {

      $organisasis = Organisasi::all();

      return view ('admin.dashboard',['organisasis'=>$organisasis]);
    }

    public function santri()
    {
      $santris = Santri::all();
      return view ('santri.dasboard',['santris'=>$santris]);
    }


}

<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Banner;


class BannerController extends Controller
{
    public function index()
    {

      $banners = Banner::all();


      return view ('banner/home')->with('banners', $banners);
    }


    public function dasboard()
    {
         $banners = Banner::all();


      return view ('banner/dashoard')->with('banners', $banners);
    }



    public function show($id)
    {
      $unescape = '<script> alert("Assalamualaikum") </script>';
      $banner = Banner::find($id);

      if(!$banner)

      dd('Halaman tidak ditemukan');

      return view ('banner/single', ['banner'=>$id, 'banner'=>$banner]);
    }



    public function create()
    {
      return view('banner/create');
    }



    public function store(Request $req)
    {
      $banner = new Banner;
      $banner->nama_banner = $req->nama_banner;
      $file    = $req->file('gambar_banner');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('img_banner',$newName);
      $banner->gambar_banner = $newName;
      $banner->save();


      return redirect('dashboard/banner');
    }


    public function edit($id)
    {
      $banner = Banner::find($id);

      if (!$banner)
      dd('Halaman tidak tersedia ');

      return view ('banner/edit', ['banner'=>$id, 'banner'=>$banner]);
    }


    public function update(Request $req, $id)
    {
      $banner = Banner::find($id);

      $banner->update([
        'nama_banner' => $req->nama_banner,
        'isi_banner' => $req->isi_banner,
        'jenis_banner' => $req->jenis_banner,
        'gambar_banner' => $req->gambar_banner,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $banner= Banner::find($id);
       $banner->delete();
       return redirect('dashboard/banner');
    }
}

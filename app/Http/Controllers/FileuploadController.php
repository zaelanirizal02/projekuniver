<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Fileupload;
use Illuminate\Support\Facades\Storage;


class FileuploadController extends Controller
{
    public function index()
    {

      $fileuploads = Fileupload::all();


      return view ('fileupload/home')->with('fileuploads', $fileuploads);
    }


    public function dasboard()
    {
         $fileuploads = Fileupload::all();


      return view ('fileupload/dashoard')->with('fileuploads', $fileuploads);
    }



    public function show($id)
    {
      $fileupload = fileupload::find($id);

      $file_path = public_path('file_download/'.$fileupload->isi_fileupload);
      return response()->download($file_path);
  		
    }



    public function create()
    {
      return view('fileupload/create');
    }



    public function store(Request $req)
    {
      $fileupload = new Fileupload;
      $fileupload->nama_fileupload = $req->nama_fileupload;
      $file    = $req->file('isi_fileupload');
      $ext     = $file->getClientOriginalExtension();
      $newName = rand(100000,1001238912).".".$ext;
      $file->move('file_download',$newName);
      $fileupload->isi_fileupload = $newName;
      $fileupload->save();


      return redirect('dashboard/fileupload');
    }


    public function edit($id)
    {
      $fileupload = Fileupload::find($id);

      if (!$fileupload)
      dd('Halaman tidak tersedia ');

      return view ('fileupload/edit', ['fileupload'=>$id, 'fileupload'=>$fileupload]);
    }


    public function update(Request $req, $id)
    {
      $fileupload = Fileupload::find($id);

      $fileupload->update([
        'nama_fileupload' => $req->nama_fileupload,
      ]);

      return redirect()->back();
    }


    public function destroy($id)
    {
       $fileupload= Fileupload::find($id);
       $fileupload->delete();
       return redirect('dashboard/fileupload');
    }

    public function downfunc($id){
    	$fileupload = Fileupload::find($id);
    	$fileupload = public_path() . '/storage/'. $fileupload->isi_fileupload;
    	return response()->fileupload($fileupload, $fileupload->nama_fileupload);
    }
}

<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['nama_galeri','jenis_galeri','gambar_galeri','keterangan_galeri'
  ];
}

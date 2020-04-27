<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = ['nama_kegiatan','isi_kegiatan','jenis_kegiatan','gambar_kegiatan'];
}

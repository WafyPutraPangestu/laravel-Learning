<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
        // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
        protected $table = 'kegiatan';

        // Tentukan kolom yang bisa diisi (fillable)
        protected $fillable = ['hari', 'kegiatan', 'waktu'];
    
        // Nonaktifkan timestamps jika tabel tidak memiliki kolom created_at dan updated_at
        public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;
    protected $fillable = ['pasien_id','tgl_berobat','keluhan_pasien','hasil_diagnosa'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}

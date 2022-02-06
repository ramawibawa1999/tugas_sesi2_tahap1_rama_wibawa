<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['pasien_id','biaya_berobat','kembalian'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}

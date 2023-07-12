<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendataan extends Model
{
    use HasFactory;

    // protected $table = ['pendataans'];
    protected $guarded = ['id'];
    protected $fillable = [
        'pendaftaran_id',
        'user_id',
        'berat',
        'kbbk',
        'kbbp',
        'panjang',
        'kel_panjang',
        'lebar',
        'kel_lebar',
        'tinggi',
        'kel_tinggi',
        'foh',
        'kel_foh',
        'roh',
        'kel_roh',
        'mengangkut',
        'dari',
        'tujuan',
        'pengemudi',
        'kelengkapan_berkas',
        'sim',
        'pelanggaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    
}

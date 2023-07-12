<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penindakan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'pendaftaran_id',
        'user_id',
        'pendataan_id',
        'jns_pelanggaran',
        'jns_penindakan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    public function pendataan()
    {
        return $this->belongsTo(Pendataan::class);
    }
}

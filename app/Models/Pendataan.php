<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendataan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }

    
}

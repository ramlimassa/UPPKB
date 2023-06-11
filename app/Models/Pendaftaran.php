<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pendataan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendataan()
    {
        return $this->hasMany(Pendataan::class);
    }
}

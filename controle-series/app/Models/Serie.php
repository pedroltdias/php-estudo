<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function temporadas()
    {
        return $this->hasMany(Season::class, 'series_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'cover', 'description'];

    public function song()
    {
        return $this->hasMany(Song::class);
    }
}

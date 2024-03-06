<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'species', 'type', 'origin', 'location'];

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'ref_api');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','slug'];
    // Relacion M:N

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}

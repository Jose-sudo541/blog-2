<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Relacion 1:N

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }


    // Relacion M:N

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class);
    }

    //Relacion polimorfica

    public function image()
    {
        return $this->morphOne(Imagen::class, 'imageable');
    }

}

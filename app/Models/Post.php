<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}


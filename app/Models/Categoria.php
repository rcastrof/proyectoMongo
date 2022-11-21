<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categoria extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}


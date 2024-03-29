<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'content', 'category_id', 'description', 'posted', 'image'];
    /* 1 publicacion pertenece unicamente a 1 categoria */
    public function category (){
        return $this->belongsTo(category::class);
    }
}

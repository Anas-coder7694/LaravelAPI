<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   protected $fillable = [
      'name',
      'email',
   ];
    use HasFactory;
     public function Article(){
        return $this->hasMany(Article::class);
     }
}

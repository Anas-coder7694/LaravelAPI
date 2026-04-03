<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{   
    use HasFactory;
   protected $fillable = [
    'title',
    'content',
    'author_id'
   ];
    public function Author(){

        return $this->BelongsTo(Author::class);
    }
}

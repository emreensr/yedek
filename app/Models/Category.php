<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Models\Author;

class Category extends Model
{
    use HasFactory;

    protected $fillable= ['name','number'];

    public  function authors(){
        return $this->hasMany(Author::class);
    }

    public function news(){
        return $this->hasMany(News::class);
    }
}

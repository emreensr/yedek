<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Author;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable= ['cat_id','title','photo','description','author_id','status'];

    public function category(){
        return $this->belongsTo(Category::class,'cat_id');
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }



}

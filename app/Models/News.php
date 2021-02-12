<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class News extends Model
{
    use HasFactory;

    protected $fillable= ['cat_id','title','photo','description','author_id','status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }



}

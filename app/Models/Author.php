<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Author extends Model
{
    use HasFactory;

    protected $fillable= ['name','status'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

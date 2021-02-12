<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Category extends Model
{
    use HasFactory;

    protected $fillable= ['name','number'];

    public function news(){
        return $this->hasMany(News::class);
    }



}

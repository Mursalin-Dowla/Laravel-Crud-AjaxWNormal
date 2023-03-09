<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_id',
        'name',
        'image'
    ];

    public function catinfo(){
        return $this->belongsTo(Category::class,'cat_id');
    }
}

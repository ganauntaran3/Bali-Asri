<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Type;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

        public function category(){
            return $this->belongsTo(Category::class);
        }

        public function type(){
            return $this->belongsTo(Type::class);
        }
}

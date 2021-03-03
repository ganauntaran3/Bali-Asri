<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Type;

class Product extends Model
{
    use HasFactory;

        public function category(){
            return $this->hasOne(Category::class);
        }

        public function type(){
            return $this->hasOne(Type::class);
        }
}

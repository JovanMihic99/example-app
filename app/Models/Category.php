<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory;
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, "category", "name");
    }
}

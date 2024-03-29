<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "Categories";
    protected $fillable = [
        "id",
        "category",
        "category_image",
        "status",
        "created_at",
        "updated_at"
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug'
        // 'status'
        // 'parent_id',
        // 'image',
        // 'description',
        // 'meta_title',
        // 'meta_description',
        // 'meta_keyword',
        // 'created_by',
    ];

}

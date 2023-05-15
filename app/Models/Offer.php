<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';

    protected $fillable = [
        'top_title',
        'title',
        'sub_title',
        'bottom_title',
        'slider_images',        
        'seo_description',
        'meta_title',
        'meta_description',
        'status',
        'created_by'
    ];
}

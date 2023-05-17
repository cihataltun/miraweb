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
        'bottom_desc_left',
        'bottom_desc_center',
        'bottom_desc_right',
        'slider_images',
        'slider_images_mobile',
        'opportunity_image',
        'opportunity_title',
        'opportunity_slug',
        'seo_description',
        'meta_title',
        'meta_description',
        'status',
        'created_by'
    ];
}

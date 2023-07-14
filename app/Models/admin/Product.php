<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'gallery_id',
        'commentAccepted',
        'sort',
        'watingforapproval',
        'uri',
        'title',
        'post_desc',
        'content',
        'mainImg',
        'SquareImg',
        'largeImg',
        'visibility',
        'published',
    ];
}

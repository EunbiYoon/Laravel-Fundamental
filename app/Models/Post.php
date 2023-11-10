<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    //fillable
    protected $fillable = [
        "title",
        "description",
        "status",
        "publish_date",
        "user_id",
        "category_id",
        "views"
    ];
    //guarded
    protected $guarded = [
    ];

}

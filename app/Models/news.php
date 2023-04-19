<?php

namespace App\Models;

use App\Models\trait\persian_slug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory,persian_slug;
    protected $fillable=['id','title','slug','pic','pic_banner','meta_tags','like','active','active','hit','cat_id'];
}

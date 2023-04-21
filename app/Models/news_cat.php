<?php

namespace App\Models;

use App\Models\trait\date_slug;
use App\Models\trait\persian_slug;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cat extends Model
{
    use HasFactory,persian_slug,date_slug;
    protected $table="news_cat";
    protected $fillable = ['slug' ,'title','description'];
    public function news(){
        return $this->hasMany(news::class,'cat_id');
    }
}

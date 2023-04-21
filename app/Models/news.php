<?php

namespace App\Models;

use App\Models\trait\date_slug;
use App\Models\trait\persian_slug;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class news extends Model
{
    use HasFactory,persian_slug,date_slug;
    protected $fillable=['id','title','slug','pic','pic_banner','meta_tags','like','active','active','hit','cat_id'];
    protected $appends=['socialMedia','formatTime'];
    public function getSocialMediaAttribute(){
        $share_media = \Share::page(route('news.single',['news'=>$this->slug]))->twitter()->facebook()->getRawLinks();
        return $share_media;
    }
    public function getformatTimeAttribute(){
        return (new Verta($this->created_at))->format('d F , Y');
    }
    public function news_cat(){
        return $this->belongsTo(news_cat::class,'cat_id')->select(['title','slug']);
    }
    public function hit_news(){
        $dayAgo = 7 ;
        $dayToCheck = Carbon::now()->subDays($dayAgo);
        return news::take(3)->where('cat_id',$this->cat_id)->whereDate('created_at','>=',$dayToCheck)->orderBy('hit','desc')->get();
    }
    public function scopeFilter(Builder $builder,array $params=[]){
        if(isset($params["q"]) && !empty($params['q'])){
            $builder->orWhere('title', 'like', '%' . $params["q"] . '%');
        }
        return $builder;
    }
}

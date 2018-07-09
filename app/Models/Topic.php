<?php

namespace App\Models;

class Topic extends Model
{
    public $primaryKey='id';//主键

    protected $table = 'topics';//表名

    protected $fillable = ['title', 'body', 'category_id', 'excerpt', 'slug'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function scopeWithOrder($query,$order){
        switch($order){
            case 'recent':
                $query->recent();
                break;
            default:
                $query->recentReplied();
                break;
        }
        return $query->with('user','category');
    }

    public function scopeRecentReplied($query){
        return $query->orderBy('updated_at','desc');
    }

    public function scopeRecent($query){
        return $query->orderBy('created_at','desc');
    }

    public function replies(){
        return $this->hasMany(Reply::class,'topic_id','id');
    }

    public function link($params = [])
    {
        return route('topics.show', array_merge([$this->id, $this->slug], $params));
    }
}

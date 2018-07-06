<?php

namespace App\Models;

class Topic extends Model
{
    public $primaryKey='id';//主键

    protected $table = 'topics';//表名

    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

<?php

namespace App\Models;

class Reply extends Model
{
    public $primaryKey='id';//主键

    protected $table = 'replies';//表名

    protected $fillable = ['content'];

    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

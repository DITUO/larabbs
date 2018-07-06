<?php

namespace App\Models;

class Topic extends Model
{
    public $primaryKey='id';//主键

    protected $table = 'topics';//表名

    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
}

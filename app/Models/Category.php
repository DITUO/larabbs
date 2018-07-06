<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'description',
    ];

    public $primaryKey='id';//主键

    protected $table = 'categories';//表名
}

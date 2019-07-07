<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'Posts';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['title','author_id','text','category','img_link'];
}

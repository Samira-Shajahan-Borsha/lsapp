<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //TABLE NAME
    protected $table = 'posts';
    //PRIMARY KEY
    public $primarykey = 'item_id';
    //TIMESTAMPS
    public $timestamps = true;
}

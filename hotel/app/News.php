<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $table = "news";

    public $fillable = ["image", "description", "date"];

    public $timestamps = false;

    public $primarykey = "id";
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = "rooms";

    protected $fillable = ["persons", "size", "view", "price", "image"];

    public $timestamps = false;

    protected $primarykey = "id";
}

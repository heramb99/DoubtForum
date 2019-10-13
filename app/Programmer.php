<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    protected $table="user";
    protected $primaryKey="user_id";
       //
       protected $guarded=[];
       public $timestamps=false;
}

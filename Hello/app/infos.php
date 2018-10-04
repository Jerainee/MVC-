<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
    protected $fillable = [
    	'name','address','mobile','status',
    ];
}

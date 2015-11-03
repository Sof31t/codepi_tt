<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artistes extends Model
{
    protected $table = 'artistes';

    protected $fillable = [
    	'nom',
    	'description',
    	'image',
    	'tags'
    ];
}

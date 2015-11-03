<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concerts extends Model
{
    protected $table = 'concerts';
    
    protected $fillable = [
    	'artiste',
    	'lieu',
    	'adresse',
    	'ville',
    	'date',
    	'prix'
    ];
}

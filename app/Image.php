<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    protected $fillable = ['name' , 'car_id'];

    public function car(){
    	return $this->belongsTo('App\Article');
    }
}

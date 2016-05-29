<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Car extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $SluggableTrait = [
        'build_from' => 'brand',
        'save_to'    => 'slug',
    ];

    protected $table = "cars";

    protected $fillable =['brand', 'model', 'plate', 'notes', 'category_id', 'user_id'];

    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function images(){
    	return $this->hasMany('App\Image');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }

}

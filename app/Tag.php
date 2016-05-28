<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable=['name'];

    public function cars(){
    	return $this.belongsToMany('App\Car')->withTimestamps();
    }
}

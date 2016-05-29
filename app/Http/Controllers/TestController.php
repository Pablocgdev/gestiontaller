<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;

class TestController extends Controller
{
    public function view ($id){

    	$car = Car::find($id);
    	$car->category;
    	$car->user;
    	$car->tags;

		return view('test.index', ['prueba'=> $car]);
    }
}

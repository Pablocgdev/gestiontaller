<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use App\Category;
use App\Car;
use App\Image;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::Search($request->plate)->orderBy('id', 'DESC')-> paginate(5);

        $cars->each(function($cars){
            $cars->category;
            $cars->user;
        });

        return view('admin.cars.index')
        ->with('cars', $cars);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    $categories = Category::orderBy('name', 'ASC')->lists('name', 'id');
    //dd($categories);
    $tags = Tag::orderBy('name', 'ASC')->lists('name', 'id');

    return view('admin.cars.create')
    ->with('categories', $categories)
    ->with('tags', $tags);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')){       
            $file = $request->file('image');
            $name = 'taller_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/images/cars/';
            $file -> move($path, $name);
            }

            $car = new Car($request->all());
            $car->user_id=\Auth::User()->id;
            $car->save();

            $car->tags()->sync($request->tags);
            
            $image = new Image();
            $image->name = $name;
            $image->car()->associate($car);
            $image->save();

            Flash::success('Se ha creado el vehículo ' . $car->title . ' de forma correcta.');
            return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

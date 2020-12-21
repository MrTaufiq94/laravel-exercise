<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $cars = Car::paginate(5);
        return view('cars.index' , compact('cars'));
    }

    public function show(Car $car){ 
        return view('cars.show', compact('car'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $cars = new Car();
        $cars->name = $request->name;
        $cars->colour = $request->colour;
        $cars->owner_id = auth()->user()->id;
        $cars->save(); 
        return redirect()->back();
    }

    public function edit(Car $car){
        //$car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request,Car $car){
        $car->update([
            'name'=>$request->name , 
            'colour'=>$request->colour, 
            'owner_id'=>auth()->user()->id
            ]
        );
        return redirect()->route('car:list');
    }

    public function delete(Car $car){
        $car->delete();
        return redirect()-> route('car:list');
    }
}

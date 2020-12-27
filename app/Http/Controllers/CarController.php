<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests\StoreCarRequest; //ini dapat dari request yg dibuat/custom

class CarController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){

        if ($request->keyword) {
            $search = $request->keyword;
            // $trainings = Training::where('title','LIKE','%'.$search.'%')
            // ->orWhere('description','LIKE','%'.$search.'%')
            // ->paginate(5);

            $cars = auth()->user()->cars()->where('name','LIKE','%'.$search.'%')
            ->orWhere('price','LIKE','%'.$search.'%')
            ->orderBy('created_at','desc')
            ->paginate(5); // sama dengan cara yang else , untuk display hanya user ini punya data
        
        }else{
            $user = auth()->user();
            //get user training using  authenticate user
            $cars = $user->cars()->paginate(5);
        }

        // $cars = Car::paginate(5);
        return view('cars.index' , compact('cars'));
    }

    public function show(Car $car){ 
        return view('cars.show', compact('car'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(StoreCarRequest $request)
    {
        $cars = new Car();
        $cars->name = $request->name;
        $cars->colour = $request->colour;
        $cars->price = $request->price;
        $cars->owner_id = auth()->user()->id;
        $cars->save(); 
        //return redirect()->back();
        return redirect()
        ->route('car:list')
        ->with([
            'alert-type' => 'alert-primary',
            'alert' => 'Your car has been stored!'
        ]);
    }

    public function edit(Car $car){
        //$car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request,Car $car){
        $car->update([
            'name'=>$request->name , 
            'colour'=>$request->colour,
            'price'=>$request->price, 
            'owner_id'=>auth()->user()->id
            ]
        );

        return redirect()
            ->route('car:list')
            ->with([
                'alert-type' => 'alert-success',
                'alert' => 'Your Car has been updated!'
            ]);
    }

    public function delete(Car $car){
        $car->delete();
        return redirect()-> route('car:list');
    }
}

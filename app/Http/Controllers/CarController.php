<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function addcar(Request $request){
        $car = new Car;
        $car->name = $request->input("name");
        $car->price = $request->input("price");
        $car->mil = $request->input("mil");
        $car->fuel = $request->input("fuel");
        $car->address = $request->input("address");
        $car->city = $request->input("city");
        $car->phone = $request->input("phone");
        $car->description = $request->input("description");
        if( $car->photo = $request->hasFile("photo"))
        {
            $file = $request->file("photo");
            $extention = $file->getClientOriginalExtension();
            $filename = time().".".$extention;
            $file->move('uploads/cars',$filename);
            $car->photo = $filename;
        }
        // dd($car);
        $car->save();
        return redirect()->back()->with('status','Car Details Added Successfully');
    }

    }


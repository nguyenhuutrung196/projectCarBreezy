<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all()->sortDesc();
        return view('admin.carlist',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'car_name' => 'required|max:255',
            'car_brand' => 'required',
            'car_model' => 'required',
            'car_img_name1' => '',
            'car_img_name2' => '',
            'car_img_name3' => '',
            'car_img_name4' => ''
        ]);
        $car_name = $request->car_name;
        $car_status = $request->car_status;
        $isExist = Car::select()->where('car_name', $car_name)->exists();    
        if($isExist){
            if($car_status=="New"){
            return redirect()->route('cars.create')->with('fail-msg','Car Name already Exists');
        }}else{
            $car = new Car;
            $car->car_name = $request->car_name;
            $car->car_brand = $request->car_brand;
            $car->car_model = $request->car_model;
            $car->car_price = $request->car_price;
            $car->car_manufacturer_year = $request->car_manufacturer_year;
            $car->car_content = $request->car_content;
            $car->car_status = $request->car_status;
            $car->car_distance_traveled = $request->car_distance_traveled;
            //image1
            $images1 = $request->file('car_img_name1');
            $imageName1 = $images1->getClientOriginalName();
            $images1->move('upload', $imageName1);
            $car->car_img_name1=$imageName1;
            //image2
            $images2 = $request->file('car_img_name2');
            $imageName2 = $images2->getClientOriginalName();
            $images2->move('upload', $imageName2);
            $car->car_img_name2=$imageName2;
            //image3
            $images3 = $request->file('car_img_name3');
            $imageName3 = $images3->getClientOriginalName();
            $images3->move('upload', $imageName3);
            $car->car_img_name3=$imageName3;
            //image4
            $images4 = $request->file('car_img_name4');
            $imageName4 = $images4->getClientOriginalName();
            $images4->move('upload', $imageName4);
            $car->car_img_name4=$imageName4;
            $car->save();
            return redirect()->route('cars.create')->with('succ-msg','Add new car successfully');
    }}

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
        $car = Car::findOrFail($id);
        return view('admin.edit', compact('car'));
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
        $car = Car::find($id);
            $car->car_name = $request->car_name;
            $car->car_brand = $request->car_brand;
            $car->car_model = $request->car_model;
            $car->car_price = $request->car_price;
            $car->car_manufacturer_year = $request->car_manufacturer_year;
            $car->car_hp = $request->car_hp;
            $car->car_type = $request->car_type;
            $car->car_engine = $request->car_engine;
            $car->car_fuel = $request->car_fuel;
            $car->car_content = $request->car_content;
            $car->car_transmission = $request->car_transmission;
            $car->car_distance_traveled = $request->car_distance_traveled;
            $car->save();
        return redirect('/cars')->with('success', 'Car Data is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect('/cars')->with('success', 'Car Data is deleted');
    }
}
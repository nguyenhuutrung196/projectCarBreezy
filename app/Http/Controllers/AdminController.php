<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Customer;
use App\Models\Employee;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_new = Car::where('car_status','New')->paginate(3);
        $car_used = Car::where('car_status','Used')->paginate(3);
        $car_count = Car::all()->count();
        $car_count_new = Car::where('car_status','New')->count();
        $car_count_used = Car::where('car_status','Used')->count();

        $emp_count = Employee::all()->count();
        $emps = Employee::paginate(3);

        $customers = Customer::paginate(3);
        $cus_count = Customer::all()->count();

        return view('admin.dashboard', compact('car_new',
                    'car_used',
                    'customers',
                    'car_count',
                    'cus_count',
                    'car_count_new',
                    'car_count_used',
                    'emp_count',
                    'emps'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

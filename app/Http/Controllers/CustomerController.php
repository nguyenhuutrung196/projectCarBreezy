<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        
        return view('admin.cuslist',compact('customers'));
    }
    public function index2()
    {
        return redirect()->route('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cus = new Customer();
            $cus->customer_name = $request->customer_name;
            $cus->customer_email = $request->customer_email;
            $cus->customer_pwd = $request->customer_pwd;
   
        return redirect()->route('customers.index2')->with('success','Your account is created');
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
        $car = Customer::findOrFail($id);

        return view('edit', compact('car'));
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
        $cus = Customer::find($id);
        $cus->customer_name = $request->customer_name;
        $cus->customer_email = $request->customer_email;
        $cus->customer_contact = $request->customer_contact;
        $cus->customer_pwd = $request->customer_pwd;
        $cus->customer_address = $request->customer_address;
        $cus->customer_img_name = $request->customer_img_name;
        $cus->gender_type = $request->gender_type;
        $cus->save();
        
        return redirect('/cars')->with('success', 'Car Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cus = Customer::findOrFail($id);
        $cus->delete();

        return redirect('/cars')->with('success', 'Car Data is successfully deleted');
    }
}
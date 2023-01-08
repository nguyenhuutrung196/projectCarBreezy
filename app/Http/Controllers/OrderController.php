<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Car;
use App\Models\Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Order::all();
        
        return view('index.index',compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = new Order;
            $cart->order_customer = $request->order_customer;
            $cart->order_car = $request->order_car;
            $cart->order_quantity = $request->order_quantity;
            $cart->order_total = $request->order_total;
   
        return redirect('/carts')->with('success', 'Car is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::findOrFail($id);
        return view('index.cart', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = Order::findOrFail($id);
        return view('admin.edit', compact('cart'));
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
        $validatedData = $request->validate([
            'order_customer' => 'required|max:255',
            'order_car' => 'required',
            'order_quantity' => 'required',
            'order_total' => 'required'
        ]);
        Order::whereCartId($id)->update($validatedData);

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
        $cart = Order::findOrFail($id);
        $cart->delete();

        return redirect('/cars')->with('success', 'Car Data is successfully deleted');
    }
}
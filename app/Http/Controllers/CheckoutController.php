<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Models\OrderDetail;
use App\Models\Product;
use Session;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main_public.checkout');
    }

    public function placeoder(Request $request)
    {
        $order = new Order();
        $order->country = $request->input("country");
        $order->first_name = $request->input("first_name");
        $order->last_name = $request->input("last_name");
        $order->company_name = $request->input("company_name");
        $order->address = $request->input("address");
        $order->city = $request->input("city");
        $order->state = $request->input("state");
        $order->zip = $request->input("zip");
        $order->phone = $request->input("phone");
        $order->email = $request->input("email");
        $order->notes = $request->input("notes");
        $order->save();
        $order->id;
        
        $cartDetails = Session('Cart')->products;
        foreach ($cartDetails as $key => $item)
        {
            session(['product_id' => 'value']);
            OrderDetail::create ([
                'order_id' => $order->id,
                'product_id' => $key,
                'quantity' => $item['quanty'],
                'price' => $item['price'],
            ]);
    
        }
        return Redirect('/payment');      
    }

    public function payment(Request $request)
    {
        
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

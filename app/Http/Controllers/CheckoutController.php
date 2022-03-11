<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\OrderDetail;
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
        $order->address = $request->input("address");
        $order->phone = $request->input("phone");
        $order->email = $request->input("email");
        $order->notes = $request->input("notes");
//        $order->total = $request->input("total");
        $order->id;
        $order->save();


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
        return Redirect('/payment-success');
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->country = $request->input("country");
        $order->first_name = $request->input("first_name");
        $order->last_name = $request->input("last_name");
        $order->address = $request->input("address");
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
        $record = DB::table('order_details')
            ->where('order_id', '=', $order->id)
            ->select('quantity', 'price')
            ->get();
        $sum = 0;
        foreach ($record as $item) {
            $sum += ($item->quantity * $item->price);
        }
        $order->total = $sum;
        $order->save();
        $request->session()->forget('Cart');
        return Redirect('/payment-success');
    }

    public function paymentsuccess(Request $request)
    {
        return view('main_public.payment-success');
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

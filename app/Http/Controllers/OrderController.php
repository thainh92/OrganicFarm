<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')->paginate(10)->withQueryString();
        return view('admin.order.index', [
            'orders' => $orders,
            'total' => $orders->total(),
            'perPage' => $orders->perPage(),
            'currentPage' => $orders->currentPage(),
        ]);
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function showListOrder($id) {
        $orders = DB::table('orders')
            ->where('user_id', '=', $id)
            ->paginate(10)
            ->withQueryString();

        if (Auth::user()->id == $id) {
            $user = Auth::user();
            return view('main_public.profile', [
                'orders' => $orders,
                'total' => $orders->total(),
                'perPage' => $orders->perPage(),
                'currentPage' => $orders->currentPage(),
                'user' => $user,
            ]);
        } else {
            return redirect()->route('home-page');
        }

    }

    public function changeOrderStatus(Request $request)
    {
        $order = DB::table('orders')
            ->where('id', '=', $request->id);
        if($request->status == 1) {
            $order->update(['status' => 'approve']);
            $order->update(['updated_at' => now()]);
        }
        if($request->status == 0) {
            $order->update(['status' => 'cancel']);
            $order->update(['updated_at' => now()]);
        }
    }

    public function showOrderDetail($id) {
        return OrderDetail::with('product')->where('order_id', '=', $id)->get();
    }
}

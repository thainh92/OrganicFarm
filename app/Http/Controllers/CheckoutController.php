<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CheckoutController extends Controller
{
    public function checkout() {
        return view('main_public.checkout');
    }
    
    public function save_checkout_customer(Request $request) {
        $data = array();
        $data['shipping_country'] = $request->shipping_country;
        $data['shipping_firstname'] = $request->shipping_firstname;
        $data['shipping_lastname'] = $request->shipping_lastname;
        $data['shipping_companyname'] = $request->shipping_companyname;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_city'] = $request->shipping_city;
        $data['shipping_state'] = $request->shipping_state;
        $data['shipping_zip'] = $request->shipping_zip;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_note'] = $request->shipping_note;

        $id = DB::table('orders')->insertGetId($data);

        $request->session()->put('id', $id);

        return Redirect('/payment');
    }

    public function payment() {
       
    }
}

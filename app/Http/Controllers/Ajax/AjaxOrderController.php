<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class AjaxOrderController extends Controller
{
      public function customer(Request $request){
        $customer_id = $request->customer_id;
        $customers = Order::join('customers','customers.id','orders.customer_id')->where('orders.customer_id',$customer_id)->get();
        return view('cms.components.ordercustomer-list',compact('customers'));
    }
}
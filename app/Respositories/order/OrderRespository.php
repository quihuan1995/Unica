<?php
namespace App\Repositories\Order;

use App\Repositories\Order\OrderRespositoryInterface;
use App\Models\Order;

use App\Repositories\BaseRepositoryAbstract;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class OrderRespository extends BaseRepositoryAbstract implements OrderRespositoryInterface{
    public function getAll(){
        return Order::all();
    }

    public function create(){

    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->full_name=$request->full_name;
        $customer->address = json_encode(['city'=>$request->city,'streetAddress'=>$request->address ]);
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();
        foreach($customer->order as $row){
            $ordercustomer = new Order();
            $ordercustomer->full_name=$customer->full_name;
            $ordercustomer->customer_id=$customer->id;
            $ordercustomer->address= json_encode(['city'=>$customer->city,'streetAddress'=>$customer->address ]);
            $ordercustomer->email=$customer->email;
            $ordercustomer->phone=$customer->phone;
            $ordercustomer->status=1;
            $ordercustomer->payment_method = $row->payment_method;
            $ordercustomer->save();
            foreach($row->OrderItems as $item){
                $orderitem = new OrderItems();
                $orderitem->order_id= $ordercustomer->order_id;
                $orderitem->status=$ordercustomer->status;
                $orderitem->total_price=$item->total_price;
                $orderitem->voucher_id=$item->voucher_id;
                $orderitem->save();
            }
        }
    }


    public function edit($id)
    {
        return Order::find($id);
    }

    public function update(Request $request, $id)
    {
        // $order = Order::find($id);
        // $order->full_name = $request->full_name;
        // $order->address = json_encode(['city'=>$request->city,'streetAddress'=>$request->address ]);
        // $order->email = $request->email;
        // $order->phone = $request->phone;
        // $order->payment_method = $request->payment_method;
        // $order->save();
        // $customer = Customer::find($order->customer_id);
        // $customer->full_name=$request->full_name;
        // $customer->address = json_encode(['city'=>$request->city,'streetAddress'=>$request->address ]);
        // $customer->email = $request->email;
        // $customer->phone = $request->phone;
        // $customer->save();
    }

    public function chanceSuccess($id)
    {
        $order=Order::find($id);
        $order->status=2;
        $order->save();
    }
    public function chanceDisband($id)
    {
        $order=Order::find($id);
        $order->status=3;
        $order->save();
    }
    public function delete($id){

    }
}
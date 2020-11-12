<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRespositoryInterface;
use App\Repositories\course\CourseRespositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\EditOrderRequest;
use App\Http\Requests\AddOrderRequest;

class OrderController extends Controller
{
    private $order,$course,$voucher,$customer;
    public function __construct(OrderRespositoryInterface $order,CourseRespositoryInterface $course,VoucherRespositoryInterface $voucher,CustomerRespositoryInterface $customer)
    {
        $this->order = $order;
        $this->course=$course;
        $this->voucher=$voucher;
        $this->customer=$customer;
    }
    public function index(){
        $orders=$this->order->getAll();
        return view('cms.modules.order.index',compact('orders'));
    }
    public function create(){
        $courses = $this->course->getAll();
        $vouchers = $this->voucher->getAll();
        $customers = $this->customer->getAll()->take(5);
        return view('cms.modules.order.create',compact('courses','vouchers','customers'));
    }
    public function store(AddOrderRequest $request){
        // dd($request);
        $this->order->store($request);
        $notification = array(
            'message' => 'Create success',
            'alert-type' => 'success'
        );

        return redirect()->route('order.index')->with($notification);
    }

    public function detail($id){
        $order=$this->order->edit($id);
        return view('cms.modules.order.detail',compact('order'));
    }
    public function chancesuccess($id){
        $this->order->chanceSuccess($id);
        $notification = array(
            'message' => 'Edit success',
            'alert-type' => 'success'
        );
        return redirect()->route('order.index')->with($notification);
    }
    public function chancedisband($id){
        $this->order->chanceDisband($id);
        $notification = array(
            'message' => 'Edit success',
            'alert-type' => 'success'
        );
        return redirect()->route('order.index')->with($notification);
    }
    public function edit($id){
        $order=$this->order->edit($id);
        return view('cms.modules.order.edit',compact('order'));
    }
    public function update(EditOrderRequest $request,$id){
        $this->order->update($request,$id);
        $notification = array(
            'message' => 'Edit success',
            'alert-type' => 'success'
        );
        switch($request->submitbutton) {
            case 'save':
                return redirect()->route('order.index')->with($notification);   break;
            case 'save and edit':
                return redirect()->route('order.edit',['id'=>$id])->with($notification); break;
        }
    }
    public function success($id){
        $order=$this->order->edit($id);
        return view('cms.modules.order.success',compact('order'));
    }
    public function disband($id){
        $order=$this->order->edit($id);
        return view('cms.modules.order.disband',compact('order'));
    }
}
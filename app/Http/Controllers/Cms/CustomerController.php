<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Respositories\customer\CustomerRespositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customer;
    public function __construct(CustomerRespositoryInterface $customer)
    {
        $this->customer=$customer;
    }
    public function index(){
        $customers = $this->customer->getAll();
        return view('cms.modules.customer.index',compact('customers'));
    }
    //   public function store(Request $request){
    //     $this->customer->store($request);
    //     $notification = array(
    //         'message' => 'Create success',
    //         'alert-type' => 'success'
    //     );
    //     return redirect()->route('order.index')->with($notification);
    // }
}
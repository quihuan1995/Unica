<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Respositories\course\CourseRespositoryInterface;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class AjaxOrderItemController extends Controller
{
    private $orderItem;

    public function __construct(CourseRespositoryInterface $orderItem){
        $this->orderItem = $orderItem;
    }

    /**
     * List user datatables
     *
     * @param $request - Illuminate\Http\Request
     *
     * @return Response
     */
    public function orderItem(Request $request){

        $data = $this->orderItem->findAllWithDatatable($request);
        return response()->json($data);

    }

}

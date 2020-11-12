<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Repositories\menu\MenuRepositoryInterface;
use Illuminate\Http\Request;

class AjaxMenuController extends Controller
{
    private $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository){
        $this->menuRepository = $menuRepository;
    }

    /**
     * List menu datatables
     * 
     * @param $request - Illuminate\Http\Request
     * 
     * @return Response 
     */
    public function index(Request $request){
        $data = $this->menuRepository->findAllWithDatatable($request);
        return response()->json($data);
        
    }
}
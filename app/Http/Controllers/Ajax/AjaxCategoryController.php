<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRespositoryInterface;
use Illuminate\Http\Request;

class AjaxCategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRespositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * List category datatables
     * 
     * @param $request - Illuminate\Http\Request
     * 
     * @return Response 
     */
    public function index(Request $request){

        $data = $this->categoryRepository->findAllWithDatatableCategory($request);
        return response()->json($data);
        
    }
}
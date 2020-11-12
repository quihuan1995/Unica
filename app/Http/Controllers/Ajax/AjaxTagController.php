<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Repositories\Tag\TagRespositoryInterface;
use Illuminate\Http\Request;

class AjaxTagController extends Controller
{
    private $tagRepository;

    public function __construct(TagRespositoryInterface $tagRepository){
        $this->tagRepository = $tagRepository;
    }

    /**
     * List tag datatables
     * 
     * @param $request - Illuminate\Http\Request
     * 
     * @return Response 
     */
    public function index(Request $request){

        $data = $this->tagRepository->findAllWithDatatableTag($request);
        return response()->json($data);
        
    }
}
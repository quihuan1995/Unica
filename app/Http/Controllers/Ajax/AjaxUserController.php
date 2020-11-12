<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Repositories\users\UserRepositoryInterface;
use Illuminate\Http\Request;

class AjaxUserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository = $userRepository;
    }

    /**
     * List user datatables
     * 
     * @param $request - Illuminate\Http\Request
     * 
     * @return Response 
     */
    public function index(Request $request){

        $data = $this->userRepository->findAllWithDatatable($request);
        return response()->json($data);
        
    }
}
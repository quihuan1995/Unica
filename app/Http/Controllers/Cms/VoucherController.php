<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Respositories\voucher\VoucherRespositoryInterface;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    private $voucher;
    public function __construct(VoucherRespositoryInterface $voucher)
    {
        $this->voucher=$voucher;
    }
    public function index(){
        $vouchers = $this->voucher->getAll();
        return view('cms.modules.voucher.index',compact('vouchers'));
    }
    public function create(){
        return view('cms.modules.voucher.create');
    }
    public function edit($id){
        $vouchers = $this->voucher->edit($id);
        return view('cms.modules.voucher.edit', compact('vouchers'));
    }
    public function store(Request $request){
        $this->voucher->store($request);
        return redirect()->route('voucher.index');
    }
    public function update(Request $request, $id){
        $this->voucher->update($request,$id);
        return redirect()->route('voucher.index');
    }
    public function delete($id){
        $this->voucher->delete($id);
        return redirect()->route('voucher.index');
    }
}
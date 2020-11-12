<?php
namespace App\Respositories\voucher;

use App\Respositories\BaseRepositoryAbstract;
use App\Respositories\voucher\VoucherRespositoryInterface;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherRespository extends BaseRepositoryAbstract implements VoucherRespositoryInterface{
    public function getAll(){
        return Voucher::all();
    }
    public function create()
    {

    }
    public function edit($id)
    {
        return Voucher::find($id);
    }
    public function store(Request $request)
    {
        $vouchers = new voucher;
        $vouchers->code=$request->code;
        $vouchers->start_time=$request->start_time;
        $vouchers->end_time=$request->end_time;
        $vouchers->limit=$request->limit;
        $vouchers->quantity=$request->quantity;
        $vouchers->save();
    }

    public function update(Request $request, $id)
    {
        $vouchers = $this->model->find($id);
        $vouchers->code=$request->code;
        $vouchers->start_time=$request->start_time;
        $vouchers->end_time=$request->end_time;
        $vouchers->limit=$request->limit;
        $vouchers->quantity=$request->quantity;
        $vouchers->save();
    }

    public function delete($id){
        return Voucher::destroy($id);
    }
}
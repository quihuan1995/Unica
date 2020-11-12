<?php
namespace App\Respositories\customer;

use App\Repositories\BaseRepositoryAbstract;
use App\Respositories\customer\CustomerRespositoryInterface;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class CustomerRespository extends BaseRepositoryAbstract implements CustomerRespositoryInterface {
    public function getAll(){
        return Customer::paginate(10);
    }
    public function create()
    {
        
    }
    public function edit($id)
    {

    }
    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id){

    }
}
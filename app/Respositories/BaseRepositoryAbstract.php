<?php
namespace App\Repositories;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class BaseRepositoryAbstract implements BaseRepositoryInterface {
    protected $model;

     /**
     * {@inheritdoc}
     */
    public function __construct(Model $model){
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function findAllWithDatatable(Request $request){
        // dd($request);
        $skip = (int) isset($request->start) ? $request->start : 0;
        $limit = (int) isset($request->length) ? $request->length : 10 ;

        $query = $this->model;
        $recordsTotal = $query->count();

        if (isset($request->search["value"])) {
          $query = $query->where("full_name", "like", '%'.$request->search["value"].'%');
        }

        $data = $query->skip($skip)->limit($limit)->get();
        $recordsFiltered = $query->count();
        return \compact("recordsTotal", "data", "recordsFiltered");
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }
    public function edit($id){

    }
    public function create(){

    }
}
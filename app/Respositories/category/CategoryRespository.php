<?php
namespace App\Repositories\Category;

use App\Repositories\Category\CategoryRespositoryInterface;
use App\Models\Category;
use App\Repositories\BaseRepositoryAbstract;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class CategoryRespository extends BaseRepositoryAbstract implements CategoryRespositoryInterface{
    protected $model;

     /**
     * {@inheritdoc}
     */
    public function __construct(Model $model){
        $this->model = $model;
    }
    public function getAll(){
        return Category::all();
    }
    public function create()
    {
        return Category::all();
    }
    public function edit($id)
    {
        return Category::find($id);
    }
    public function store(Request $request)
    {
        $category=$request->all();
        $category['slug'] = Str::slug(isset($request->slug) ? $request->slug : $request->name,'-');
        return Category::create($category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name=$request->name;
        $category->slug = Str::slug(isset($request->slug) ? $request->slug : $request->name,'-');
        $category->description=$request->description;
        $category->save();
    }

    public function delete($id){
        return Category::destroy($id);
    }
    public function findAllWithDatatableCategory(Request $request){
        $skip = (int) isset($request->start) ? $request->start : 0;
        $limit = (int) isset($request->length) ? $request->length : 10 ;

        $query = $this->model;
        $recordsTotal = $query->count();

        if (isset($request->search["value"])) {
          $query = $query->where("name", "like", '%'.$request->search["value"].'%');
        }

        $data = $query->skip($skip)->limit($limit)->get();
        $recordsFiltered = $query->count();
        return \compact("recordsTotal", "data", "recordsFiltered");
    }
}
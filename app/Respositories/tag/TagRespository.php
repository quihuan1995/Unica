<?php
namespace App\Repositories\Tag;

use App\Repositories\BaseRepositoryAbstract;
use App\Repositories\Tag\TagRespositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class TagRespository extends BaseRepositoryAbstract implements TagRespositoryInterface{
    protected $model;
    
     /**
     * {@inheritdoc}
     */
    public function __construct(Model $model){
        $this->model = $model;
    }
     public function getAll(){
        return Tag::all();
    }

    public function create()
    {

    }

    public function edit($id){
        return Tag::find($id);
    }

    public function store(Request $request){
        $tag=$request->all();
        $tag['slug'] = Str::slug($request->title, '-');
        return Tag::create($tag);
    }

    public function update(Request $request, $id){
        $tag = $this->model->find($id);
        $tag->title = $request->title;
        $tag->slug = Str::slug($request->title, '-');
        $tag->category_id=$request->category_id;
        $tag->save();
    }

    public function delete($id){
        return Tag::destroy($id);
    }
    public function findAllWithDatatableTag(Request $request){
        $skip = (int) isset($request->start) ? $request->start : 0;
        $limit = (int) isset($request->length) ? $request->length : 10 ;

        $query = $this->model;
        $recordsTotal = $query->count();

        if (isset($request->search["value"])) {
          $query = $query->where("title", "like", '%'.$request->search["value"].'%');
        }

        $data = $query->skip($skip)->limit($limit)->get();
        $recordsFiltered = $query->count();
        return \compact("recordsTotal", "data", "recordsFiltered");
    }
}
<?php
namespace App\Repositories\menu;
use App\Repositories\menu\MenuItemReposiroryInterface;
use App\Repositories\BaseRepositoryAbstract;
use App\Models\MenuItems;
use Illuminate\Http\Request;

class MenuItemRepository extends BaseRepositoryAbstract implements MenuItemReposiroryInterface
{
    public function getAll(){
        return MenuItems::all();
    }
    public function findById($id){
        return MenuItems::find($id);
    }
    public function store(Request $request){
        return MenuItems::create($request);
    }
    public function update(Request $request, $id){
        $result = MenuItems::find($id);
        if($result){
            $result->update($request);
            return $result;
        }
            return false;

    }
    public function delete($id){
        return MenuItems::destroy($id);
    }

    public function getRootItemMenuById($id)
    {
        return $this->model->where("parent_id", null)->where("menu_id", $id)->with("childrend")->get();
    }
    public function findLink($id){
        return MenuItems::where('link',$id)->first();
    }
}

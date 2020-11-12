<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddMenuRequest;
use App\Repositories\menu\{MenuRepositoryInterface,MenuItemReposiroryInterface,MenuLocationReposiroryInterface};
use App\Repositories\Category\CategoryRespositoryInterface;
use App\Repositories\Tag\TagRespositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\EditMenuRequest;
use App\Models\{MenuLocation, MenuItems};
// use App\Repositories\menu\MenuItemReposiroryInterface as MenuMenuItemReposiroryInterface;
use Illuminate\Support\Facades\DB;

class MenusController extends Controller
{
    private $menu,$category,$tag,$menuItem;
    public function __construct(MenuRepositoryInterface $menu,
                                CategoryRespositoryInterface $category,
                                TagRespositoryInterface $tag,
                                MenuItemReposiroryInterface $menuItem
    )
    {
        $this->menu = $menu;
        $this->category = $category;
        $this->tag = $tag;
        $this->menuItem = $menuItem;

    }

    public function index(){
        $menus = $this->menu->getAll();
        return view('cms.modules.menus.index',compact('menus'));
    }

    public function create(){
        return view('cms.modules.menus.create');
    }
    public function store(AddMenuRequest $request){
        $getid=$this->menu->store($request);
        $notification = array(
            'message' => 'Create success',
            'alert-type' => 'success'
        );
        switch($request->submit) {
            case 'save':
                return redirect()->route('menus.index')->with($notification);   break;
            case 'save and edit':
                return redirect()->route('menus.edit',['id'=>$getid])->with($notification); break;
        }
    }

    public function edit($id){
        $menu = $this->menu->findById($id);
        $categories=$this->category->getAll();
        $tags=$this->tag->getAll();
        $items=$this->menuItem->getRootItemMenuById($id);
        $menu_location=$this->menu->getMenuLocation($id);
        return view('cms.modules.menus.edit',compact('menu','categories','tags','items','menu_location'));
    }

    public function update(Request $request,$id){   
        $item=$request->menu;
        $arr=json_decode($request->parent_id,true);
        $item[2]['parent_id']=1;
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
        echo $arr[0]['children'][0]['children'][0]['children'][0]['id'];
        //$this->menu->update($request,$id);
        // $notification = array(
        //     'message' => 'Edit success',
        //     'alert-type' => 'success'
        // );
        // switch($request->submit) {
        //     case 'save':
        //         return redirect()->route('menus.index')->with($notification);   break;
        //     case 'save and edit':
        //         return redirect()->route('menus.edit',['id'=>$id])->with($notification); break;
        // }
    }

    public function delete($id){
        $this->menu->delete($id);
        return redirect()->route('menus.index')->with('delete','-');
    }

}
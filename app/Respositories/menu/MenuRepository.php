<?php
namespace App\Repositories\menu;
use App\Repositories\menu\MenuRepositoryInterface;
use App\Models\Menu;
use App\Models\MenuItems;
use App\Models\MenuLocation;
use App\Repositories\BaseRepositoryAbstract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuRepository extends BaseRepositoryAbstract implements MenuRepositoryInterface
{
    protected $model;
     /**
     * {@inheritdoc}
     */
    public function __construct(Model $model){
        $this->model = $model;
    }
    public function getAll(){
        return Menu::all();
    }
    public function create()
    {
    }
    public function edit($id)
    {
        return Menu::find($id);
    }
    public function store(Request $request){
        $menu=$request->all();
        $menu['slug']=Str::slug($request->name,'-');
        $getid=Menu::create($menu);
        $insertedId = $getid->id;
        $menu_location1 = new MenuLocation();
        $menu_location1->menu_id = $insertedId;
        $menu_location1->status=false;
        $menu_location1->location = 'menu_slide';
        $menu_location1->save();
        $menu_location2 = new MenuLocation();
        $menu_location2->menu_id = $insertedId;
        $menu_location2->status=false;
        $menu_location2->location = 'menu_footer_left';
        $menu_location2->save();
        $menu_location3 = new MenuLocation();
        $menu_location3->menu_id = $insertedId;
        $menu_location3->status=false;
        $menu_location3->location = 'menu_footer_right';
        $menu_location3->save();
        return $insertedId;


    }
    public function update(Request $request,$id){
        $menu = Menu::find($id); 
        $menu->name= $request->name;
        $menu->slug=Str::slug($request->name,'-');
        $menu->save();        
        if (isset($request->location))
        {
            if(in_array("menu_slide", $request->location)){
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_slide')->first();
                $menu_location->status=1;
                $menu_location->save();
            }
            else{
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_slide')->first();
                $menu_location->status=0;
                $menu_location->save();
            }
            if (in_array("menu_footer_left", $request->location))
            {
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_left')->first();
                $menu_location->status=1;
                $menu_location->save();
            }else{
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_left')->first();
                $menu_location->status=0;
                $menu_location->save();
            }
            if (in_array("menu_footer_right", $request->location))
            {
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_right')->first();
                $menu_location->status=1;
                $menu_location->save();
            }else{
                $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_right')->first();
                $menu_location->status=0;
                $menu_location->save();
            }
        }else{
            $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_slide')->first();
            $menu_location->status=0;
            $menu_location->save();
            $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_left')->first();
            $menu_location->status=0;
            $menu_location->save();
            $menu_location = MenuLocation::where('menu_id',$id)->where('location','menu_footer_right')->first();
            $menu_location->status=0;
            $menu_location->save();
        }
        
      }
    public function delete($id){
        return Menu::destroy($id);
    }
    public function getMenuItem($id){
        return $this->model->with("items")->get();
    }
    public function getMenuLocation($id){
        return MenuLocation::where('menu_id',$id)->get();
    }
}
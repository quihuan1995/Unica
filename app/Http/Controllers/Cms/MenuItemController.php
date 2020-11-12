<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Repositories\menu\MenuItemReposiroryInterface;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    private $menuitem;
    public function __construct(MenuItemReposiroryInterface $menuitem)
    {
        $this->menuitem = $menuitem;
    }
    public function store(Request $request){
        // $menuitem= $request->all();
        // $menuitem['menu_id']=1;
        // $menuitem['parent_id']=null;
        $this->menuitem->store($request);
        return redirect()->back();
    }
    public function delete($id){
        $this->menuitem->delete($id);
        return redirect()->route('menu.edit');
    }
}
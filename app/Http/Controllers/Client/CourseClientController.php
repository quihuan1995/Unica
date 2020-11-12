<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\menu\MenuItemReposiroryInterface;
use Illuminate\Http\Request;

class CourseClientController extends Controller
{
    private $menuitem;
    public function __construct(MenuItemReposiroryInterface $menuitem)
    {
        $this->menuitem = $menuitem;
    }
    public function course($id){
        $menuitem=$this->menuitem->findLink($id);
        return view('client.modules.course.course',compact('menuitem'));
    }
    public function detail(){
        return view('client.modules.course.detail');
    }
}

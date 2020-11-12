<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Repositories\menu\MenuItemReposiroryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menuitem;
    public function __construct(MenuItemReposiroryInterface $menuitem)
    {
        $this->menuitem = $menuitem;
    }
    public function Home(){
        $menuitems = $this->menuitem->getAll()->where('parent_id',null);
        return view('client.home',compact('menuitems'));
    }
}
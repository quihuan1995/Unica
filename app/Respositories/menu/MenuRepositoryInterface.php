<?php 
namespace App\Repositories\menu;
use App\Repositories\BaseRepositoryInterface;
interface MenuRepositoryInterface extends BaseRepositoryInterface{
    public function getMenuItem($id);
    public function getMenuLocation($id);
}
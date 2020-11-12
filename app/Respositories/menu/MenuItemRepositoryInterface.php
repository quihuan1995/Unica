<?php
namespace App\Repositories\menu;
use App\Repositories\BaseRepositoryInterface;

interface MenuItemReposiroryInterface extends BaseRepositoryInterface {

    public function getRootItemMenuById($id);
    public function findLink($id);
}
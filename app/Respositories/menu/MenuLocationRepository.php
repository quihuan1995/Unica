<?php
namespace App\Repositories\menu;
use App\Repositories\menu\MenuLocationReposiroryInterface;
use App\Models\MenuLocation;

class MenuLocationRepository implements MenuLocationReposiroryInterface
{
        public function all(){
        return MenuLocation::all();
    }

    public function store(array $data){
        return MenuLocation::create($data);
    }
    public function update($id, array $data){
        $result = MenuLocation::find($id);
        if($result){
            $result->update($data);
            return $result;
        }
            return false;

    }
    public function delete($id){
        return MenuLocation::destroy($id);
    }
    
}
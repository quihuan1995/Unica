<?php
namespace App\Repositories\role;

use Illuminate\Http\Request;

interface RoleRespositoryInterface{
    public function getAll();
    public function storeRole(Request $request);
    public function editRole($id);
    public function updateRole(Request $request,$id);
}
?>

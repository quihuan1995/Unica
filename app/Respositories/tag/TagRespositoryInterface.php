<?php
namespace App\Repositories\Tag;
use App\Repositories\BaseRepositoryInterface;
use Illuminate\Http\Request;
interface TagRespositoryInterface extends BaseRepositoryInterface{
    public function findAllWithDatatableTag(Request $request);
    
}
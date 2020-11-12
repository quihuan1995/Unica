<?php
namespace App\Repositories\Category;
use Illuminate\Http\Request;

use App\Repositories\BaseRepositoryInterface;

interface CategoryRespositoryInterface extends BaseRepositoryInterface{
    public function findAllWithDatatableCategory(Request $request);
}
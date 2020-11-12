<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRespositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    private $category;
    public function __construct(CategoryRespositoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = $this->category->getAll();
        return view('cms.modules.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('cms.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCategoryRequest $request){
        $getid=$this->category->store($request);
        $insertedId = $getid->id;
        $notification = array(
            'message' => 'Create success',
            'alert-type' => 'success'
        );

        switch($request->submitbutton) {
            case 'save':
                return redirect()->route('category.index')->with($notification);   break;
            case 'save and edit':
                return redirect()->route('category.edit',['id'=>$insertedId])->with($notification); break;
        }
    }
    /**
     * Show the form for editting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $category=$this->category->edit($id);
        return view('cms.modules.category.edit',compact('category')) ;
    }
    /**
     * Update into the specified resource   .
     *
     * @param  \Illuminate\Http\Request  $request, int $id.
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoryRequest $request,$id){
        $this->category->update($request,$id);
        $notification = array(
            'message' => 'Edit success',
            'alert-type' => 'success'
        );

        switch($request->submitbutton) {
            case 'save':
                return redirect()->route('category.index')->with($notification);   break;
            case 'save and edit':
                return redirect()->route('category.edit',['id'=>$id])->with($notification); break;
        }

        return redirect()->route('category.index')->with('edit','-');
    }
     /**
     * Delete the specified resource.
     *
     * @param  int $id.
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $this->category->delete($id);
        $notification = array(
            'message' => 'Delete success',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
}
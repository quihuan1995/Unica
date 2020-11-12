<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddTagRequest;
use App\Http\Requests\EditTagRequest;
use App\Repositories\Tag\TagRespositoryInterface;
use App\Repositories\Category\CategoryRespositoryInterface;


//không paginate đc
class TagController extends Controller
{
    protected $tag;
    protected $category;

    public function __construct(TagRespositoryInterface $tag, CategoryRespositoryInterface $category)
    {
        $this->tag = $tag;
        $this->category = $category;
    }
    /**
     * Hiển thị danh sách tag ra view index.
     *
     *@return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $tags = $this->tag->getAll();
        return view('cms.modules.tag.index', compact('tags'));
    }

    /**
     * Chuyển đến view create để thêm tag.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        $categories = $this->category->getAll();
        return view('cms.modules.tag.create', compact('categories'));
    }

    /**
     * Lưu tag vào csdl.
     *@param \App\Http\Requests\AddTagRequest $request
     *@return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(AddTagRequest $request)
    {
        $getid=$this->tag->store($request);
        $insertedId = $getid->id;
        $notification = array(
            'message' => 'Create success',
            'alert-type' => 'success'
        );
        switch ($request->submitbutton) {
            case 'save':
                return redirect()->route('tag.index')->with($notification);
                break;
            case 'save and edit':
                return redirect()->route('tag.edit',['id'=>$insertedId])->with($notification);
                break;
        }
    }

    /**
     * Chuyển đến view edit để thêm tag.
     *@param int $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit($id)
    {
        $tag = $this->tag->edit($id);
        $categories = $this->category->getAll();
        return view('cms.modules.tag.edit', compact('tag', 'categories'));
    }

    /**
     * Update tag trong csdl.
     *@param EditTagRequest $request
     *@param int $id
     *@return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function update(EditTagRequest $request, $id)
    {
        $notification = array(
            'message' => 'Edit success',
            'alert-type' => 'success'
        );
        $this->tag->update($request, $id);
        switch ($request->submitbutton) {
            case 'save':
                return redirect()->route('tag.index')->with($notification);
                break;
            case 'save and edit':
                return redirect()->route('tag.edit', ['id' => $id])->with($notification);;
                break;
        }
    }

    /**
     * Chuyển đến view edit để thêm tag.
     *@param int $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function delete($id)
    {
        $this->tag->delete($id);
        $notification = array(
            'message' => 'Delete success',
            'alert-type' => 'success'
        );
        return redirect()->route('tag.index')->with($notification);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(): View
    {
        // DB에 있는 내용을 가져오고 저장.삭제.수정 해서 관리 가능
        // 인텐트 방식으로 속도가 빠름
        $categories = Category::orderby('title', 'asc')->get();
        return view('category.index')->with('categories', $categories);
    }
    public function view($id): View
    {
        // find = select*from categories where id=1;
        $category = Category::find($id);
        return view('category.view')->with('category', $category);
    }
    // Request :$_POST ,$_Get 방식을 다 받을 수 있음
    // title 과 save 만 줘도 자동으로 insert됨                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->save();
        //DB에 curd를 다 하고서 해당된 url로 이동함
        return redirect('/category');
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();
        //DB에 curd를 다 하고서 해당된 url로 이동함
        return redirect('/category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        //DB에 curd를 다 하고서 해당된 url로 이동함
        return redirect('/category');
    }
}

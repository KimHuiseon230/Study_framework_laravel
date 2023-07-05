<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index():View{
     // DB에 있는 내용을 가져오고 저장.삭제.수정 해서 관리 가능
     // 인텐트 방식으로 속도가 빠름
     return view('category.index');
    }
    public function view():View{
     return view('category.view');
    }
    // Request :$_POST ,$_Get 방식을 다 받을 수 있음
    public function store(Request $request):View{
        //DB에 curd를 다 하고서 해당된 url로 이동함
     return view('category.store');
    }
 }
 
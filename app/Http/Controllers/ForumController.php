<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class ForumController extends Controller
{
   public function index(): View
   {
      // DB에 있는 내용을 가져오고 저장.삭제.수정 해서 관리 가능
      return view('forum.index');
   }
   public function view(): View
   {
      return view('forum.view');
   }
   public function create(): View
   {
      $categories = Category::orderby('title', 'asc')->get();
      return view('forum.create')->with('categories', $categories);
   }
   // AJAX로 통신하는 방식임
   public function store(Request $request)
   {
      $post = new Post;
      $post->title = $request->title;
      $post->category_id = $request->category_id;
      $post->content = $request->content;
      $post->save();
      // 가져왔던 데이터를 다시 View에게 보내준다.
      $result = $request->all();
        $data = array('result' =>$result);
        return response()->json($data);
      // return view('forum.create')->with('categories', $categories);
     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ForumController extends Controller
{
   public function index(): View
   {
      // DB에 있는 내용을 가져오고 저장.삭제.수정 해서 관리 가능
      // 인텐트 방식으로 속도가 빠름
      return view('forum.index');
   }
   public function view(): View
   {
      return view('forum.view');
   }
   public function create(): View
   {
      return view('forum.create');
   }
}

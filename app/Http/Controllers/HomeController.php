<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Http\Request;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
  public function index()
  {
    // $category = DB::table('category')->where('status','0')->orderBy('id','desc')->select('*');
    // $category = $category->get();
    // return view('index',compact('category'));
  }
}

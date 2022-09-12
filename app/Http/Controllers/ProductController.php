<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function index() {
    $category = DB::table('category')->where('status', '0')->orderBy('id', 'desc')->select('*');
    $category = $category->get();
    $all_product = DB::table('product')
    ->where('status','=','0')
    ->join('size','size.id','=','project.id_size')
    ->orderBy('id','desc')
    ->limit(4)
    ->select('product.name','size.price');
    // return view('page/product');

    return view('page/product')
    ->with('category', $category)
    ->with('all_product', $all_product);
  }
}

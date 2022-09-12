<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminNewsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $category = DB::table('category')->where('status','0')->orderBy('id','desc')->select('*');
    $category = $category->get();

    $apple = DB::table('category')
      ->join('product', 'category.id', '=', 'product.id_cat')
      ->where('category.id', 'apsr6')->select('*');
      $apple = $apple->get();
      $pageName_apple = 'Apple Watch';
      
      
      $apple_size = DB::table('product')->join('size', 'size.id', '=', 'product.id_size')->where('size.id','=', 'product.id_size')->select('*');
      $apple_size = $apple_size->get();
      
      $samsung = DB::table('category')
      ->join('product', 'category.id', '=', 'product.id_cat')
      ->where('category.id', 'ssw5')->select('*');
      $samsung = $samsung->get();
      $pageName_samsung = 'SamSung Watch';

    // return view('index', compact('apple', 'pageName_apple'));     
    // return view('index', compact('apple_size'));
    // return view('index', compact('samsung', 'pageName_samsung'));
    return view('index')
    ->with('category',$category)
    ->with('apple',$apple,$pageName_apple)->with('pageName_apple',$pageName_apple)
    ->with('apple_size', $apple_size)
    ->with('samsung',$samsung,$pageName_samsung)->with('pageName_samsung', $pageName_samsung) ;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}

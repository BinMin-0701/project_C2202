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

    $apple = DB::table('category')
      ->join('product', 'category.id', '=', 'product.id_cat')
      ->where('category.id', 'apsr6')->select('*');
      $apple = $apple->get();
      $pageName_apple = 'Apple Watch';
    return view('index', compact('apple', 'pageName_apple'));     

    
    $apple_size = DB::table('product')->join('size', 'size.id', '=', 'product.id_size')->where('size.id', 'product.id_size')->select('*');
    $apple_size = $apple_size->get();
    return view('index', compact('apple_size'));
    
    $samsung = DB::table('category')
    ->join('product', 'category.id', '=', 'product.id_cat')
    ->where('category.id', 'ssw5')->select('*');
    $samsung = $samsung->get();
    $pageName_samsung = 'SamSung Watch';
    return view('index', compact('samsung', 'pageName_samsung'));

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

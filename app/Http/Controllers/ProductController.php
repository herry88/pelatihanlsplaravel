<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = Product::all();
        return view('layouts.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('layouts.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //fungsi untuk simpan data
        $pr = new Product();
        $pr->name_product = $request->input('name_product');
        $pr->description = $request->input('description');
        $pr->price = $request->input('price');
        $pr->stock = $request->input('stock');
        $pr->category_id = $request->input('category_id');
        if($pr->save()){
            return redirect()->route('product.index');
        } else{
            return redirect()->back();
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category = Category::all();
        $product = Product::find($id);
        return view('layouts.product.edit',compact('category','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        //function update product
=======
        //
>>>>>>> multiAuth
        $pr = Product::find($id);
        $pr->name_product = $request->input('name_product');
        $pr->description = $request->input('description');
        $pr->price = $request->input('price');
        $pr->stock = $request->input('stock');
        $pr->category_id = $request->input('category_id');
        if($pr->save()){
            return redirect()->route('product.index');
        } else{
            return redirect()->back();
        }
<<<<<<< HEAD

=======
>>>>>>> multiAuth
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //function untuk delete
        $p = Product::find($id);
        $p->delete();
        return redirect()->route('product.index');

    }
}

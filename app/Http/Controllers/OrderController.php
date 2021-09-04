<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['produks'] = Product::orderBy("name_product", "ASC")->get();
        $d['carts'] = Order::where('user_id', \Auth::user()->id)->where('status', 1)->orderBy("id", "DESC")->get();
        $d['totalCarts'] = Order::where("user_id", \Auth::user()->id)->where("status", 1)->sum('sub_total');
        return view("layouts.cart.index", $d);
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
        $h = Product::find($request->input("product_id"));

        $d = new Order;
        $d->product_id = $request->input("product_id");
        // if ($h->stok < $request->input("jumlah")) {
        //     return redirect()->route("transaksi.index")->with("alertBlock", "Stok hanya tersisa " . $h->stok);
        // }

        // if ($request->input("jumlah") < 1) {
        //     return redirect()->route("transaksi.index")->with("alertBlock", "Masukkan jumlah barang yang ingin Anda beli!");
        // }
        $d->jumlah = $request->input("jumlah");
        $d->user_id = \Auth::user()->id;


        $d->sub_total = $request->input("jumlah");
        $d->status = 1;


        $d->save();
        // dd($d);

        return redirect()->route("transaksi.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

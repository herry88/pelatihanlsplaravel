<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ApiProductController extends Controller
{
    //
    public function index(){
        return Product::with('category')->get()->toArray();


    }
}

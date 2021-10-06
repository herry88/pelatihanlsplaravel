<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    //get-all category Data
    public function index(){
        return Category::all();
    }
}

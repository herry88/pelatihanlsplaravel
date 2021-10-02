<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
>>>>>>> multiAuth

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
    }
=======
        //passing data user, categories, product
        $d['categories'] = Category::count();
        $d['product'] = Product::count();
        $d['user'] = User::count();
        return view('home', $d);
    }


>>>>>>> multiAuth
}

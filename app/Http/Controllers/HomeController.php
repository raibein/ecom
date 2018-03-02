<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        //$this->middleware('auth');
        return view('front.welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }   




    //Shop page
    public function shop()
    {
        $products = Product::all();

        //$products = "Hello hello";

        return view('front.shop', compact('products'));
    }


    #Product detail page
    public function product_detail($id)
    {
        $product = Product::findOrFail($id);

        return view('front.product_detail', compact('product'));
    }


}

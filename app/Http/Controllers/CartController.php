<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DATABASE;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(){
    	$cartItems = Cart::content();

    	return view('cart.index', compact('cartItems'));
    }

    public function addItem($id){
    	echo $id;

    	$product = Product::find($id);

    	Cart::add('$product->pro_name', '$product->pro_id', '$product->pro_price');

    // 	Cart::add(
    //   		'$product->pro_name',
    //   		'$id',
    //   		1,
    //   		'$product->pro_price',
  		// );
    }
}

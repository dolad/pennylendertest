<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Wallet;


class ProductController extends Controller
{
    public function index(){
        $user=Auth::user()->id;
        $products=Product::all();
        $wallets=Wallet::where('user_id', $user)->get();

        return view('admin', compact('products', 'wallets'));
    }
}

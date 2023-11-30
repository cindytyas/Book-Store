<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        $product = Product::all();
        $transaksiCount = Transaction::where('user_id', Auth::user()->id)->count();

        return view('user.home', compact('product', 'transaksiCount'));
    }
}

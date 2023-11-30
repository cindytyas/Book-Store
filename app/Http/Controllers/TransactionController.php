<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $product = Product::find($request->product_id);
        $hargaProduk = $product->harga;

        Transaction::create([
            'user_id' => $user,
            'product_id' => $request->product_id,
            'qty' => 1,
            'total_price' => $hargaProduk,
            'status' => 'pembayaran',
        ]);

        return redirect()->route('user.index')->with('success', 'Anda berhasil menambahkan product tersebut ke keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Transaction::findOrFail($id)->delete();

        return redirect()->back();
    }
}

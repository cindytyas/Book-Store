<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.products.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['gambar'] = $request->file('gambar')->store('products', 'public');

        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);

        $categories = Category::all();
        return view('admin.products.edit', [
            'title' => 'Edit Data',
            'products' => $products,
            'categories' => $categories 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if(!empty($data['gambar'])) {
            $data['gambar'] = $request->file('gambar')->store('product', 'public');
        } else {
            unset($data['gambar']);
        }

        Product::findOrFail($id)->update($data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete($product->gambar);
        $product->delete();

        return redirect()->back();
    }
}

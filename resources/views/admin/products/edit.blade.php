@extends('layouts.nav-admin')

@section('content')
    <div class="container">
        <h4 class="mb-5">Edit Data</h4>

        <form action="{{ route('product.update', $products->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" accept="image/*" name="gambar" class="form-control" id="image">
                <span class="text-secondary">If you don't want to change the image, don't fill it in!</span>
            </div>
            <div class="mb-3">
                <label for="name">Name Product</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $products->name }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" name="harga" class="form-control" id="price" value="{{ $products->harga }}">
            </div>
            <div class="mb-3">
                <label for="stock">Stock</label>
                <input type="number" name="qty" class="form-control" id="stock" value="{{ $products->qty }}">
            </div>
            <div class="mb-3">
                <label for="Genre">Pilih Genre</label>
                <select name="category_id" class="form-select" aria-label="Default select example">
                    <option selected>--- Pilih ---</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-primary px-3" type="submit">Save</button>
                <a href="{{ route('product.index') }}" class="btn btn-light px-3">Back</a>
            </div>
        </form>
    </div>
@endsection

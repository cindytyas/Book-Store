@extends('layouts.nav-admin')

@section('content')
    <div class="container">
        <h4 class="mb-2">All Data Products</h4>
        <a href="{{ route('product.create') }}" class="btn btn-primary px-4">Create New Data</a>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Genre</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <img src="{{ url('storage/' . $product->gambar) }}"
                                    style="width: 50px; height: 50px; object-fit: cover" alt="">
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                Rp. {{ number_format($product->harga) }}
                            </td>
                            <td>
                                {{ number_format($product->qty) }}
                            </td>
                            <td>
                                <p class="d-inline-block text-truncate" style="max-width:100px;">
                                    {{ $product->category->name }}
                                </p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-warning btn-sm text-white">Edit</a>

                                    <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="confirm('Are you sure you want to delete this data?')">delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

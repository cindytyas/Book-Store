@extends('layouts.nav-admin')

@section('content')
    <div class="container">
        <h4 class="mb-5">Add New Transaction</h4>

        <form action="{{ route('transaction.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="product">Pruduct</label>
                <select name="product_id" id="product" class="form-control" required>
                    @foreach ($products as $item)
                        <option value="{{ $item->id }}">{{ $item->name }} ({{ $item->stock }})</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity" required>
            </div>

            @if (session('error'))
                <div class="alert alert-danger mb-3">
                    {{ session('error') }}
                </div>
            @endif
            <div class="d-flex align-items-center gap-2">
                <button class="mt-3 btn btn-primary btn-sm px-3" type="submit">Save</button>
                <a href="{{ route('transaction.index') }}" class="mt-3 btn btn-sm btn-light px-3">Back</a>
            </div>
        </form>
    </div>
@endsection

@extends('layouts.nav-admin')

@section('content')
    <div class="container">
        <h4 class="mb-2">Transaction</h4>
        <a href="{{ route('transaction.create') }}" class="btn btn-primary px-4">Create New Transaction</a>

        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($transaction as $item)
                        <tr>
                            <td>
                                {{ $item->products->name }}
                            </td>
                            <td>
                                {{ number_format($item->quantity) }}
                            </td>
                            <td>
                                <p class="d-inline-block text-truncate" style="max-width:100px;">
                                    {{ $item->users->name }}
                                </p>
                            </td>
                            <td>
                                <form action="{{ route('transaction.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit"
                                        onclick="confirm('Are you sure you want to delete this data?')">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.admin')
@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="/admin/product/create"><i class="text-white bi bi-plus-square"></i> Add
                Product</a>
        </div>
        <div class="card-body">
            @if ($products->count())
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">No.</th>
                                <th class="text-center" scope="col">name</th>
                                <th class="text-center" scope="col">Price</th>
                                <th class="text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>@idrCurrency($product->price)</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="/admin/product/{{ $product->id }}"
                                                class="px-2 p-0 mx-1  btn btn-warning">
                                                <p class="m-0">view</p>
                                            </a>
                                            <a href="/admin/product/{{ $product->id }}/edit"
                                                class="px-2 p-0 mx-1  btn btn-primary">
                                                <p class="m-0">edit</p>
                                            </a>
                                            <form action="/admin/product/{{ $product->id }}" method="post"
                                                class="d-inline-block p-0">
                                                @method('delete')
                                                @csrf
                                                <button class="px-2 p-0 mx-1 btn btn-danger"
                                                    onclick="return confirm('Are you sure?')">
                                                    <p class="m-0">delete</p>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h3 class="text-center mt-4 mb-5">Product not found!</h3>
            @endif
        </div>
    </div>
@endsection

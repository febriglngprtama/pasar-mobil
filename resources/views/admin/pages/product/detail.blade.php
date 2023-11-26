@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-6">
            <h1>{{ $product->package }}</h1>
            <div class="row-button d-flex mb-2">
                <div class="btn btn-secondary me-2" onclick="history.back()">

                    back
                </div>
                <div class="btn btn-primary me-2">
                    <a href="/admin/product/{{ $product->id }}/edit" class="text-decoration-none text-white">
                        <i class="bi bi-pencil-square"></i>
                        edit
                    </a>
                </div>
            </div>
            <h1>{{$product->name}}</h1>
            <h3>@idrCurrency($product->price)</h3>
            <img src="{{ asset('storage/' . $product->image) }}" frameborder="0">
            <p class="my-1 text-dark fs-4">description</p>
            <p class="mt-2 mb-3 text-dark">{!! $product->description !!}</p>
        </div>
    </div>
@endsection

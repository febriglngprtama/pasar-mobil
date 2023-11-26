@extends('layouts.app')
@section('content')
    <div class="products-area-pages">
        <div class="container">
            <div class="row d-flex">
                @foreach ($products as $product)
                    <div class="col-md-4 ">
                        <div class="products shadow">
                            <div class="square-4">
                                @if ($product->image)
                                    <img class="img-product" src="{{ asset('storage/' . $product->image) }}" />
                                @else
                                    <img class="img-product" src="/img/4.jpg" />
                                @endif
                            </div>
                            <h4 class="title-products">
                                {{ $product->name }}
                            </h4>
                            <div class="content-products text-trucation-2">
                                {!! $product->description !!}
                            </div>
                            <div class="btn-products d-flex">
                                <p class="price-products text-center">@idrCurrency($product->price)</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

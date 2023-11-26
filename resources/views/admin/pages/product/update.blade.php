@extends('layouts.admin')

@section('content')
    <form class="user" action="/admin/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group row">
            {{-- name --}}
            <div class="col-lg-4 col-12 mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="name" required value="{{ old('name', $product->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Price --}}
            <div class="col-lg-4 col-12 mb-3">
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" placeholder="Price" required value="{{ old('price', $product->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Image --}}
            <div class="col-lg-8 col-12 mb-3">
                <input type="hidden" name="oldImage" value="{{ $product->image }}">
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" placeholder="image" onchange="previewImage()">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="user-avatar"
                        class="d-block img-preview rounded d-block mt-3" id="uploadedAvatar">
                @else
                    <img src="/img/1.jpg" alt="user-avatar" class="mt-3 rounded img-preview d-block d-block"
                        id="uploadedAvatar">
                @endif
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Description --}}
            <div class="col-lg-8 col-12 mb-3">
                <input type="hidden" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" placeholder="Description" required
                    value="{{ old('description', $product->description) }}">
                <trix-editor input="description"></trix-editor>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-8 col-12 mb-3">
                <button class="w-100 btn btn-primary btn-block" type="submit">Update Product
                </button>
            </div>
        </div>
    </form>
@endsection

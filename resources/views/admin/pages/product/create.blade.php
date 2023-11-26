@extends('layouts.admin')

@section('content')
    <form class="product" action="/admin/product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <div class="col-lg-8 col-12 mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-8 col-12 mb-3">
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" placeholder="image" required value="{{ old('image') }}" onchange="previewImage()">
                <img src="/img/1.jpg" class="rounded mt-3 img-preview" alt="">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- Price --}}
            <div class="col-lg-8 col-12 mb-3">
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" placeholder="Price" required value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-8 col-12 mb-3">
                <label for="description">Description</label>
                <input type="hidden" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" placeholder="Description" required value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-8 col-12 mb-3">
                <button class="w-100 btn btn-primary btn-block" type="submit">Create Product
                </button>
            </div>
        </div>
    </form>
@endsection

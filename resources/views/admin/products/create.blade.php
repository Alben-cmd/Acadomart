@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('products') }}" class="btn btn-xs btn-danger float-right">Cancel</a>
        {{ __('Add A Product') }}
    </div>

    <div class="card-body">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="productName" aria-describedby="productName">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" aria-describedby="description"></textarea>
                @error('description')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="price" aria-describedby="price">
                <div id="price" class="form-text text-info">Amount in Naira.</div>
                @error('price')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="business" class="form-label">Business</label>
                <select name="business" value="{{ old('business') }}" class="form-control">
                    <option value="">---</option>
                    @foreach( $businesses as $key => $business)
                        <option value="{{ $business->id }}">{{ $business->name }}</option>
                    @endforeach
                </select>
                <div id="business" class="form-text text-info">This product belongs to who?</div>
                @error('business')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="coverImage" class="form-label">Cover Image</label>
                <input type="file" name="cover_image" class="form-control" id="coverImage" aria-describedby="price">
                <div id="coverImage" class="form-text text-info">Upload cover image for business</div>
                @error('cover_image')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</div>
    
@endsection

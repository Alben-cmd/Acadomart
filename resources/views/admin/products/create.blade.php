@extends('layouts.admin')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('products') }}" class="btn btn-xs btn-danger float-right">Cancel</a>
                {{ __('Add A Product') }}
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('store.product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" id="productName" aria-describedby="productName">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" aria-describedby="description"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="number" class="form-control" id="price" aria-describedby="price">
                        <div id="price" class="form-text text-info">Amount in Naira.</div>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="business" class="form-label">Business</label>
                        <select name="business" class="form-control">
                            <option>---</option>
                        </select>
                        <div id="business" class="form-text text-info">This product belongs to who?</div>
                        @error('business')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="coverImage" class="form-label">Cover Image</label>
                        <input type="file" name="cover_image" class="form-control" id="coverImage" aria-describedby="price">
                        <div id="coverImage" class="form-text text-info">Upload cover image for business</div>
                        @error('cover_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection

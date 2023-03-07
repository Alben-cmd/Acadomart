@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('businesses') }}" class="btn btn-xs btn-danger float-right">Cancel</a>
        {{ __('Add A Business') }}
    </div>

    <div class="card-body">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <form method="POST" action="{{ route('store.business') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="businessName" class="form-label">Business Name</label>
                <input type="text" name="name" class="form-control" id="businessName" aria-describedby="businessName">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                @error('name')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="address" aria-describedby="address">
                @error('address')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" name="link" class="form-control" id="link" aria-describedby="link">
                <div id="link" class="form-text text-danger">Only add link if you want business to point outside our website.</div>
                @error('link')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="coverImage" class="form-label">Cover Image</label>
                <input type="file" name="cover_image" class="form-control" id="link" aria-describedby="link">
                <div id="coverImage" class="form-text text-info">Upload cover image for business</div>
                @error('cover_image')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Add Business</button>
        </form>
    </div>
</div>
    
@endsection

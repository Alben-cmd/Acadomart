@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('add.product') }}" class="btn btn-xs btn-primary float-right">Add New Product</a>
        {{ __('All Products') }}
    </div>

    <div class="card-body">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        
        <table class="table table-striped">
            <thead>     
                <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Owner</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody> 
                @foreach($products as $key => $product)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>Owner</td>
                        <td>
                            <a href="{{ route('edit.product', ['slug' => $product->slug]) }}">Edit</a>
                            |
                            @if($product->status)
                                <a href="{{ route('disable.product', ['slug' => $product->slug]) }}" class="text-danger">Disable</a>
                            @else
                                <a href="{{ route('enable.product', ['slug' => $product->slug]) }}" class="text-success">Enable</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>    
@endsection

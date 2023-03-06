@extends('layouts.admin')

@section('content')
        <div class="col-md-8">
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
                                        <a href="http://" class="text-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
@endsection

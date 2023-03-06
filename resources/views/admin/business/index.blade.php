@extends('layouts.admin')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('add.business') }}" class="btn btn-xs btn-primary float-right">Add New Business</a>
                    {{ __('All Businesses') }}
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
                                <th>Business Name</th>
                                <th>Address</th>
                                <th>Website</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody> 
                            @foreach($businesses as $key => $business)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $business->name }}</td>
                                    <td>{{ $business->address }}</td>
                                    <td><a href="{{ $business->link }}" class="text-info" target="_blank">{{ $business->link }}</a></td>
                                    <td>
                                        <a href="{{ route('edit.business', ['slug' => $business->slug]) }}">Edit</a>
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

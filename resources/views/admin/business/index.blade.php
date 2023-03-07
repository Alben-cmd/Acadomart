@extends('layouts.admin')

@section('content')
        
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
                            @if($business->status)
                                <a href="{{ route('disable.business', ['slug' => $business->slug]) }}" class="text-danger">Disable</a>
                            @else
                                <a href="{{ route('enable.business', ['slug' => $business->slug]) }}" class="text-success">Enable</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection

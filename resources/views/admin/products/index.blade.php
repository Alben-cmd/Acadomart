@extends('layouts.admin')

@section('content')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('add.product') }}" class="btn btn-xs btn-primary float-right">Add New Product</a>
                    {{ __('All Products') }}
                </div>

                <div class="card-body">
                <table class="table table-striped">
                    <thead>     
                        <tr>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody> 
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    
@endsection

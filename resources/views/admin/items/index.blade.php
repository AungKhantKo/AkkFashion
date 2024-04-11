@extends('layouts.admin')
@section('content')
    <!-- @php
        var_dump($items)
    @endphp -->
    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Items</h3>
            <a href="{{route('backend.items.create')}}" class="btn btn-primary float-end">Add Item</a>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>CodeNo</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>InStock</th>
                            <th>Action</th>
                        </tr>    
                    </thead>
                    <tfoot>
                        <tr>
                            <th>CodeNo</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>InStock</th>
                            <th>Action</th>
                        </tr>    
                    </tfoot>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td>{{$item->codeNo}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}} MMK</td>
                            <td>{{$item->discount}} MMK</td>
                            <td>{{$item->inStock}}</td>
                            <td>Action</td>
                        </tr>  
                        @endforeach  
                    </body>
                </table>
            </div>
        </div>
    </div>
@endsection
         
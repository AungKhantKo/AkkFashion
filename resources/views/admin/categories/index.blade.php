@extends('layouts.admin')
@section('content')
    <!-- @php
        var_dump($categories)
    @endphp -->
    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Categories</h3>
            <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Add Category</a>
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
                            <th>Name</th>                
                            <th>Image</th>                                                        
                            <th>Action</th>
                        </tr>    
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>                
                            <th>Image</th>                                                    
                            <th>Action</th>
                        </tr>    
                    </tfoot>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->image}}</td>
                            <td>Action</td>
                        </tr>  
                        @endforeach  
                    </body>
                </table>
            </div>
        </div>
    </div>
@endsection
         
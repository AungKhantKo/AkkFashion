@extends('layouts.admin')
@section('content')
    <!-- @php
        var_dump($users)
    @endphp -->
    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Users</h3>
            <a href="{{route('backend.users.create')}}" class="btn btn-primary float-end">Add User</a>
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
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>    
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>    
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}} </td>
                            <td>{{$user->address}} </td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->role}}</td>
                            <td>Action</td>
                        </tr>  
                        @endforeach  
                    </body>
                </table>
            </div>
        </div>
    </div>
@endsection
         
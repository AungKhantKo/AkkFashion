@extends('layouts.admin')
@section('content')
    <!-- @php
        var_dump($payments)
    @endphp -->
    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Payments</h3>
            <a href="{{route('backend.payments.create')}}" class="btn btn-primary float-end">Add Payment</a>
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
                        @foreach($payments as $payment)
                        <tr>
                            <td>{{$payment->name}}</td>
                            <td>{{$payment->image}}</td>
                            <td>Action</td>
                        </tr>  
                        @endforeach  
                    </body>
                </table>
            </div>
        </div>
    </div>
@endsection
         
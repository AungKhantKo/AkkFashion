@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <div class="my-5">
            <h3 class="my-4 d-inline">Orders Pending</h3>
            <a href="" class="btn btn-success float-end mx-3">Order Complete List</a>
            <a href="" class="btn btn-primary float-end mx-3">Order Accept List</a>
            <a href="" class="btn btn-danger float-end">Order Pending List</a>

        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Orders List
            </div>
            <div class="card-body">
                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>voucherNo</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>Payment Type</th>
                            <th>Action</th>
                        </tr>    
                    </thead>
                    <tfoot>
                        <tr>
                            <th>voucherNo</th>
                            <th>User Name</th>
                            <th>Status</th>
                            <th>Payment Type</th>
                            <th>Action</th>
                        </tr>    
                    </tfoot>
                    <tbody>
                        @foreach($ordersWithUser as $order)
                            @if($order != null)
                                <tr>
                                    <td>{{$order->vocherNo}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td><span class="badge text-bg-danger">{{$order->status}}</span></td>
                                    <td>{{$order->payment->name}}</td>
                                    <td><a href="{{route('backend.orders.detail',$order->vocherNo)}}" class="btn btn-sm btn-primary">Details</a></td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection


        
@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">Users Create</h3>
                <a href="{{route('backend.users.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="{{route('backend.users.store')}}" method="POST" class="border">
                {{csrf_field()}}
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-3 ">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input type="Phone" class="form-control" name="phone" id="phone" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="address" class="form-label fw-bold">Address</label>
                            <textarea class="form-control" placeholder="" name="address" id="address"></textarea>
                        </div>
                        <div class="mb-3 ">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="role" class="form-label fw-bold">Role</label>
                            <select class="form-select" name="role" aria-label="Default select example">
                                <option selected>Admin</option>
                                <option value="Seller">Seller</option>
                                <option value="User">User</option>                                
                            </select>
                        </div>                     
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection
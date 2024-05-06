@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">User Edit</h3>
                <a href="{{route('backend.users.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="{{route('backend.users.update',$user->id)}}" method="POST" class="border">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{$user->name}}" id="name" placeholder="">

                            @if($errors->has('name'))
                                <div>
                                    {{$errors->first('name')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" type="email" name="email" value="{{$user->email}}" id="email" placeholder="example@gmail.com">

                            @if($errors->has('email'))
                                <div>
                                    {{$errors->first('email')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input type="Phone" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" name="phone" value="{{$user->phone}}" id="phone" placeholder="">

                            @if($errors->has('phone'))
                                <div>
                                    {{$errors->first('phone')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="address" class="form-label fw-bold">Address</label>
                            <textarea class="form-control {{$errors->has('address') ? 'is-invalid' : ''}}" placeholder="" name="address" id="address">{{$user->address}}</textarea>

                            @if($errors->has('address'))
                                <div>
                                    {{$errors->first('address')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" name="password" value="{{$user->password}}" id="password" placeholder="">

                            @if($errors->has('password'))
                                <div>
                                    {{$errors->first('password')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="role" class="form-label fw-bold">Role</label>
                            <select class="form-select {{$errors->has('role') ? 'is-invalid' : ''}}" name="role" aria-label="Default select example">
                            <option value="">Choose role</option>
                                <option value="admin" {{$user->role == "admin" ? 'selected':''}}>Admin</option>
                                <option value="seller" {{$user->role == "seller" ? 'selected':''}}>Seller</option>
                                <option value="user" {{$user->role == "user" ? 'selected':''}}>User</option>                                
                            </select>

                            @if($errors->has('role'))
                                <div>
                                    {{$errors->first('role')}}
                                </div>
                            @endif

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
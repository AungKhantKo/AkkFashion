@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">Payments Create</h3>
                <a href="{{route('backend.payments.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="{{route('backend.payments.store')}}" method="POST" enctype="multipart/form-data" class="border">
                {{csrf_field()}}
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" id="name" placeholder="">
                            @if($errors->has('name'))

                            <div class="invalid-feedback">
                            {{$errors->first('name')}}
                            </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Image</label>
                            <input class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" type="file" name="image" id="image">

                            @if($errors->has('image'))

                            <div class="invalid-feedback">
                            {{$errors->first('image')}}
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
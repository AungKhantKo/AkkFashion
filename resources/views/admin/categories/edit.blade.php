@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">Category Edit</h3>
                <a href="{{route('backend.categories.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="{{route('backend.categories.update',$category->id)}}" method="POST" enctype="multipart/form-data" class="border">
                {{csrf_field()}}
                {{method_field('put')}}
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" name="name" value="{{$category->name}}" id="name" placeholder="">

                            @if($errors->has('name'))
                                <div>
                                {{$errors->first('name')}}
                                </div>
                            @endif

                        </div>
                        <div class="mb-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="old_image-tab" data-bs-toggle="tab" data-bs-target="#old_image-tab-pane" type="button" role="tab" aria-controls="old_image-tab-pane" aria-selected="true">Old image</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New image</button>
                                </li>
                            
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="old_image-tab-pane" role="tabpanel" aria-labelledby="old_image-tab" tabindex="0">
                                    <img src="{{$category->image}}" alt="" class="w-25  my-3">
                                        <input class="form-control" accept="image/*" type="hidden" name="old_image" id="" value="{{$category->image}}">
                                </div>

                                <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                                    <input class="form-control my-3" accept="image/*" type="file" name="new_image" id="image">
                                </div>  

                            </div>
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
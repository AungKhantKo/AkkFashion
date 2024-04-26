@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">Items Create</h3>
                <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="{{route('backend.items.store')}}" method="POST" enctype="multipart/form-data" class="border"> 
                {{csrf_field()}}
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        
                        <div class="mb-3 mt-3">
                            <label for="codeNo" class="form-label fw-bold">CodeNo</label>
                            <input type="text" class="form-control {{$item->codeNo}} {{$errors->has('codeNo') ? 'is-invalid' : '' }}" id="codeNo" value="{{$item->codeNo}}" name="codeNo" placeholder="" >
                            @if($errors->has('codeNo'))

                            <div class="invalid-feedback">
                                {{$errors->first('codeNo')}}
                            </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : '' }}" id="name" value="{{$item->name}}" name="name"placeholder="">

                            @if($errors->has('name'))

                            <div class="invalid-feedback">
                                {{$errors->first('name')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Image</label>
                            <input class="form-control {{$errors->has('image') ? 'is-invalid' : '' }}" accept="image/*" type="file" name="image" id="image">

                            @if($errors->has('image'))

                            <div class="invalid-feedback">
                                {{$errors->first('image')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="price" class="form-label fw-bold">Price</label>
                            <input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : '' }}" id="price" name="price" value="{{$item->price}}" placeholder="">

                            @if($errors->has('price'))

                            <div class="invalid-feedback">
                                {{$errors->first('price')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="discount" class="form-label fw-bold">Discount</label>
                            <input type="text" class="form-control {{$errors->has('discount') ? 'is-invalid' : '' }}" id="discount" value="{{$item->discount}}" name="discount" placeholder="">

                            @if($errors->has('discount'))

                            <div class="invalid-feedback">
                                {{$errors->first('discount')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="inStock" class="form-label fw-bold">Instock</label>
                            <select class="form-select {{$errors->has('inStock') ? 'is-invalid' : '' }}" name="inStock" aria-label="Default select example">
                                <option value="">Choose Instock</option>
                                <option value="1" {{$item->inStock == 1 ? 'selected':''}}>Yes</option>
                                <option value="2" {{$item->inStock == 2 ? 'selected':''}}>No</option>                                
                            </select>

                            @if($errors->has('inStock'))

                            <div class="invalid-feedback">
                                {{$errors->first('inStock')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="category" class="form-label fw-bold">Category</label>
                            <select class="form-select {{$errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id" aria-label="Default select example">
                                <option value="">Choose Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"{{$item->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                                    
                                @endforeach                                
                            </select>

                            @if($errors->has('category_id'))

                            <div class="invalid-feedback">
                                {{$errors->first('category_id')}}
                            </div>

                            @endif

                        </div>
                        <div class="mb-3 ">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control {{$errors->has('description') ? 'is-invalid' : '' }}" placeholder="" name="description" id="description">{{$item->description}}</textarea>

                            @if($errors->has('description'))

                            <div class="invalid-feedback">
                                {{$errors->first('description')}}
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
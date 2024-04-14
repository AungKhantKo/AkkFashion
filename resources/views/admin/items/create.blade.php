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
                            <input type="text" class="form-control" id="codeNo" name="codeNo" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" id="name" name="name"placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label fw-bold">Image</label>
                            <input class="form-control" accept="image/*" type="file" name="image" id="image">
                        </div>
                        <div class="mb-3 ">
                            <label for="price" class="form-label fw-bold">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="discount" class="form-label fw-bold">Discount</label>
                            <input type="text" class="form-control" id="discount" name="discount" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="inStock" class="form-label fw-bold">Instock</label>
                            <select class="form-select" name="inStock" aria-label="Default select example">
                                
                                <option value="1" selected>Yes</option>
                                <option value="2">No</option>                                
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="category" class="form-label fw-bold">Category</label>
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option selected>Choose Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    
                                @endforeach                                
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control" placeholder="" name="description" id="description"></textarea>
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
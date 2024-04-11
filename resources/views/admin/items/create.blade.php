@extends('layouts.admin');
@section('content')
<div class="container-fluid px-4">
            <div class="my-4">
                <h3 class="my-4 d-inline">Items Create</h3>
                <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end">Cancel</a>
            </div>

        <div class="container-md">
            <form action="" class="border">
                <div class="row py-2">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">CodeNo</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label fw-bold">Image</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Price</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Discount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Instock</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>                                
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Category</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Choose Category</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>                                
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Description</label>
                            <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>
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
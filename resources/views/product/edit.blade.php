@extends('master')

@section('title')
    Edit Product Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">
                                Update Product Here...
                            </h1>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Category Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category" value="{{$product->category}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Brand Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand" value="{{$product->brand}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price" value="{{$product->price}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Product Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control">{{$product->description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control col-md-9">
                                        <img src="{{asset($product->image)}}" alt="" height="100" width="120">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3 fs-6"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" name="add_btn" value="Update Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

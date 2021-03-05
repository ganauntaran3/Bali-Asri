@extends('layouts.app')

@section('body')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">

            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif

            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">Product</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form action="{{ route('product.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Product Name</label>
                      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter the product name">
                    </div>

                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control tinymce-editor" name="desc"  id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlInput1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Enter the product price">
                      </div>

                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlSelect1">Category</label>
                        <select class="form-control" name="category" id="exampleFormControlSelect1">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{$category->id == $products->category_id ? "selected" : ""}}>{{ $category->category }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlSelect1">Type</label>
                        <select class="form-control" name="type" id="exampleFormControlSelect1">
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{$type->id == $products->type_id ? "selected" : ""}}>{{ $type->type }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" name="img" id="formFile">
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                  </form>
                </div>
              </div>
        </div>

    </div>
</div>
@endsection

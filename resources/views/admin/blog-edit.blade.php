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
                  <h3 class="mb-0">About Us Blog</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form action="{{ route('blog.update', $blogs->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Title</label>
                      <input type="text" name="title" value="{{ $blogs->title }}" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlTextarea1">Content</label>
                      <textarea class="form-control tinymce-editor" name="content"  id="exampleFormControlTextarea1" rows="3">{{ $blogs->paragraph }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" name="thumbnail" id="formFile">

                        <img class="mt-4" style="width:150px" src="{{ asset('thumbnail/'.$blogs->thumbnail) }}" alt="">
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

@extends('layouts.app')

@section('body')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">About Us Blog</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Title</label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlTextarea1">Content</label>
                      <textarea class="form-control tinymce-editor" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </form>
                </div>
              </div>
        </div>

    </div>
</div>
@endsection

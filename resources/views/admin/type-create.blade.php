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
                  <h3 class="mb-0">Product Type</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form action="{{ route('type.post') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Type</label>
                      <input type="text" name="type" class="form-control" id="exampleFormControlInput1" placeholder="Enter new Type">
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('admin/type') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                  </form>
                </div>
              </div>
        </div>

    </div>
</div>
@endsection

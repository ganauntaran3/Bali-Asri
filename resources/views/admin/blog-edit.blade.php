@extends('layouts.app')

@section('body')
<div class="container-fluid mt-4">
    <div class="row align-items-center">
        <div class="col-lg-10">
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
                  <h3 class="mb-0">Administrator</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <form action="{{ route('user.post') }}" method="POST">
                      @csrf


                      @foreach ($users as $user)
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Username</label>
                      <input type="text" name="username" class="form-control" value="{{ $user->username }}" id="exampleFormControlInput1" placeholder="Enter the username">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Email</label>
                      <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter the email">
                    </div>
                    <div class="form-group">
                      <label class="form-control-label" for="exampleFormControlInput1">Password</label>
                      <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter the password">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </div>
                    @endforeach

                  </form>

                </div>
              </div>
        </div>

    </div>
</div>
@endsection

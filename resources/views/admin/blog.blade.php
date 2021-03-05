@extends('layouts.app')

@section('body')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">

            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text">{{ session('message') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                  <div class="row">
                    <div class="col-6">
                      <h3 class="mb-0">Blog</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn btn-icon btn-primary text-white" href="{{ url('admin/blog-create') }}">
                            <span class="btn-inner--icon"><i class="fas fa-plus-square"></i></span>
                            <span class="btn-inner--text">Add Blog</span>
                          </a>
                    </div>
                  </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td><img src="{{ asset('thumbnail/'. $blog->thumbnail) }}" alt="" style="width: 150px"></td>
                                <td>{{ $blog->title }}</td>
                                <td>{!! $blog->paragraph !!}</td>
                                <td>{{ $blog->created_at }}</td>
                                <td class="table-actions">
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Edit Blog">
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('blog.delete', $blog->id) }}" onclick="return hapus('Are You Sure Want to Delete this Data?');" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Blog">
                                      <i class="fas fa-trash"></i>
                                    </a>
                                  </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection


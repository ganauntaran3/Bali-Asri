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
                      <h3 class="mb-0">Email Inbox</h3>
                    </div>
                    <div class="col-6 text-right">

                    </div>
                  </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>subject</th>
                        <th>Message</th>
                        <th>Created at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mails as $mail)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $mail->name }}</td>
                                <td>{{ $mail->email }}</td>
                                <td>{{ $mail->subject }}</td>
                                <td>{{ $mail->message }}</td>
                                <td>{{ $mail->created_at }}</td>
                                <td class="table-actions">
                                    <a href="{{ route('mail.delete', $mail->id) }}" onclick="return hapus('Are You Sure Want to Delete this Data?');" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
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


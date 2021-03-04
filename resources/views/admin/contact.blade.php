@extends('layouts.app')

@section('body')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection


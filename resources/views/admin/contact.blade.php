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
                      <h3 class="mb-0">Inbox</h3>
                    </div>
                    <div class="col-6 text-right">
                      <a href="#" class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
                        <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                        <span class="btn-inner--text">Export</span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush table-striped">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Created at</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="table-user">
                          <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                          <b>John Michael</b>
                        </td>
                        <td>
                          <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-user">
                          <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3">
                          <b>Alex Smith</b>
                        </td>
                        <td>
                          <span class="text-muted">08/09/2018</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">Argon Design System</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-user">
                          <img src="../../assets/img/theme/team-3.jpg" class="avatar rounded-circle mr-3">
                          <b>Samantha Ivy</b>
                        </td>
                        <td>
                          <span class="text-muted">30/08/2018</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">Black Dashboard</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-user">
                          <img src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle mr-3">
                          <b>John Michael</b>
                        </td>
                        <td>
                          <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-user">
                          <img src="../../assets/img/theme/team-2.jpg" class="avatar rounded-circle mr-3">
                          <b>John Michael</b>
                        </td>
                        <td>
                          <span class="text-muted">10/09/2018</span>
                        </td>
                        <td>
                          <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a>
                        </td>
                        <td class="table-actions">
                          <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="#!" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection

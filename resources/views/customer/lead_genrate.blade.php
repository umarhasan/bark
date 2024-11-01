@extends('customer.layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leads Generate</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leads/Generate</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lead Genrate List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Need</th>
                    <th>Business</th>
                    <th>Industry</th>
                    <th>Live Website</th>
                    <th>Budget</th>
                    <th>Hiring Decision</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Zip</th>
                    <th>Address</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  @if($leads)
                 
                      @foreach ($leads as $lead)
                        <tr>
                        <td>{{ $lead->need }}</td>
                        <td>{{ $lead->business }}</td>
                        <td>{{ $lead->industry }}</td>
                        <td>{{ $lead->live_website }}</td>
                        <td>{{ $lead->budget }}</td>
                        <td>{{ $lead->hire }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>{{ $lead->zip }}</td>
                        <td>{{ $lead->address }}</td>
                        <!-- <td> -->
                        <!-- <button class="btn btn-primary" data-leadid="{{ $lead->id }}" onclick="showAssignToCompanyModal(this)">Assign</button> -->
                          <!-- <button class="btn btn-primary" data-leadid="{{ $lead->id }}" onclick="showAssignToCompanyModal()">Assign to Company</button> -->
                        <!-- </td> -->
                        </tr>
                    @endforeach
                  @endif
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    <!-- <div class="modal fade" id="assignToCompanyModal" tabindex="-1" role="dialog" aria-labelledby="assignToCompanyModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="assignToCompanyModalLabel">Assign Lead to Company</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              <form id="msform" method="post" action="{{ route('customer.assign_to_company') }}">
                  @csrf
                  <div class="modal-body">
                  <select name="lead_assign_company_id" id="company_user" class="form-control">
                    <option value="">Select Company User</option>
                      @foreach ($companyUsers as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                      @endforeach
                  </select><br>
                  <input type="hidden" name="lead_id" id="lead_id" value="">    
                  <div class="col-xs-6 col-sm-6 col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
         
          </div>
        </div>
      </div>
    </div> -->
    </section>
    <!-- /.content -->
  </div>

@endsection

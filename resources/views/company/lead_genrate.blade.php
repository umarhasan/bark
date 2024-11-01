@extends('company.layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-9">
            {{-- <h1>Leads Generate</h1> --}}
          </div>
          <div class="col-sm-3">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Leads / Generate</li>
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
                <h3 class="card-title">Leads Generate</h3>
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
                    <th>Action</th>
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
                        <td>
                          <a href="{{ route('company.purchase.package',$lead->id) }}" class="subscription-btn btn btn-primary">Pick</a>
                        </td>
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

<!-- Modal Start -->

   <!-- Modal End -->
    </section>
    <!-- /.content -->
  </div>

@endsection

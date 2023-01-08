@extends('admin.master-layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List of Customer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admins">Home</a></li>
                    <li class="breadcrumb-item active">List of Customer</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Customer</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="order-list" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            @foreach($customers as $cus)
                            <tbody>
                                <tr>
                                    <td>{{$cus->customer_id}}</td>
                                    <td>{{$cus->customer_name}}</td>
                                    <td>{{$cus->customer_email}}</td>
                                    <td>{{$cus->customer_contact}}</td>
                                    <td>{{$cus->gender_type}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection
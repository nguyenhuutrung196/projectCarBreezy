@extends('admin.master-layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Employee</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admins">Home</a></li>
                    <li class="breadcrumb-item active">Create Employee</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create <small>Employee</small></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('emps.store') }}" method="post" id="quickForm" novalidate="novalidate">
                        @csrf
                        @if(session()->get('fail-msg'))
                            <div class="alert alert-danger">
                            {{ session()->get('fail-msg') }}  
                            </div><br />
                        @endif
                        @if(session()->get('succ-msg'))
                            <div class="alert alert-success">
                            {{ session()->get('succ-msg') }}  
                            </div><br />
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="emp_name" class="form-control" id="Name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="emp_pwd" class="form-control" id="Address"
                                    placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" name="emp_contact" class="form-control" id="Phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="emp_email" class="form-control" id="Email" placeholder="Email">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection
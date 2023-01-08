@extends('admin.master-layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List of Car</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admins">Home</a></li>
                    <li class="breadcrumb-item active">List of Car</li>
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
                        <h3 class="card-title">List of Car</h3>
                    </div>
                    <!-- /.card-header -->
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}  
                        </div><br />
                    @endif
                    <div class="card-body">
                        <table id="list" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Brand</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Year of Manufacture</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                    <td>{{$car -> car_id}}</td>
                                    <td>{{$car -> car_brand}}</td>
                                    <td>{{$car -> car_name}}</td>
                                    <td><img src="{{asset('upload')}}/{{$car->car_img_name1}}" height="100px" width="170px"/></td>
                                    <td>{{$car -> car_status}}</td>
                                    <td>{{$car -> car_price}}</td>
                                    <td>{{$car -> car_manufacturer_year}}</td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('cars.edit', $car->car_id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm">
                                            <form action="{{ route('cars.destroy', $car->car_id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"  type="submit">Delete</button>
                                            </form>
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
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
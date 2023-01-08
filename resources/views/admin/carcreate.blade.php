@extends('admin.master-layout')


@section('head')
<script src="/ckeditor_4.19.0_full/ckeditor/ckeditor.js"></script>
@endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                        <h3 class="card-title">Create <small>Category</small></h3>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
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
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <label for="">Name Brand</label>
                            <select name="car_brand" id="nameCate">
                                <option value="" selected disabled hidden>Select Brand</option>
                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                <option value="BMW">BMW</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Ford">Ford</option>
                                <option value="Lexus">Lexus</option>
                            </select>
                            <div class="form-group">
                                <label for="">Name Car</label>
                                <input type="text" name="car_name" class="form-control" id="namecar"
                                    placeholder="Enter Name Car">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" name="car_img_name1" class="form-control" id="image" multiple>
                                <input type="file" name="car_img_name2" class="form-control" id="image" multiple>
                                <input type="file" name="car_img_name3" class="form-control" id="image" multiple>
                                <input type="file" name="car_img_name4" class="form-control" id="image" multiple>
                            </div>
                            <div class="form-group">
                                <label for="">Model</label>
                                <select name="car_model" id="model">
                                    <option value="" selected disabled hidden>Select Model</option>
                                    <option value="Hatch">Hatch</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Convertible">Convertible</option>
                                    <option value="Coupe">Coupe</option>
                                    <option value="PeopleMover">People Mover</option>
                                </select></div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="car_price" class="form-control" id="price" placeholder="Price">
                            </div>
                            <div class="form-group">
                            <label for="">Year of Manufacture</label>
                                <select name="car_manufacturer_year" id="year">
                                    <option value="" selected disabled hidden>Select Year</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select></div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="car_content" id="description" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1"
                                        name="car_status" value="New">
                                    <label for="customRadio1" class="custom-control-label">New</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                        name="car_status" value="Used">
                                    <label for="customRadio2" class="custom-control-label">Used</label>
                                </div>
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
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection

@section('foot')
<script>
CKEDITOR.replace('description');
</script>
@endsection
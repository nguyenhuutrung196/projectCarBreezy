@extends('admin.master-layout')

@section('head')
<script src="/ckeditor_4.19.0_full/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                        <h3 class="card-title">Create <small></small></h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <form method="post" action="{{ route('cars.update', $car->car_id ) }}">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label for="cases">Car Name:</label>
                                <input type="text" class="form-control" name="car_name" 
                                    value="{{ $car->car_name }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Car Brand:</label>
                                <select name="car_brand" id="nameCate">
                                    <option value="{{ $car->car_brand }}" selected hidden>{{ $car->car_brand }}</option>
                                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="Ford">Ford</option>
                                    <option value="Lexus">Lexus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cases">Model:</label>
                                <select name="car_model" id="model">
                                    <option value="{{ $car->car_model }}" selected hidden>{{ $car->car_model }}</option>
                                    <option value="{{ $car->car_model }}">Hatch</option>
                                    <option value="{{ $car->car_model }}">SUV</option>
                                    <option value="{{ $car->car_model }}">Sedan</option>
                                    <option value="{{ $car->car_model }}">Convertible</option>
                                    <option value="{{ $car->car_model }}">Coupe</option>
                                    <option value="{{ $car->car_model }}">People Mover</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cases">Price:</label>
                                <input type="money" class="form-control" name="car_price"
                                    value="{{ $car->car_price }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Image:</label>
                                <div>
                                <input type="file" class="form-control" name="car_img_name1"
                                    value=""/>{{$car->car_img_name1}}
                                </div>
                                <div>
                                <input type="file" class="form-control" name="car_img_name2"
                                    value="" />{{$car->car_img_name2}}
                                </div>
                                <div>
                                <input type="file" class="form-control" name="car_img_name3"
                                    value="" />{{$car->car_img_name3}}
                                </div>    
                                <div>
                                <input type="file" class="form-control" name="car_img_name4"
                                    value="" />{{$car->car_img_name4}}
                                </div>    
                            </div>
                            <div class="form-group">
                                <label for="cases">Color:</label>
                                <input type="text" class="form-control" name="car_color"
                                    value="{{ $car->car_color }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Hp:</label>
                                <input type="number" class="form-control" name="car_hp" value="{{ $car->car_hp }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Type:</label>
                                <input type="text" class="form-control" name="car_type" value="{{ $car->car_hp }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Engine:</label>
                                <input type="text" class="form-control" name="car_engine" value="{{ $car->car_hp }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Fuel:</label>
                                <input type="text" class="form-control" name="car_fuel" value="{{ $car->car_hp }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Transmission:</label>
                                <input type="text" class="form-control" name="car_transmission" value="{{ $car->car_hp }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Description:</label>
                                <input type="text" class="form-control" name="car_content" id="description"
                                    value="{{ $car->car_content }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">Manufacture Year:</label>
                                <select name="car_manufacturer_year" id="year">
                                    <option value="{{ $car->car_manufacturer_year }}" selected hidden>{{ $car->car_manufacturer_year }}</option>
                                    <option value="2015">2015</option>
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
                                </select>
                            </div>
                            @if($car->car_status == 'Used')
                            <div class="form-group">
                                <label for="cases">Distance Traveled:</label>
                                <input type="year" class="form-control" name="car_distance_traveled"
                                    value="{{ $car->car_distance_traveled }}" />
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('foot')
<script>
CKEDITOR.replace('description');
</script>
@endsection
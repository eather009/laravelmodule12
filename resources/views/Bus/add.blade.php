@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('bus.add') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Bus Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter bus name" required>
                            </div>
                            <div class="form-group">
                                <label for="plate_number">Bus Plate Number</label>
                                <input type="text" class="form-control" id="plate_number" name="plate_number" placeholder="Enter bus plate number" required>
                            </div>
                            <div class="form-group">
                                <label for="model">Bus Model</label>
                                <input type="text" class="form-control" id="model" name="model" placeholder="Enter bus model" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Bus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

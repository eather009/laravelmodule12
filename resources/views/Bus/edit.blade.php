@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Bus</h3>
                        <div class="card-tools">
                            <a href="{{ route('bus.index') }}" class="btn btn-primary">List of Buses</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bus.edit', $bus->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Bus Name</label>
                                <input type="text" class="form-control" id="name" name="name"  value="{{ $bus->name }}" placeholder="Enter bus name" required>
                            </div>
                            <div class="form-group">
                                <label for="plate_number">Bus Plate Number</label>
                                <input type="text" class="form-control" id="plate_number" name="plate_number"  value="{{ $bus->plate_number }}" placeholder="Enter bus plate number" required>
                            </div>
                            <div class="form-group">
                                <label for="model">Bus Model</label>
                                <input type="text" class="form-control" id="model" name="model"  value="{{ $bus->model }}" placeholder="Enter bus model" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Bus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Location</h3>
                        <div class="card-tools">
                            <a href="{{ route('location.index') }}" class="btn btn-primary">List of Location</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('location.edit', $location->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Location Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$location->name}}" placeholder="Enter location name" required>
                            </div>
                            <div class="form-group">
                                <label for="division">Location Division</label>
                                <input type="text" class="form-control" id="division" name="division" value="{{$location->division}}" placeholder="Enter location division name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Location</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

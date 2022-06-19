@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Game Data
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
            <form method="post" action="{{ route('devices.update', $device->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Game Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $device->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">Game Price :</label>
                    <input type="text" class="form-control" name="price" value="{{ $device->price }}"/>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Update Data</button>
                    <a href="{{ route('devices.index')}}" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection

<!-- index.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <a href="{{ route('devices.create')}}" class="btn btn-primary mb-3">Add</a>
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Device Name</td>
                <td>Device Price</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($devices as $device)
                <tr>
                    <td>{{$device->id}}</td>
                    <td>{{$device->name}}</td>
                    <td>{{$device->price}}</td>
                    <td><a href="{{ route('devices.edit', $device->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('devices.destroy', $device->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection

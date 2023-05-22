@extends('master')

@section('content') 

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif 

    <form action="#" method="post">
        @csrf

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$brand->description}}" disabled readonly>
        </div>

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>

@endsection
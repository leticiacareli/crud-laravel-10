@extends('master')

@section('content')

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif    

    <form action="{{route('brands.update', ['brand' => $brand->id])}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$brand->description}}">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

@endsection
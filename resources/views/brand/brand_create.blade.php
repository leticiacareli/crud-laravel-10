@extends('master')

@section('content')

    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif    

    <form action="{{route('brands.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Brand">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

@endsection